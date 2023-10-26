<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Subcategory;
use DB;
use App\Models\Adver;
use App\Models\User;
use App\Models\PostCategory;
use App\Models\Post;
use App\Models\Video;
use Illuminate\Support\Facades\Session;
class PostDetailController extends Controller
{
    public function post($id){

        if(session()->get('locale') == 'sp'){

            $categories=DB::table('post_categories')->where('status',1)->orderBy('image','asc')->limit(11)->get();
             $latestPosts=DB::table('post_categories')->where('status',1)->orderBy('image','asc')->skip(12)->take(8)->get();
             $latestPosts1=DB::table('post_categories')->where('status',1)->orderBy('image','asc')->skip(11)->take(1)->get();

            $catad=Adver::where('name','category_Section')->orderBy('id','desc')->limit(1)->get();



            $covs=DB::table('post_categories')->where('status',1)->orderBy('id','asc')->skip(5)->take(3)->get();

             $latestPosts=DB::table('post_categories')->where('status',1)->skip(8)->take(9)->get();
             $latestPosts1=DB::table('post_categories')->where('status',1)->skip(17)->take(1)->get();
             $topFours=DB::table('post_categories')->where('status',1)->skip(18)->take(16)->get();

             $subcats=SubCategory::where('cat_name',21)->get();

              $mcats=DB::table('post_categories')->where('status',1)->skip(5)->limit(12)->get();

            $latestheadline9s = Post::where('public_site',0)->latest()->skip(3)->take(6)->get();
         $postCatname=PostCategory::where('id',$id)->value('name');
         $postCatid=PostCategory::where('id',$id)->value('id');
         //$postsubCatname=SubCategory::where('sub_name',$subid)->value('sub_name');
         $newses=DB::table('posts')->where('public_site',0)->where('category_id',$id)->orderBy('id','desc')->paginate(12);
     $latestheadlines = Post::where('public_site',0)->latest()->take(3)->get();
     $latestheadline2s = Post::where('public_site',0)->latest()->skip(3)->take(4)->get();
             $footers = Post::where('public_site',0)->latest()->limit(5)->get();

             $f1= PostCategory::where('status',1)->limit(4)->get();
     $f2= PostCategory::where('status',1)->skip(4)->limit(4)->get();
     $f3= PostCategory::where('status',1)->skip(8)->limit(4)->get();


        }else{
        $categories=DB::table('post_categories')->where('status',1)->orderBy('image','asc')->limit(12)->get();
             $latestPosts=DB::table('post_categories')->where('status',1)->orderBy('image','asc')->skip(12)->take(8)->get();
             $latestPosts1=DB::table('post_categories')->where('status',1)->orderBy('image','asc')->skip(11)->take(1)->get();

            $catad=Adver::where('name','category_Section')->orderBy('id','desc')->limit(1)->get();



            $covs=DB::table('post_categories')->where('status',1)->orderBy('id','asc')->skip(5)->take(3)->get();

             $latestPosts=DB::table('post_categories')->where('status',1)->skip(8)->take(9)->get();
             $latestPosts1=DB::table('post_categories')->where('status',1)->skip(17)->take(1)->get();
             $topFours=DB::table('post_categories')->where('status',1)->skip(18)->take(16)->get();

             $subcats=SubCategory::where('cat_name',21)->get();

              $mcats=DB::table('post_categories')->where('status',1)->skip(5)->limit(12)->get();

            $latestheadline9s = Post::where('public_site',1)->latest()->skip(3)->take(6)->get();
         $postCatname=PostCategory::where('id',$id)->value('name');
         $postCatid=PostCategory::where('id',$id)->value('id');
         //$postsubCatname=SubCategory::where('sub_name',$subid)->value('sub_name');
         $newses=DB::table('posts')->where('public_site',1)->where('category_id',$id)->orderBy('id','desc')->paginate(12);
     $latestheadlines = Post::where('public_site',1)->latest()->take(3)->get();
     $latestheadline2s = Post::where('public_site',1)->latest()->skip(3)->take(4)->get();
             $footers = Post::where('public_site',1)->latest()->limit(5)->get();

             $f1= PostCategory::where('status',1)->limit(4)->get();
     $f2= PostCategory::where('status',1)->skip(4)->limit(4)->get();
     $f3= PostCategory::where('status',1)->skip(8)->limit(4)->get();
        }
         return view('front.postCategory.postCategory')->with([
           'f1'=>$f1,
             'f2'=>$f2,
             'f3'=>$f3,
             'catad'=>$catad,
             'mcats'=>$mcats,
             'covs'=>$covs,
             'latestPosts1'=>$latestPosts1,
             'latestheadline9s'=>$latestheadline9s,

          'latestPosts'=>$latestPosts,
          'topFours'=>$topFours,
          'categories'=>$categories,
          'subcats'=>$subcats,
          'postCatname'=>$postCatname,
          'postCatid'=>$postCatid,
          'newses'=>$newses,
          'latestheadlines'=>$latestheadlines,
          'latestheadline2s'=>$latestheadline2s,
           'footers'=>$footers,
         ]);
         }

