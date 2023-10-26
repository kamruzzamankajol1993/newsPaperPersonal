<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Category;
use App\Models\PostCategory;
use DB;
class CategoryController extends Controller
{
    public $user;


    public function __construct()
    {
        $this->middleware(function ($request, $next) {
            $this->user = Auth::guard('admin')->user();
            return $next($request);
        });
    }

    public function index(){

        if (is_null($this->user) || !$this->user->can('category_view')) {
            return redirect('/admin/logout_session');
        }
       // dd(1);

        $category_list = PostCategory::orderBy('image','asc')->get();

        return view('backend.category.index',compact('category_list'));
    }


    public function store(Request $request){
        if (is_null($this->user) || !$this->user->can('category_add')) {
            abort(403, 'Sorry !! You are Unauthorized to add any data !');
        }



            $category_list = new PostCategory();
            $category_list->name = $request->name;
            $category_list->eng_name = $request->eng_name;
            $category_list->status = $request->status;
            $category_list->save();







            return redirect()->back()->with('success','Created Successfully');

    }

    public function update(Request $request){
        if (is_null($this->user) || !$this->user->can('category_update')) {
            abort(403, 'Sorry !! You are Unauthorized to update any data !');
        }
        $category_list = PostCategory::find($request->id);
        $category_list->name = $request->name;
        $category_list->eng_name = $request->eng_name;
        $category_list->status = $request->status;
        $category_list->save();


        return redirect()->back()->with('info','Updated Successfully');

}

public function delete($id)
    {
        //dd(1);
        if (is_null($this->user) || !$this->user->can('category_delete')) {
            abort(403, 'Sorry !! You are Unauthorized to delete any data !');
        }
        $admins = PostCategory::find($id);
        if (!is_null($admins)) {
            $admins->delete();
        }


        return back()->with('error','Deleted successfully!');
    }


    public function custome_position_of_category(){
        $category_list = PostCategory::orderBy('image','asc')->get();
        return view('backend.category.custome_position_of_category',compact('category_list'));
    }


    public function category_type(Request $request){

        $cat_type = $request->cat_type;


        $data = view('backend.category.category_type',compact('cat_type'))->render();

       return response()->json($data);


    }

    public function sub_category_type(Request $request){

        return view('backend.category.sub_category_type');
    }


    public function custome_position_of_category_update(Request $request)
    {


        if($request->has('ids')){
            $arr = explode(',',$request->input('ids'));

            foreach($arr as $sortOrder => $id){
                $menu = PostCategory::find($id);
                $menu->image = $sortOrder;
                $menu->save();
            }
            return ['success'=>true,'message'=>'Updated'];
        }

    }
}
