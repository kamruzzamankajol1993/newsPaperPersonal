<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\News;
use App\Models\PostCategory;
use App\Models\Post;
use App\Models\Unit;
use App\Models\Category;
use Image;
use DB;
use App\Models\Subcategory;
use App\Models\Adver;
use DateTime;
use DateTimezone;
use Illuminate\Support\Facades\Auth;
class NewsController extends Controller
{
    
    public function p_news($id){
        
        Post::where('id', $id)
       ->update([
           'public_site' => 1
        ]);
        
        return redirect()->back();
        
    }
    
     public function p_newse($id){
        
        Post::where('id', $id)
       ->update([
           'public_site' => 0
        ]);
        
        return redirect()->back();
        
    }
    
    
    public function trust_news_list(){
        $cats=PostCategory::all();
        if(Auth::guard('admin')->user()->id == 1){
    	$allPost=Post::where('public_site',13)->latest()->get();
        }else{
            $allPost=Post::where('public_site',13)->where('user_id',Auth::guard('admin')->user()->id)->latest()->get();
        }
        return view('backend.news.trust',compact('cats','allPost'));
        
    }
    
    public function index(){


        $cats=PostCategory::all();
        if(Auth::guard('admin')->user()->id == 1){
    	$allPost=Post::where('public_site',1)->latest()->get();
        }else{
            $allPost=Post::where('public_site',1)->where('user_id',Auth::guard('admin')->user()->id)->latest()->get();
        }
        return view('backend.news.index',compact('cats','allPost'));
    }
    
    public function draft_bangla(){
          $cats=PostCategory::all();
        if(Auth::guard('admin')->user()->id == 1){
    	$allPost=Post::where('public_site',10)->latest()->get();
        }else{
            $allPost=Post::where('public_site',10)->where('user_id',Auth::guard('admin')->user()->id)->latest()->get();
        }
        return view('backend.news.draft',compact('cats','allPost'));
        
    }
    
    
     public function draft_english(){
          $cats=PostCategory::all();
        if(Auth::guard('admin')->user()->id == 1){
    	$allPost=Post::where('public_site',11)->latest()->get();
        }else{
            $allPost=Post::where('public_site',11)->where('user_id',Auth::guard('admin')->user()->id)->latest()->get();
        }
        return view('backend.news.engdraft',compact('cats','allPost'));
        
    }
    
    public function indexe(){


        $cats=PostCategory::all();
        if(Auth::guard('admin')->user()->id == 1){
    	$allPost=Post::where('public_site',0)->latest()->get();
        }else{
            $allPost=Post::where('public_site',0)->where('user_id',Auth::guard('admin')->user()->id)->latest()->get();
        }
        return view('backend.news.index1',compact('cats','allPost'));
    }



    public function create()
    {

    $cats=Post::latest()->get();
    $categories=PostCategory::all();
    $subcategories=Subcategory::all();
    return view('backend.news.create')->with(['cats'=>$cats,'categories'=>$categories,'subcategories'=>$subcategories]);
    }
    
    public function createe()
    {

    $cats=Post::latest()->get();
    $categories=PostCategory::all();
    $subcategories=Subcategory::all();
    return view('backend.news.create1')->with(['cats'=>$cats,'categories'=>$categories,'subcategories'=>$subcategories]);
    }