         public function subpost($id){

            if(session()->get('locale') == 'sp'){

                $f1= PostCategory::where('status',1)->limit(4)->get();
     $f2= PostCategory::where('status',1)->skip(4)->limit(4)->get();
     $f3= PostCategory::where('status',1)->skip(8)->limit(4)->get();
             $categoryad=Gallery1::where('name','category_Section')->orderBy('id','desc')->limit(1)->get();
             $headerad=Gallery1::where('name','Header_Section')->orderBy('id','desc')->limit(1)->get();
           $categories=DB::table('post_categories')->where('status',1)->orderBy('image','asc')->limit(11)->get();
             $latestPosts=DB::table('post_categories')->where('status',1)->orderBy('image','asc')->skip(12)->take(8)->get();
             $latestPosts1=DB::table('post_categories')->where('status',1)->orderBy('image','asc')->skip(11)->take(1)->get();

            $covs=DB::table('post_categories')->where('status',1)->orderBy('id','asc')->skip(5)->take(3)->get();


             $topFours=DB::table('post_categories')->where('status',1)->skip(18)->take(16)->get();

             $subcats=SubCategory::where('cat_name',21)->get();

              $mcats=DB::table('post_categories')->where('status',1)->skip(5)->limit(12)->get();

            $latestheadline9s = Post::where('public_site',0)->latest()->skip(3)->take(6)->get();
         $postCatname=SubCategory::where('id',$id)->value('sub_name');
         $postCatid=SubCategory::where('id',$id)->value('id');
         //$postsubCatname=SubCategory::where('sub_name',$subid)->value('sub_name');
         $newses=DB::table('posts')->where('public_site',0)->where('subcategory_id',$id)->orderBy('id','desc')->paginate(6);
     $latestheadlines = Post::where('public_site',0)->latest()->take(3)->get();
     $latestheadline2s = Post::where('public_site',0)->latest()->skip(3)->take(4)->get();
             $footers = Post::where('public_site',0)->latest()->limit(5)->get();
            }else{
           $f1= PostCategory::where('status',1)->limit(4)->get();
     $f2= PostCategory::where('status',1)->skip(4)->limit(4)->get();
     $f3= PostCategory::where('status',1)->skip(8)->limit(4)->get();
             $categoryad=Gallery1::where('name','category_Section')->orderBy('id','desc')->limit(1)->get();
             $headerad=Gallery1::where('name','Header_Section')->orderBy('id','desc')->limit(1)->get();
           $categories=DB::table('post_categories')->where('status',1)->orderBy('image','asc')->limit(12)->get();
             $latestPosts=DB::table('post_categories')->where('status',1)->orderBy('image','asc')->skip(12)->take(8)->get();
             $latestPosts1=DB::table('post_categories')->where('status',1)->orderBy('image','asc')->skip(11)->take(1)->get();

            $covs=DB::table('post_categories')->where('status',1)->orderBy('id','asc')->skip(5)->take(3)->get();


             $topFours=DB::table('post_categories')->where('status',1)->skip(18)->take(16)->get();

             $subcats=SubCategory::where('cat_name',21)->get();

              $mcats=DB::table('post_categories')->where('status',1)->skip(5)->limit(12)->get();

            $latestheadline9s = Post::where('public_site',1)->latest()->skip(3)->take(6)->get();
         $postCatname=SubCategory::where('id',$id)->value('sub_name');
         $postCatid=SubCategory::where('id',$id)->value('id');
         //$postsubCatname=SubCategory::where('sub_name',$subid)->value('sub_name');
         $newses=DB::table('posts')->where('public_site',1)->where('subcategory_id',$id)->orderBy('id','desc')->paginate(6);
     $latestheadlines = Post::where('public_site',1)->latest()->take(3)->get();
     $latestheadline2s = Post::where('public_site',1)->latest()->skip(3)->take(4)->get();
             $footers = Post::where('public_site',1)->latest()->limit(5)->get();
            }
         return view('front.postCategory.subpostCategory')->with([
           'f1'=>$f1,
             'f2'=>$f2,
             'f3'=>$f3,
             'categoryad'=>$categoryad,
             'mcats'=>$mcats,
             'covs'=>$covs,
             'latestPosts1'=>$latestPosts1,
             'latestheadline9s'=>$latestheadline9s,
          'latestPosts'=>$latestPosts,
          'topFours'=>$topFours,
          'categories'=>$categories,
          'subcats'=>$subcats,
          'postCatname'=>$postCatname,
          'newses'=>$newses,
          'latestheadlines'=>$latestheadlines,
          'latestheadline2s'=>$latestheadline2s,
           'footers'=>$footers,
           'postCatid'=>$postCatid,
           'headerad'=>$headerad,
         ]);
         }

