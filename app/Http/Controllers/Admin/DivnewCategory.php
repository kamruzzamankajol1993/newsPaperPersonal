<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Dnews;
use App\Models\News;
use App\Models\Category;
use App\Models\PostCategory;
use App\Models\Subcategory;
use DB;
use App\Models\Post;
use App\Models\User;
use App\Models\Adver;
use Illuminate\Support\Facades\Auth;
use App\Models\Divisionnewscategory;
use Image;
class DivnewCategory extends Controller
{
    public function index(){


        $cats=PostCategory::all();
        if(Auth::guard('admin')->user()->id == 1){
    	$allPost=Post::whereIn('category_id',[55,56,57,58,59,60,61,62])->latest()->get();
        }else{
            $allPost=Post::whereIn('category_id',[55,56,57,58,59,60,61,62])->where('user_id',Auth::guard('admin')->user()->id)->latest()->get();

        }
        return view('backend.d_news_main.index',compact('cats','allPost'));
    }


    public function create()
    {


    $categories=PostCategory::whereIn('id',[55,56,57,58,59,60,61,62])->get();
    $cats=Post::latest()->get();
        $subcategories=Subcategory::all();

    return view('backend.d_news_main.create')->with(['cats'=>$cats,'categories'=>$categories,'subcategories'=>$subcategories]);
    }


    public function get_data_from_name(Request $request){

        $categories=Subcategory::where('cat_name',$request->cat_id)->get();

        $data = view('backend.d_news_main.get_data_from_name',compact('categories'))->render();
        return response()->json($data);

    }


    protected function imageUpload($request){
        if($request->hasfile('cover_image')){
         $productImage = $request->file('cover_image');
         $imageName = $productImage->getClientOriginalName();
         $directory = 'public/social/';
         $imageUrl = $directory.$imageName;

         $allPost=Adver::where('name','Social Banner')->where('user_id',Auth::guard('admin')->user()->id)
        ->latest()->value('image');

        $rrt = url($allPost);

        $watermark = Image::make($rrt);


        //Image::make($productImage)->resize(700,390)->insert($watermark, 'bottom-right', 10, 10)->save($imageUrl);

         $img=Image::make($productImage)->resize(700,390);
         $img->insert($watermark, 'bottom-right', 0);

         $img->save($imageUrl);

         return $imageUrl;
     }else{


              $imageUrl= $request->cover_image;
              return $imageUrl;

     }
     }
     
     protected function imageUpload1($request){

        if($request->hasfile('cover_image')){
        $productImage = $request->file('cover_image');
        $imageName = $productImage->getClientOriginalName();
        $directory = 'public/gallery-image/';
        $imageUrl1 = $directory.$imageName;


        $allPost=Adver::where('name','Social Banner')->where('user_id',Auth::guard('admin')->user()->id)
        ->latest()->value('image');

        $rrt = url($allPost);

        $watermark = Image::make('public/gallery-image/logo_182x51.jpg');


       //Image::make($productImage)->resize(700,390)->insert($watermark, 'bottom-right', 10, 10)->save($imageUrl);

        $img=Image::make($productImage)->resize(700,390);
        $img->insert($watermark, 'bottom-right', 10, 10);

        $img->save($imageUrl1);

        return $imageUrl1;


    }else{


             $imageUrl1= $request->cover_image;
             return $imageUrl1;

    }
    }


     protected function saveProductInfo($request, $imageUrl, $imageUrl1){


                 $data=array([
                     'subcategory_id'=>$request->subcategory_id,
                     'category_id'=>$request->category_id,
                     'title'=>$request->title,
                     'user_id'=>$request->user_id,
                     'op_title'=>$request->op_title,
                     'caption'=>$request->caption,
                     'user_id'=>Auth::guard('admin')->user()->id,
                     'paragraph'=>$request->content,
                     'total_view'=>$request->total_view,
                     'public_site'=>$request->public_site,
                     'status'=>$request->status,
                     'created_at'=>$request->created_at,
                     'cover_image'=>$imageUrl1,
                    'cover_image1'=>$imageUrl
                 ]);

                Post::insert($data);



                return redirect()->route('admin.division_news')->with('success','Saved succesfully');


     }

     public function store(Request $request)
     {


         $request->validate([
         'title'=>'required',
         'content'=>'required',

         ]);

        $imageUrl = $this->imageUpload($request);
        $imageUrl1 = $this->imageUpload1($request);
        $this->saveProductInfo($request, $imageUrl, $imageUrl1);



         return redirect()->route('admin.division_news')->with('success','Saved succesfully');



     }


     public function detail($id)
     {
         $post=Post::where('id',$id)->first();
         return view('backend.d_news_main.detail')->with(['post'=>$post]);
     }

     public function delete($id)
     {
         DB::table('posts')->where('id',$id)->delete();

         return redirect()->route('admin.division_news')->with('error','Deleted Successfully');;
     }

     public function edit($id){

        $categories=PostCategory::whereIn('id',[55,56,57,58,59,60,61,62])->get();

         $post=Post::find($id);
         return view('backend.d_news_main.edit')->with(['post'=>$post,'categories'=>$categories]);

     }

     public function productInfoUpdate($request, $imageUrl){

         $item=DB::table('posts')->where('id',$request->id)->update(['cover_image'=>$imageUrl,'title'=>$request->title,'paragraph'=>$request->paragraph,'total_view'=>$request->total_view,'op_title'=>$request->op_title,'status'=>$request->status,'caption'=>$request->caption,'public_site'=>$request->public_site,'category_id'=>$request->category_id,'subcategory_id'=>$request->subcategory_id]);
     }

     public function  update(Request $request){

         $productImage = $request->file('cover_image');

         if($request->hasFile('cover_image')){
             $post = Post::find($request->id);
             $oldImage=$post->cover_image;
             unlink($post->cover_image);

             $imageUrl = $this->imageUpload($request);
             $this->productInfoUpdate($request, $imageUrl);

            return redirect()->route('admin.division_news')->with('info','Updated Successfully');

         }else{
            $item=DB::table('posts')->where('id',$request->id)->update(['title'=>$request->title,'paragraph'=>$request->paragraph,'total_view'=>$request->total_view,'op_title'=>$request->op_title,'status'=>$request->status,'caption'=>$request->caption,'public_site'=>$request->public_site,'category_id'=>$request->category_id,'subcategory_id'=>$request->subcategory_id]);

             return redirect()->route('admin.division_news')->with('info','Updated Successfully');
         }
 }
}
