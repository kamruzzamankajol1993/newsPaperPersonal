<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Divisionnewscategory;
use App\Models\PostCategory;
use App\Models\Subcategory;
use DB;
use App\Models\Post;
use App\Models\User;
use Image;
class DivisionCategory extends Controller
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

        if (is_null($this->user) || !$this->user->can('division_cat_view')) {
            return redirect('/admin/logout_session');
        }
       // dd(1);

       $categories=PostCategory::whereIn('id',[55,56,57,58,59,60,61,62])->get();

        $category_list = Subcategory::get();

        return view('backend.div_news_cat.index',compact('category_list','categories'));
    }


    public function store(Request $request){
        if (is_null($this->user) || !$this->user->can('division_cat_add')) {
            abort(403, 'Sorry !! You are Unauthorized to add any data !');
        }



            $category_list = new Subcategory();
            $category_list->cat_name=$request->cat_name;
    	$category_list->sub_name=$request->sub_name;
    	$category_list->status=$request->status;
            $category_list->save();







            return redirect()->back()->with('success','Created Successfully');

    }

    public function update(Request $request){
        if (is_null($this->user) || !$this->user->can('division_cat_update')) {
            abort(403, 'Sorry !! You are Unauthorized to update any data !');
        }
        $category_list = Subcategory::find($request->id);
        $category_list->cat_name=$request->cat_name;
    	$category_list->sub_name=$request->sub_name;
    	$category_list->status=$request->status;
        $category_list->save();


        return redirect()->back()->with('info','Updated Successfully');

}

public function delete($id)
    {
        //dd(1);
        if (is_null($this->user) || !$this->user->can('division_cat_delete')) {
            abort(403, 'Sorry !! You are Unauthorized to delete any data !');
        }
        $admins = Subcategory::find($id);
        if (!is_null($admins)) {
            $admins->delete();
        }


        return back()->with('error','Deleted successfully!');
    }

}