         public function postSingle($id){

          //dd(22);
           $f1= PostCategory::where('status',1)->limit(4)->get();
     $f2= PostCategory::where('status',1)->skip(4)->limit(4)->get();
     $f3= PostCategory::where('status',1)->skip(8)->limit(4)->get();

           $users=User::all();

             $totalView=DB::table('posts')->where('public_site',1)->where('id',$id)->value('total_share');
             $update=$totalView+1;
             Db::table('posts')->where('public_site',1)->where('id',$id)->update(['total_share'=>$update]);
            $categories=DB::table('post_categories')->where('status',1)->orderBy('image','asc')->limit(12)->get();
             $latestPosts=DB::table('post_categories')->where('status',1)->orderBy('image','asc')->skip(12)->take(8)->get();
             $latestPosts1=DB::table('post_categories')->where('status',1)->orderBy('image','asc')->skip(11)->take(1)->get();

            $covs=DB::table('post_categories')->where('status',1)->orderBy('id','asc')->skip(5)->take(3)->get();


             $topFours=DB::table('post_categories')->where('status',1)->skip(18)->take(16)->get();

             $subcats=SubCategory::where('cat_name',21)->get();

              $mcats=DB::table('post_categories')->where('status',1)->skip(5)->limit(12)->get();

            $latestheadline9s = Post::where('public_site',1)->latest()->skip(3)->take(6)->get();
             $subcat1s=PostCategory::all();

             $news=DB::table('posts')->where('public_site',1)->Where('id','=',$id)->first();


             $r=DB::table('posts')->where('public_site',1)->Where('id','=',$id)->value('category_id');

           $latestheadlines = Post::where('public_site',1)->latest()->take(5)->get();

            $randomposts = Post::where('public_site',1)->where('category_id',$r)->take(4)->inRandomOrder()->get();
        $famousposts = Post::where('public_site',1)->where('status',1)->take(5)->orderBy('total_share','desc')->get();
         $latestheadline2s = Post::where('public_site',1)->latest()->skip(3)->take(4)->get();
             $footers = Post::where('public_site',1)->latest()->limit(5)->get();

             // get the current user
         $user = DB::table('posts')->where('id',$id)->first();


         // get previous user id
         $previous = Post::where('public_site',1)->where('id', '<', $user->id)->max('id');
         $pnews=DB::table('posts')->where('public_site',1)->Where('id','=',$previous)->first();

         // get next user id
         $next = Post::where('public_site',1)->where('id', '>', $user->id)->min('id');
         $nnews=DB::table('posts')->where('public_site',1)->Where('id','=',$next)->first();


         $latestId= Post::where('public_site',1)->orderBy('id','desc')->limit(1)->value('id');
         $firstId=Post::where('public_site',1)->orderBy('id','asc')->limit(1)->value('id');
         
          $catad=Adver::where('name','singlecategory_Section')->orderBy('id','desc')->value('image');
            

             return view('front.postCategory.singlePost')->with([
                 'catad'=>$catad,
             'f1'=>$f1,
             'f2'=>$f2,
             'f3'=>$f3,
                'users'=>$users,
                'mcats'=>$mcats,
             'covs'=>$covs,
             'latestPosts1'=>$latestPosts1,
             'latestheadline9s'=>$latestheadline9s,
          'latestPosts'=>$latestPosts,
          'topFours'=>$topFours,
          'categories'=>$categories,
          'subcats'=>$subcats,
          'news'=>$news,
          'latestheadlines'=>$latestheadlines,
          'randomposts'=>$randomposts,
          'famousposts'=>$famousposts,
          'latestheadline2s'=>$latestheadline2s,
           'footers'=>$footers,
           'subcat1s'=>$subcat1s,
           'next'=>$next,
           'previous'=>$previous,
           'nnews'=>$nnews,
           'pnews'=>$pnews,
           'latestId'=>$latestId,
           'firstId'=>$firstId,

         ]);
         }

