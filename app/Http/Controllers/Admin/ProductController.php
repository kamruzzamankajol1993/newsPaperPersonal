<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Imageupload;
use App\Models\Category;
use App\Models\AttributeDetail;
use Illuminate\Support\Facades\Auth;

class ProductController extends Controller
{

	public $user;


    public function __construct()
    {
        $this->middleware(function ($request, $next) {
            $this->user = Auth::guard('admin')->user();
            return $next($request);
        });
    }


    public function create(){

        if (is_null($this->user) || !$this->user->can('product_add')) {
            //abort(403, 'Sorry !! You are Unauthorized to view Product List !');

             return redirect('/admin/logout_session');
        }

        $image_list = Imageupload::latest()->get();
        $category_list = Category::select('cat_name')->distinct()->latest()->get();

        $attribute_list_color = AttributeDetail::where('main_id_att','color')->latest()->get();
        return view('backend.product.create',compact('attribute_list_color','image_list','category_list'));

    }



  public function index(Request $request){


    if (is_null($this->user) || !$this->user->can('product_view')) {
        //abort(403, 'Sorry !! You are Unauthorized to view Product List !');

         return redirect('/admin/logout_session');
    }

$total_data = Product::latest()->count();

$total_serial_number1= $total_data/10;

if (is_float($total_serial_number1)){
    $total_serial_number = ceil($total_serial_number1);

}else{
    $total_serial_number = $total_serial_number1;
}

 //dd($total_serial_number);

    $product_list = Product::latest()->limit(10)->get();



    return view('backend.product.index',compact('product_list','total_serial_number'));
  }


  public function main_search_button_product(Request $request){

         $search = $request->search;


         $total_data = Product::where('product_name','LIKE','%'.$request->search.'%')->latest()->count();

$total_serial_number1= $total_data/10;

if (is_float($total_serial_number1)){
    $total_serial_number = ceil($total_serial_number1);

}else{
    $total_serial_number = $total_serial_number1;
}

 //dd($total_serial_number);

    $product_list = Product::where('product_name','LIKE','%'.$request->search.'%')->latest()->limit(10)->get();

    $data = view('backend.product.main_search_button_product',compact('product_list','total_serial_number','search'))->render();
    return response()->json(['options'=>$data]);
  }



  public function fetch_data(Request $request){

    $id_for_pass = $request->id_for_pass;

    if($id_for_pass == 1){

        $total_data = Product::latest()->count();
        $total_serial_number1= $total_data/10;

if (is_float($total_serial_number1)){
    $total_serial_number = ceil($total_serial_number1);

}else{
    $total_serial_number = $total_serial_number1;
}
        $product_list = Product::latest()->limit(10)->get();
        $minus_one = 0;
    }else{
        $total_data = Product::latest()->count();
        $total_serial_number1= $total_data/10;

if (is_float($total_serial_number1)){
    $total_serial_number = ceil($total_serial_number1);

}else{
    $total_serial_number = $total_serial_number1;
}
        $minus_one = ($id_for_pass - 1)*10;

        $product_list = Product::latest()->skip($minus_one)->take(10)->get();
    }

    $data = view('backend.product.pagiresult',compact('minus_one','product_list','total_serial_number','id_for_pass'))->render();
            return response()->json(['options'=>$data]);
  }


  public function fetch_data_search(Request $request){

    $id_for_pass = $request->id_for_pass;
    $first_search_result = $request->first_search_result;

    if($id_for_pass == 1){

        $total_data = Product::where('product_name','LIKE','%'.$first_search_result.'%')->latest()->count();
        $total_serial_number1= $total_data/10;

if (is_float($total_serial_number1)){
    $total_serial_number = ceil($total_serial_number1);

}else{
    $total_serial_number = $total_serial_number1;
}
        $product_list = Product::where('product_name','LIKE','%'.$first_search_result.'%')->latest()->limit(10)->get();
        $minus_one = 0;
    }else{
        $total_data = Product::where('product_name','LIKE','%'.$first_search_result.'%')->latest()->count();
        $total_serial_number1= $total_data/10;

if (is_float($total_serial_number1)){
    $total_serial_number = ceil($total_serial_number1);

}else{
    $total_serial_number = $total_serial_number1;
}
        $minus_one = ($id_for_pass - 1)*10;

        $product_list = Product::where('product_name','LIKE','%'.$first_search_result.'%')->latest()->skip($minus_one)->take(10)->get();
    }

    $data = view('backend.product.fetch_data_search',compact('first_search_result','minus_one','product_list','total_serial_number','id_for_pass'))->render();
            return response()->json(['options'=>$data]);

  }






}
