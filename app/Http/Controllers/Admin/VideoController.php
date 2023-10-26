<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\subcategory;
use App\Models\News;
use App\Models\Post;
use Image;
use DB;
use Illuminate\Support\Facades\Auth;
class VideoController extends Controller
{
    public function index()
    {
        if(Auth::guard('admin')->user()->id == 1){
    $allPost=Post::where('category_id',52)->get();
        }else{
            $allPost=Post::where('category_id',52)->where('user_id',Auth::guard('admin')->user()->id)->get();

        }
    return view('backend.video.index')->with(['allPost'=>$allPost]);
    }


    public function create()
    {
        $categories=Category::where('id','=',52)->get();
    return view('backend.video.create')->with(['categories'=>$categories]);
    }


    public function store(Request $request){
        $video = new Post();
        $video->user_id=Auth::guard('admin')->user()->id;
        $video->title=$request->title;
        $video->caption=$request->caption;
        $video->op_title=$request->op_title;
        $video->total_view=$request->total_view;
         $video->category_id=$request->category_id;
        $video->cover_image = $request->cover_image;
        $video->paragraph=$request->content;
        $video->status = $request->status;
        $video->public_site=$request->public_site;
        if($video->save()){

        return redirect()->route('admin.video')->with('success','Saved succesfully');;

        }
    }


    public function detail($id)
    {
        $post=Post::where('id',$id)->first();
        return view('backend.video.detail')->with(['post'=>$post]);
    }

    public function delete($id)
    {
        DB::table('posts')->where('id',$id)->delete();

        return redirect()->route('admin.video')->with('error','Deleted succesfully');;
    }

    public function edit($id){

        $post=Post::find($id);
        return view('backend.video.edit')->with(['post'=>$post]);

    }

  public function update(Request $request, $id){


        $video = Post::find($id);
          $video->user_id=Auth::guard('admin')->user()->id;
        $video->title=$request->title;
        $video->caption=$request->caption;
        $video->op_title=$request->op_title;
        $video->total_view=$request->total_view;
        $video->paragraph=$request->content;
        $video->cover_image=$request->cover_image;

        $video->public_site=$request->public_site;
        $video->save();


        return redirect()->route('admin.video')->with('info','Updated succesfully');;

    }
}