         public function subpostSingle($id){

            if(session()->get('locale') == 'sp'){

                $f1= PostCategory::where('status',1)->limit(4)->get();
     $f2= PostCategory::where('status',1)->skip(4)->limit(4)->get();
     $f3= PostCategory::where('status',1)->skip(8)->limit(4)->get();
              $singlecategoryad=Gallery1::where('name','singlecategory_Section')->orderBy('id','desc')->limit(1)->get();
             $headerad=Gallery1::where('name','Header_Section')->orderBy('id','desc')->limit(1)->get();
             $totalView=DB::table('posts')->where('public_site',0)->where('id',$id)->value('total_share');
             $update=$totalView+1;
             Db::table('posts')->where('public_site',0)->where('id',$id)->update(['total_share'=>$update]);

           $categories=DB::table('post_categories')->where('status',1)->orderBy('image','asc')->limit(12)->get();
             $latestPosts=DB::table('post_categories')->where('status',1)->orderBy('image','asc')->skip(12)->take(8)->get();
             $latestPosts1=DB::table('post_categories')->where('status',1)->orderBy('image','asc')->skip(11)->take(1)->get();

            $covs=DB::table('post_categories')->where('status',1)->orderBy('id','asc')->skip(5)->take(3)->get();


             $topFours=DB::table('post_categories')->where('status',1)->skip(18)->take(16)->get();

             $subcats=SubCategory::where('cat_name',21)->get();

              $mcats=DB::table('post_categories')->where('status',1)->skip(5)->limit(12)->get();

            $latestheadline9s = Post::where('public_site',0)->latest()->skip(3)->take(6)->get();

             $news=DB::table('posts')->where('public_site',0)->Where('id','=',$id)->first();
           $latestheadlines = Post::where('public_site',0)->latest()->take(10)->get();
           $r=DB::table('posts')->where('public_site',0)->Where('id','=',$id)->value('subcategory_id');
          $randomposts = Post::where('public_site',0)->where('subcategory_id',$r)->take(4)->inRandomOrder()->get();
          $famousposts = Post::where('public_site',0)->where('status',1)->take(10)->orderBy('total_share','desc')->get();
          $latestheadline2s = Post::where('public_site',0)->latest()->skip(3)->take(4)->get();
             $footers = Post::where('public_site',0)->latest()->limit(5)->get();
             // get the current user
         $user = Post::find($id);

         // get previous user id
         $previous = Post::where('public_site',0)->where('id', '<', $user->id)->max('id');
         $pnews=DB::table('posts')->where('public_site',0)->Where('id','=',$previous)->first();

         // get next user id
         $next = Post::where('public_site',0)->where('id', '>', $user->id)->min('id');
         $nnews=DB::table('posts')->where('public_site',0)->Where('id','=',$next)->first();

         $latestId= Post::where('public_site',0)->orderBy('id','desc')->limit(1)->value('id');
         $firstId=Post::where('public_site',0)->orderBy('id','asc')->limit(1)->value('id');

            }else{

           $f1= PostCategory::where('status',1)->limit(4)->get();
     $f2= PostCategory::where('status',1)->skip(4)->limit(4)->get();
     $f3= PostCategory::where('status',1)->skip(8)->limit(4)->get();
              $singlecategoryad=Gallery1::where('name','singlecategory_Section')->orderBy('id','desc')->limit(1)->get();
             $headerad=Gallery1::where('name','Header_Section')->orderBy('id','desc')->limit(1)->get();
             $totalView=DB::table('posts')->where('public_site',1)->where('id',$id)->value('total_share');
             $update=$totalView+1;
             Db::table('posts')->where('public_site',1)->where('id',$id)->update(['total_share'=>$update]);

           $categories=DB::table('post_categories')->where('status',1)->orderBy('image','asc')->limit(12)->get();
             $latestPosts=DB::table('post_categories')->where('status',1)->orderBy('image','asc')->skip(12)->take(8)->get();
             $latestPosts1=DB::table('post_categories')->where('status',1)->orderBy('image','asc')->skip(11)->take(1)->get();

            $covs=DB::table('post_categories')->where('status',1)->orderBy('id','asc')->skip(5)->take(3)->get();


             $topFours=DB::table('post_categories')->where('status',1)->skip(18)->take(16)->get();

             $subcats=SubCategory::where('cat_name',21)->get();

              $mcats=DB::table('post_categories')->where('status',1)->skip(5)->limit(12)->get();

            $latestheadline9s = Post::where('public_site',1)->latest()->skip(3)->take(6)->get();

             $news=DB::table('posts')->where('public_site',1)->Where('id','=',$id)->first();
           $latestheadlines = Post::where('public_site',1)->latest()->take(10)->get();
           $r=DB::table('posts')->where('public_site',1)->Where('id','=',$id)->value('subcategory_id');
          $randomposts = Post::where('public_site',1)->where('subcategory_id',$r)->take(4)->inRandomOrder()->get();
          $famousposts = Post::where('public_site',1)->where('status',1)->take(10)->orderBy('total_share','desc')->get();
          $latestheadline2s = Post::where('public_site',1)->latest()->skip(3)->take(4)->get();
             $footers = Post::where('public_site',1)->latest()->limit(5)->get();
             // get the current user
         $user = Post::find($id);

         // get previous user id
         $previous = Post::where('public_site',1)->where('id', '<', $user->id)->max('id');
         $pnews=DB::table('posts')->where('public_site',1)->Where('id','=',$previous)->first();

         // get next user id
         $next = Post::where('public_site',1)->where('id', '>', $user->id)->min('id');
         $nnews=DB::table('posts')->where('public_site',1)->Where('id','=',$next)->first();

         $latestId= Post::where('public_site',1)->orderBy('id','desc')->limit(1)->value('id');
         $firstId=Post::where('public_site',1)->orderBy('id','asc')->limit(1)->value('id');
            }
 $catad=Adver::where('name','singlecategory_Section')->orderBy('id','desc')->value('image');
             return view('front.postCategory.subsinglePost')->with([
                 'catad'=>$catad,
               'f1'=>$f1,
             'f2'=>$f2,
             'f3'=>$f3,
                 'singlecategoryad'=>$singlecategoryad,
                'mcats'=>$mcats,
             'covs'=>$covs,
             'latestPosts1'=>$latestPosts1,
             'latestheadline9s'=>$latestheadline9s,
          'latestPosts'=>$latestPosts,
          'topFours'=>$topFours,
          'categories'=>$categories,
          'subcats'=>$subcats,
          'news'=>$news,
          'latestheadlines'=>$latestheadlines,
          'randomposts'=>$randomposts,
          'famousposts'=>$famousposts,
          'latestheadline2s'=>$latestheadline2s,
           'footers'=>$footers,
           'next'=>$next,
           'previous'=>$previous,
           'nnews'=>$nnews,
           'pnews'=>$pnews,
           'latestId'=>$latestId,
           'firstId'=>$firstId,
           'headerad'=>$headerad,

         ]);
         }