    protected function imageUpload($request){

        if($request->hasfile('cover_image')){
        $productImage = $request->file('cover_image');
        $imageName = $productImage->getClientOriginalName();
        $directory = 'public/social/';
        $imageUrl = $directory.$imageName;


        $allPost=Adver::where('name','Social Banner')->latest()->value('image');

        $rrt = url($allPost);
        
         //dd($allPost);

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

 $bb_site_logo_water_mark = Unit::where('name','Watermark')->value('img');
        $allPost=Adver::where('name','Social Banner')->latest()->value('image');
        
       

        $rrt = url($allPost);

        $watermark = Image::make($bb_site_logo_water_mark);


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
 $dt = new DateTime();
  $dt->setTimezone(new DateTimezone('Asia/Dhaka'));
  
  
  //dd($request->content);
  
  
  $tt = $dt->format($request->created_at);

       // $number=count($request->category_id);
        
        if($request->dvalue == 'draft'){
            $public_site = 10;
            
        }elseif($request->dvalue == 'draft_english'){
            $public_site = 11;
            
        }else{
            
             $public_site = $request->public_site;
        }
        
        //new code
        
        $newNewsData = new Post();
        $newNewsData->category_id = $request->category_id;
        $newNewsData->title = $request->title;
        $newNewsData->op_title = $request->op_title;
        $newNewsData->caption = $request->caption;
        $newNewsData->paragraph = $request->content;
         $newNewsData->total_view = $request->total_view;
          $newNewsData->status = $request->status;
     $newNewsData->extra_publish_option = $request->extra_publish_option;
      $newNewsData->created_at = $request->created_at;
      $newNewsData->user_id = Auth::guard('admin')->user()->id;
     $newNewsData->public_site = $public_site;
      $newNewsData->cover_image = $imageUrl1;
      $newNewsData->cover_image1 = $imageUrl;
      
      $newNewsData->save();
      
      
      $newsId=$newNewsData->id;
      $baseUrl = 'https://www.facebook.com/sharer/sharer.php?u=';
     
      if($public_site == 1){
          
           $dd = $baseUrl.'https://bangla.dailybanglatimes.com/single/post/'.$newsId;
            //dd($dd);
          return redirect()->away($dd);
      }elseif($public_site == 0){
          $dd = $baseUrl.'https://dailybanglatimes.com/single/post/'.$newsId;
          return redirect()->away($dd);
      }
        //end new code 

        // if($number >0){
        //     for($i=0;$i<$number;$i++){
        //         $data=array([
        //             'category_id'=>$request->category_id[$i],
        //             'title'=>$request->title,
        //             'user_id'=>Auth::guard('admin')->user()->id,
        //             'op_title'=>$request->op_title,
        //             'caption'=>$request->caption,
        //             'paragraph'=>$request->content,
        //             'total_view'=>$request->total_view,
        //             'status'=>$request->status,
                    
        //             'public_site'=>$public_site,
                    
        //             'extra_publish_option'=>$request->extra_publish_option,
        //             'created_at'=>$request->created_at,
        //             'cover_image'=>$imageUrl1,
        //             'cover_image1'=>$imageUrl
        //         ]);

        //       Post::insert($data);
        //     }

        // }


// https://www.facebook.com/sharer/sharer.php?u={{urlencode(url()->current()) }}
        //   return redirect()->back()->with('success','Saved succesfully');


    }

    public function store(Request $request)
    {
        
        
        //dd(235);


        $request->validate([
        'title'=>'required',
        'content'=>'required',

        ]);

        $imageUrl = $this->imageUpload($request);
        $imageUrl1 = $this->imageUpload1($request);
        // $this->saveProductInfo($request, $imageUrl, $imageUrl1);
        
        
        $dt = new DateTime();
  $dt->setTimezone(new DateTimezone('Asia/Dhaka'));
  
  
  //dd($request->content);
  
  
  $tt = $dt->format($request->created_at);

       // $number=count($request->category_id);
        
        if($request->dvalue == 'draft'){
            $public_site = 10;
            
        }elseif($request->dvalue == 'draft_english'){
            $public_site = 11;
            
        }else{
            
             $public_site = $request->public_site;
        }
        
        //new code
        
        $newNewsData = new Post();
        $newNewsData->category_id = $request->category_id;
        $newNewsData->title = $request->title;
        $newNewsData->op_title = $request->op_title;
        $newNewsData->caption = $request->caption;
        $newNewsData->paragraph = $request->content;
         $newNewsData->total_view = $request->total_view;
          $newNewsData->status = $request->status;
     $newNewsData->extra_publish_option = $request->extra_publish_option;
      $newNewsData->created_at = $request->created_at;
      $newNewsData->user_id = Auth::guard('admin')->user()->id;
     $newNewsData->public_site = $public_site;
      $newNewsData->cover_image = $imageUrl1;
      $newNewsData->cover_image1 = $imageUrl;
      
      $newNewsData->save();
      
      
      $newsId=$newNewsData->id;
      $baseUrl = 'https://www.facebook.com/sharer/sharer.php?u=';
     
      if($public_site == 1){
          
           $dd = $baseUrl.'https://bangla.dailybanglatimes.com/single/post/'.$newsId;
            //dd($dd);
          return redirect()->away($dd);
      }elseif($public_site == 0){
          $dd = $baseUrl.'https://dailybanglatimes.com/single/post/'.$newsId;
          return redirect()->away($dd);
      }
        //end new code 




        // return redirect()->route('admin.news')->with('success','Created Successfully');;


    }
    
    public function storee(Request $request)
    {


        //dd(235);


        $request->validate([
        'title'=>'required',
        'content'=>'required',

        ]);

        $imageUrl = $this->imageUpload($request);
        $imageUrl1 = $this->imageUpload1($request);
        // $this->saveProductInfo($request, $imageUrl, $imageUrl1);
        
        
        $dt = new DateTime();
  $dt->setTimezone(new DateTimezone('Asia/Dhaka'));
  
  
  //dd($request->content);
  
  
  $tt = $dt->format($request->created_at);

       // $number=count($request->category_id);
        
        if($request->dvalue == 'draft'){
            $public_site = 10;
            
        }elseif($request->dvalue == 'draft_english'){
            $public_site = 11;
            
        }else{
            
             $public_site = $request->public_site;
        }
        
        //new code
        
        $newNewsData = new Post();
        $newNewsData->category_id = $request->category_id;
        $newNewsData->title = $request->title;
        $newNewsData->op_title = $request->op_title;
        $newNewsData->caption = $request->caption;
        $newNewsData->paragraph = $request->content;
         $newNewsData->total_view = $request->total_view;
          $newNewsData->status = $request->status;
     $newNewsData->extra_publish_option = $request->extra_publish_option;
      $newNewsData->created_at = $request->created_at;
      $newNewsData->user_id = Auth::guard('admin')->user()->id;
     $newNewsData->public_site = $public_site;
      $newNewsData->cover_image = $imageUrl1;
      $newNewsData->cover_image1 = $imageUrl;
      
      $newNewsData->save();
      
      
      $newsId=$newNewsData->id;
      $baseUrl = 'https://www.facebook.com/sharer/sharer.php?u=';
     
      if($public_site == 1){
          
           $dd = $baseUrl.'https://bangla.dailybanglatimes.com/single/post/'.$newsId;
            //dd($dd);
          return redirect()->away($dd);
      }elseif($public_site == 0){
          $dd = $baseUrl.'https://dailybanglatimes.com/single/post/'.$newsId;
          return redirect()->away($dd);
      }
        //end new code 




        // return redirect()->route('admin.news')->with('success','Created Successfully');;


    }


    public function detail($id)
    {
    	$post=Post::where('id',$id)->first();
    	return view('backend.news.detail')->with(['post'=>$post]);
    }
    
    
    public function deletep($id)
    {
        DB::table('posts')->where('id',$id)->delete();
       
       
    //   Post::where('id', $id)
    //   ->update([
    //       'public_site' => 13
    //     ]);

        return redirect()->route('admin.news')->with('error','Deleted Successfully');;
    }

    public function delete($id)
    {
       // DB::table('posts')->where('id',$id)->delete();
       
       
       Post::where('id', $id)
       ->update([
           'public_site' => 13
        ]);

        return redirect()->route('admin.news')->with('error','Moved to Trust Successfully');
    }

    public function edit($id){
        $categories=PostCategory::all();
        $post=Post::find($id);
        return view('backend.news.edit')->with(['post'=>$post,'categories'=>$categories]);

    }
    
     public function edite($id){
        $categories=PostCategory::all();
        $post=Post::find($id);
        return view('backend.news.edit1')->with(['post'=>$post,'categories'=>$categories]);

    }

    public function productInfoUpdate($request, $imageUrl){

        $item=DB::table('posts')->where('id',$request->id)->update([ 'extra_publish_option'=>$request->extra_publish_option,'cover_image'=>$imageUrl,'title'=>$request->title,'paragraph'=>$request->paragraph,'total_view'=>$request->total_view,'op_title'=>$request->op_title,'status'=>$request->status,'caption'=>$request->caption,'public_site'=>$request->public_site,'category_id'=>$request->category_id]);
    }

    public function  update(Request $request){

        $productImage = $request->file('cover_image');

        if($request->hasFile('cover_image')){
            $post = Post::find($request->id);
            $oldImage=$post->cover_image;
            unlink($post->cover_image);

            $imageUrl = $this->imageUpload($request);
            $this->productInfoUpdate($request, $imageUrl);

           return redirect()->route('admin.news')->with('info','Updated Successfully');

        }else{
           $item=DB::table('posts')->where('id',$request->id)->update(['extra_publish_option'=>$request->extra_publish_option,'title'=>$request->title,'paragraph'=>$request->paragraph,'total_view'=>$request->total_view,'op_title'=>$request->op_title,'status'=>$request->status,'caption'=>$request->caption,'public_site'=>$request->public_site,'category_id'=>$request->category_id]);

            return redirect()->route('admin.news')->with('info','Updated Successfully');
        }
}
}