          public function search(Request $request)
         {

            if(session()->get('locale') == 'sp'){

                $f1= PostCategory::where('status',1)->limit(4)->get();
                $f2= PostCategory::where('status',1)->skip(4)->limit(4)->get();
                $f3= PostCategory::where('status',1)->skip(8)->limit(4)->get();
                         $categories=DB::table('post_categories')->where('status',1)->orderBy('image','asc')->limit(12)->get();
                        $latestPosts=DB::table('post_categories')->where('status',1)->orderBy('image','asc')->skip(12)->take(8)->get();
                        $latestPosts1=DB::table('post_categories')->where('status',1)->orderBy('image','asc')->skip(11)->take(1)->get();
                       $subcats=Subcategory::where('cat_name',21)->get();
                        $latestheadline9s = Post::where('public_site',0)->latest()->skip(3)->take(6)->get();
                        $latestheadline2s = Post::where('public_site',0)->latest()->skip(3)->take(4)->get();
                        $footers = Post::where('public_site',0)->latest()->limit(5)->get();
                       $latestheadlines = Post::where('public_site',0)->latest()->take(3)->get();

                $search_txt = $request->input('query');
                        $newses = Post::where('public_site',0)->where('status',1)
                                           ->where('title', 'like', '%'.$search_txt.'%')
                                ->orWhere('paragraph', 'like', '%'.$search_txt.'%')
                                ->orWhere('category_id', 'like', '%'.$search_txt.'%')
                                ->get();

            }else{

           $f1= PostCategory::where('status',1)->limit(4)->get();
     $f2= PostCategory::where('status',1)->skip(4)->limit(4)->get();
     $f3= PostCategory::where('status',1)->skip(8)->limit(4)->get();
              $categories=DB::table('post_categories')->where('status',1)->orderBy('image','asc')->limit(11)->get();
             $latestPosts=DB::table('post_categories')->where('status',1)->orderBy('image','asc')->skip(12)->take(8)->get();
             $latestPosts1=DB::table('post_categories')->where('status',1)->orderBy('image','asc')->skip(11)->take(1)->get();
            $subcats=Subcategory::where('cat_name',21)->get();
             $latestheadline9s = Post::where('public_site',1)->latest()->skip(3)->take(6)->get();
             $latestheadline2s = Post::where('public_site',1)->latest()->skip(3)->take(4)->get();
             $footers = Post::where('public_site',1)->latest()->limit(5)->get();
            $latestheadlines = Post::where('public_site',1)->latest()->take(3)->get();

     $search_txt = $request->input('query');
             $newses = Post::where('public_site',1)->where('status',1)
                                ->where('title', 'like', '%'.$search_txt.'%')
                     ->orWhere('paragraph', 'like', '%'.$search_txt.'%')
                     ->orWhere('category_id', 'like', '%'.$search_txt.'%')
                     ->get();
            }
             $catad=Adver::where('name','singlecategory_Section')->orderBy('id','desc')->value('image');

         return view('front.search.search')->with([
             'catad'=>$catad,
           'f1'=>$f1,
             'f2'=>$f2,
             'f3'=>$f3,
            'latestPosts1'=>$latestPosts1,
             'latestheadline9s'=>$latestheadline9s,
          'latestPosts'=>$latestPosts,

          'categories'=>$categories,
          'subcats'=>$subcats,
          //'postCatname'=>$postCatname,
          'newses'=>$newses,
          'latestheadlines'=>$latestheadlines,
          'search_txt'=>$search_txt,
          'latestheadline2s'=>$latestheadline2s,
           'footers'=>$footers,
         ]);
         }


          public function today($id){

            if(session()->get('locale') == 'sp'){

                $f1= PostCategory::where('status',1)->limit(4)->get();
                $f2= PostCategory::where('status',1)->skip(4)->limit(4)->get();
                $f3= PostCategory::where('status',1)->skip(8)->limit(4)->get();
                          $singlecategoryad=Gallery1::where('name','singlecategory_Section')->orderBy('id','desc')->limit(1)->get();
                        $headerad=Gallery1::where('name','Header_Section')->orderBy('id','desc')->limit(1)->get();

                      $categories=DB::table('post_categories')->where('status',1)->orderBy('image','asc')->limit(11)->get();
                        $latestPosts=DB::table('post_categories')->where('status',1)->orderBy('image','asc')->skip(12)->take(8)->get();
                        $latestPosts1=DB::table('post_categories')->where('status',1)->orderBy('image','asc')->skip(11)->take(1)->get();

                       $covs=DB::table('post_categories')->where('status',1)->orderBy('id','asc')->skip(5)->take(3)->get();


                        $topFours=DB::table('post_categories')->where('status',1)->skip(18)->take(16)->get();

                        $subcats=SubCategory::where('cat_name',21)->get();

                         $mcats=DB::table('post_categories')->where('status',1)->skip(5)->limit(12)->get();

                       $latestheadline9s = Post::where('public_site',0)->latest()->skip(3)->take(6)->get();
                        $subcat1s=PostCategory::all();

                        $news=DB::table('videos')->find($id);
                        $r=Video::Where('id','=',$id)->value('cat_id');

                      $latestheadlines = Post::where('public_site',0)->latest()->take(10)->get();

                       $randomposts = Post::where('public_site',0)->where('category_id',$r)->take(4)->inRandomOrder()->get();
                   $famousposts = Post::where('public_site',0)->where('status',1)->take(10)->orderBy('total_share','desc')->get();
                    $latestheadline2s = Post::where('public_site',0)->latest()->skip(3)->take(4)->get();
                        $footers = Post::where('public_site',0)->latest()->limit(5)->get();

                        // get the current user
                    $user = Video::find($id);

                    // get previous user id
                    $previous = Video::where('id', '<', $user->id)->max('id');
                    $pnews=DB::table('videos')->Where('id','=',$previous)->first();

                    // get next user id
                    $next = Video::where('id', '>', $user->id)->min('id');
                    $nnews=DB::table('Videos')->Where('id','=',$next)->first();


                    $latestId= Video::orderBy('id','desc')->limit(1)->value('id');
                    $firstId=Video::orderBy('id','asc')->limit(1)->value('id');

            }else{

           $f1= PostCategory::where('status',1)->limit(4)->get();
     $f2= PostCategory::where('status',1)->skip(4)->limit(4)->get();
     $f3= PostCategory::where('status',1)->skip(8)->limit(4)->get();
               $singlecategoryad=Gallery1::where('name','singlecategory_Section')->orderBy('id','desc')->limit(1)->get();
             $headerad=Gallery1::where('name','Header_Section')->orderBy('id','desc')->limit(1)->get();

           $categories=DB::table('post_categories')->where('status',1)->orderBy('image','asc')->limit(11)->get();
             $latestPosts=DB::table('post_categories')->where('status',1)->orderBy('image','asc')->skip(12)->take(8)->get();
             $latestPosts1=DB::table('post_categories')->where('status',1)->orderBy('image','asc')->skip(11)->take(1)->get();

            $covs=DB::table('post_categories')->where('status',1)->orderBy('id','asc')->skip(5)->take(3)->get();


             $topFours=DB::table('post_categories')->where('status',1)->skip(18)->take(16)->get();

             $subcats=SubCategory::where('cat_name',21)->get();

              $mcats=DB::table('post_categories')->where('status',1)->skip(5)->limit(12)->get();

            $latestheadline9s = Post::where('public_site',1)->latest()->skip(3)->take(6)->get();
             $subcat1s=PostCategory::all();

             $news=DB::table('videos')->find($id);
             $r=Video::Where('id','=',$id)->value('cat_id');

           $latestheadlines = Post::where('public_site',1)->latest()->take(10)->get();

            $randomposts = Post::where('public_site',1)->where('category_id',$r)->take(4)->inRandomOrder()->get();
        $famousposts = Post::where('public_site',1)->where('status',1)->take(10)->orderBy('total_share','desc')->get();
         $latestheadline2s = Post::where('public_site',1)->latest()->skip(3)->take(4)->get();
             $footers = Post::where('public_site',1)->latest()->limit(5)->get();

             // get the current user
         $user = Video::find($id);

         // get previous user id
         $previous = Video::where('id', '<', $user->id)->max('id');
         $pnews=DB::table('videos')->Where('id','=',$previous)->first();

         // get next user id
         $next = Video::where('id', '>', $user->id)->min('id');
         $nnews=DB::table('Videos')->Where('id','=',$next)->first();


         $latestId= Video::orderBy('id','desc')->limit(1)->value('id');
         $firstId=Video::orderBy('id','asc')->limit(1)->value('id');
            }

             return view('front.postCategory.today')->with([
             'f1'=>$f1,
             'f2'=>$f2,
             'f3'=>$f3,
                 'singlecategoryad'=>$singlecategoryad,
                 'headerad'=>$headerad,
                'mcats'=>$mcats,
             'covs'=>$covs,
             'latestPosts1'=>$latestPosts1,
             'latestheadline9s'=>$latestheadline9s,
          'latestPosts'=>$latestPosts,
          'topFours'=>$topFours,
          'categories'=>$categories,
          'subcats'=>$subcats,
          'news'=>$news,
          'latestheadlines'=>$latestheadlines,
          'randomposts'=>$randomposts,
          'famousposts'=>$famousposts,
          'latestheadline2s'=>$latestheadline2s,
           'footers'=>$footers,
           'subcat1s'=>$subcat1s,
           'next'=>$next,
           'previous'=>$previous,
           'nnews'=>$nnews,
           'pnews'=>$pnews,
           'latestId'=>$latestId,
           'firstId'=>$firstId,

         ]);
         }

          public function first(){

            if(session()->get('locale') == 'sp'){

                $f1= PostCategory::where('status',1)->limit(4)->get();
                $f2= PostCategory::where('status',1)->skip(4)->limit(4)->get();
                $f3= PostCategory::where('status',1)->skip(8)->limit(4)->get();
                       $categories=DB::table('post_categories')->where('status',1)->limit(2)->get();

                       $covs=DB::table('post_categories')->where('status',1)->orderBy('id','asc')->skip(5)->take(3)->get();

                        $latestPosts=DB::table('post_categories')->where('status',1)->skip(8)->take(9)->get();
                        $latestPosts1=DB::table('post_categories')->where('status',1)->skip(17)->take(1)->get();
                        $topFours=DB::table('post_categories')->where('status',1)->skip(18)->take(10)->get();

                        $subcats=SubCategory::where('cat_name',21)->get();

                         $mcats=DB::table('post_categories')->where('status',1)->skip(5)->limit(12)->get();

                       $latestheadline9s = Post::where('public_site',0)->latest()->skip(3)->take(6)->get();
                        //$subcats=SubCategory::all();
                    //$postCatname=PostCategory::where('id',$id)->value('name');
                    //$postCatid=PostCategory::where('id',$id)->value('id');
                    //$postsubCatname=SubCategory::where('sub_name',$subid)->value('sub_name');
                    $newses=DB::table('posts')->where('public_site',0)->inRandomOrder()->limit(50)->paginate(6);
                $latestheadlines = Post::where('public_site',0)->latest()->take(3)->get();
                $latestheadline2s = Post::where('public_site',0)->latest()->skip(3)->take(4)->get();
                        $footers = Post::where('public_site',0)->latest()->limit(5)->get();

            }else{
           $f1= PostCategory::where('status',1)->limit(4)->get();
     $f2= PostCategory::where('status',1)->skip(4)->limit(4)->get();
     $f3= PostCategory::where('status',1)->skip(8)->limit(4)->get();
            $categories=DB::table('post_categories')->where('status',1)->limit(2)->get();

            $covs=DB::table('post_categories')->where('status',1)->orderBy('id','asc')->skip(5)->take(3)->get();

             $latestPosts=DB::table('post_categories')->where('status',1)->skip(8)->take(9)->get();
             $latestPosts1=DB::table('post_categories')->where('status',1)->skip(17)->take(1)->get();
             $topFours=DB::table('post_categories')->where('status',1)->skip(18)->take(10)->get();

             $subcats=SubCategory::where('cat_name',21)->get();

              $mcats=DB::table('post_categories')->where('status',1)->skip(5)->limit(12)->get();

            $latestheadline9s = Post::where('public_site',1)->latest()->skip(3)->take(6)->get();
             //$subcats=SubCategory::all();
         //$postCatname=PostCategory::where('id',$id)->value('name');
         //$postCatid=PostCategory::where('id',$id)->value('id');
         //$postsubCatname=SubCategory::where('sub_name',$subid)->value('sub_name');
         $newses=DB::table('posts')->where('public_site',1)->inRandomOrder()->limit(50)->paginate(6);
     $latestheadlines = Post::where('public_site',1)->latest()->take(3)->get();
     $latestheadline2s = Post::where('public_site',1)->latest()->skip(3)->take(4)->get();
             $footers = Post::where('public_site',1)->latest()->limit(5)->get();
            }
         return view('front.postCategory.first')->with([
           'f1'=>$f1,
             'f2'=>$f2,
             'f3'=>$f3,

           'mcats'=>$mcats,
             'covs'=>$covs,
             'latestPosts1'=>$latestPosts1,
             'latestheadline9s'=>$latestheadline9s,

          'latestPosts'=>$latestPosts,
          'topFours'=>$topFours,
          'categories'=>$categories,
          'subcats'=>$subcats,
          //'postCatname'=>$postCatname,
          //'postCatid'=>$postCatid,
          'newses'=>$newses,
          'latestheadlines'=>$latestheadlines,
          'latestheadline2s'=>$latestheadline2s,
           'footers'=>$footers,
         ]);
         }

         public function last(){

            if(session()->get('locale') == 'sp'){


                $f1= PostCategory::where('status',1)->limit(4)->get();
                $f2= PostCategory::where('status',1)->skip(4)->limit(4)->get();
                $f3= PostCategory::where('status',1)->skip(8)->limit(4)->get();
                        $categories=DB::table('post_categories')->where('status',1)->limit(2)->get();

                       $covs=DB::table('post_categories')->where('status',1)->orderBy('id','asc')->skip(5)->take(3)->get();

                        $latestPosts=DB::table('post_categories')->where('status',1)->skip(8)->take(9)->get();
                        $latestPosts1=DB::table('post_categories')->where('status',1)->skip(17)->take(1)->get();
                        $topFours=DB::table('post_categories')->where('status',1)->skip(18)->take(10)->get();

                        $subcats=SubCategory::where('cat_name',21)->get();

                         $mcats=DB::table('post_categories')->where('status',1)->skip(5)->limit(12)->get();

                       $latestheadline9s = Post::where('public_site',0)->latest()->skip(3)->take(6)->get();
                        //$subcats=SubCategory::all();
                    //$postCatname=PostCategory::where('id',$id)->value('name');
                    //$postCatid=PostCategory::where('id',$id)->value('id');
                    //$postsubCatname=SubCategory::where('sub_name',$subid)->value('sub_name');
                    $newses=DB::table('posts')>where('public_site',0)->inRandomOrder()->limit(50)->paginate(6);
                $latestheadlines = Post::where('public_site',0)->latest()->take(3)->get();
                $latestheadline2s = Post::where('public_site',0)->latest()->skip(3)->take(4)->get();
                        $footers = Post::where('public_site',0)->latest()->limit(5)->get();




            }else{
           $f1= PostCategory::where('status',1)->limit(4)->get();
     $f2= PostCategory::where('status',1)->skip(4)->limit(4)->get();
     $f3= PostCategory::where('status',1)->skip(8)->limit(4)->get();
             $categories=DB::table('post_categories')->where('status',1)->limit(2)->get();

            $covs=DB::table('post_categories')->where('status',1)->orderBy('id','asc')->skip(5)->take(3)->get();

             $latestPosts=DB::table('post_categories')->where('status',1)->skip(8)->take(9)->get();
             $latestPosts1=DB::table('post_categories')->where('status',1)->skip(17)->take(1)->get();
             $topFours=DB::table('post_categories')->where('status',1)->skip(18)->take(10)->get();

             $subcats=SubCategory::where('cat_name',21)->get();

              $mcats=DB::table('post_categories')->where('status',1)->skip(5)->limit(12)->get();

            $latestheadline9s = Post::where('public_site',1)->latest()->skip(3)->take(6)->get();
             //$subcats=SubCategory::all();
         //$postCatname=PostCategory::where('id',$id)->value('name');
         //$postCatid=PostCategory::where('id',$id)->value('id');
         //$postsubCatname=SubCategory::where('sub_name',$subid)->value('sub_name');
         $newses=DB::table('posts')>where('public_site',1)->inRandomOrder()->limit(50)->paginate(6);
     $latestheadlines = Post::where('public_site',1)->latest()->take(3)->get();
     $latestheadline2s = Post::where('public_site',1)->latest()->skip(3)->take(4)->get();
             $footers = Post::where('public_site',1)->latest()->limit(5)->get();
            }
         return view('front.postCategory.last')->with([
           'f1'=>$f1,
             'f2'=>$f2,
             'f3'=>$f3,
            'mcats'=>$mcats,
             'covs'=>$covs,
             'latestPosts1'=>$latestPosts1,
             'latestheadline9s'=>$latestheadline9s,
          'latestPosts'=>$latestPosts,
          'topFours'=>$topFours,
          'categories'=>$categories,
          'subcats'=>$subcats,
          //'postCatname'=>$postCatname,
          //'postCatid'=>$postCatid,
          'newses'=>$newses,
          'latestheadlines'=>$latestheadlines,
          'latestheadline2s'=>$latestheadline2s,
           'footers'=>$footers,
         ]);
         }
}
