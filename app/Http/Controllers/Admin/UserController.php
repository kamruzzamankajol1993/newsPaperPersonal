<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\Adver;
use App\Models\Subcategory;
use App\Models\PostCategory;
use App\Models\Team;
use App\Models\Video;
use DB;
use App\Models\SystemInformation;
class UserController extends Controller
{

      public function term_and_condition(){
          $categories=DB::table('post_categories')->where('status',1)->orderBy('image','asc')->limit(12)->get();
        $footers = Post::where('public_site',1)->latest()->limit(5)->get();
         $latestPosts=DB::table('post_categories')->where('status',1)->orderBy('image','asc')->skip(12)->take(8)->get();
        $latestPosts1=DB::table('post_categories')->where('status',1)->orderBy('image','asc')->skip(11)->take(1)->get();
        $team_list_all = Team::where('p_status','other')->get();
        return view('new_front.term_and_condition',compact('footers','categories','latestPosts','latestPosts1','team_list_all'));

    }


    public function privacy_policy(){
        $categories=DB::table('post_categories')->where('status',1)->orderBy('image','asc')->limit(12)->get();
        $footers = Post::where('public_site',1)->latest()->limit(5)->get();
         $latestPosts=DB::table('post_categories')->where('status',1)->orderBy('image','asc')->skip(12)->take(8)->get();
        $latestPosts1=DB::table('post_categories')->where('status',1)->orderBy('image','asc')->skip(11)->take(1)->get();
        $team_list_all = Team::where('p_status','other')->get();
        return view('new_front.privacy_policy',compact('footers','categories','latestPosts','latestPosts1','team_list_all'));
    }


    public function home()
    {




         $homead=Adver::where('name','Home_Section')->orderBy('id','desc')->limit(1)->get();
         $homead1=Adver::where('name','Home_Section')->orderBy('id','desc')->skip(1)->take(1)->get();
    	$categories=DB::table('post_categories')->where('status',1)->orderBy('image','asc')->limit(9)->get();

        $extraCatName = DB::table('post_categories')->where('id',16)->value('name');

        $latestPosts=DB::table('post_categories')->where('status',1)->orderBy('image','asc')->skip(9)->take(18)->get();

       // dd(1);

       $topNews = Post::whereIn('category_id',[3,4,44])->limit(3)->latest()->get();

       $bangladeshPartOne =Post::where('category_id',3)->limit(2)->latest()->get();

       $bangladeshPartTwo =Post::where('category_id',3)->latest()->skip(2)->take(6)->get();


       $kitoPartOne =Post::where('category_id',69)->limit(2)->latest()->get();

       $kitoPartTwo =Post::where('category_id',69)->latest()->skip(2)->take(6)->get();

       $specialPartOne =Post::where('category_id',15)->limit(2)->latest()->get();

       $specialPartTwo =Post::where('category_id',15)->latest()->skip(2)->take(6)->get();




       $commentPartOne =Post::where('category_id',75)->limit(4)->latest()->get();


       $leftNew =Post::where('extra_publish_option',1)->inRandomOrder()->limit(2)->get();
       $rightNew =Post::where('extra_publish_option',0)->inRandomOrder()->limit(2)->get();

       $latestheadlines = Post::latest()->skip(5)->take(4)->get();
       $famousheadlines = Post::latest()->skip(9)->take(4)->get();

       //dd( $topNews);
    return view('new_front.index1')->with([
        'bangladeshPartOne'=>$bangladeshPartOne,
        'bangladeshPartTwo'=>$bangladeshPartTwo,

        'specialPartOne'=>$specialPartOne,
        'specialPartTwo'=>$specialPartTwo,

        'kitoPartOne'=>$kitoPartOne,
        'kitoPartTwo'=>$kitoPartTwo,

'commentPartOne'=>$commentPartOne,

        'extraCatName'=>$extraCatName,
        'latestPosts'=>$latestPosts,
        'categories'=>$categories,
        'homead'=>$homead,
        'homead1'=>$homead1,
        'topNews'=>$topNews,
        'leftNew'=>$leftNew,
        'rightNew'=>$rightNew,
        'latestheadlines'=>$latestheadlines,
        'famousheadlines'=>$famousheadlines,


    ]);
    }


    //to show subcategory filed in service page
    public function findProductName(Request $request){

        $data=Subcategory::select('sub_name')->where('cat_name',$request->id)->get();
        return response()->json($data);
    }

    public function search(Request $request)
    {
        if(session()->get('locale') == 'sp'){

            $postCatname=PostCategory::all();
            $categories=DB::table('post_categories')->where('status',1)->orderBy('image','asc')->limit(12)->get();
            $latestPosts=DB::table('post_categories')->where('status',1)->orderBy('image','asc')->skip(12)->take(8)->get();
            $latestPosts1=DB::table('post_categories')->where('status',1)->orderBy('image','asc')->skip(11)->take(1)->get();
           $subcats=Subcategory::where('cat_name',21)->get();
            $latestheadline9s = Post::where('public_site',0)->latest()->skip(3)->take(6)->get();
            $latestheadline2s = Post::where('public_site',0)->latest()->skip(3)->take(4)->get();
            $footers = Post::where('public_site',0)->latest()->limit(5)->get();
           $latestheadlines = Post::where('public_site',0)->latest()->take(3)->get();
            $search_txt = $request->input('subcategory_id');
            $newses = Post::where('public_site',0)->where('status',1)
            ->Where('subcategory_id', 'like', '%'.$search_txt.'%')
                               ->orwhere('title', 'like', '%'.$search_txt.'%')
                    ->orWhere('paragraph', 'like', '%'.$search_txt.'%')
                    ->orWhere('category_id', 'like', '%'.$search_txt.'%')
                    ->get();
    $f1= PostCategory::where('status',1)->limit(4)->get();
    $f2= PostCategory::where('status',1)->skip(4)->limit(4)->get();
    $f3= PostCategory::where('status',1)->skip(8)->limit(4)->get();

        }else{
        $postCatname=PostCategory::all();
        $categories=DB::table('post_categories')->where('status',1)->orderBy('image','asc')->limit(12)->get();
        $latestPosts=DB::table('post_categories')->where('status',1)->orderBy('image','asc')->skip(12)->take(8)->get();
        $latestPosts1=DB::table('post_categories')->where('status',1)->orderBy('image','asc')->skip(11)->take(1)->get();
       $subcats=Subcategory::where('cat_name',21)->get();
        $latestheadline9s = Post::where('public_site',1)->latest()->skip(3)->take(6)->get();
        $latestheadline2s = Post::where('public_site',1)->latest()->skip(3)->take(4)->get();
        $footers = Post::where('public_site',1)->latest()->limit(5)->get();
       $latestheadlines = Post::where('public_site',1)->latest()->take(3)->get();
        $search_txt = $request->input('subcategory_id');
        $newses = Post::where('public_site',1)->where('status',1)
        ->Where('subcategory_id', 'like', '%'.$search_txt.'%')
                           ->orwhere('title', 'like', '%'.$search_txt.'%')
                ->orWhere('paragraph', 'like', '%'.$search_txt.'%')
                ->orWhere('category_id', 'like', '%'.$search_txt.'%')
                ->get();
$f1= PostCategory::where('status',1)->limit(4)->get();
$f2= PostCategory::where('status',1)->skip(4)->limit(4)->get();
$f3= PostCategory::where('status',1)->skip(8)->limit(4)->get();
        }
    return view('front.search.search1')->with([
        'f1'=>$f1,
        'f2'=>$f2,
        'f3'=>$f3,
        'latestPosts1'=>$latestPosts1,
        'latestheadline9s'=>$latestheadline9s,
     'latestPosts'=>$latestPosts,

     'categories'=>$categories,
     'subcats'=>$subcats,
     'postCatname'=>$postCatname,
     'newses'=>$newses,
     'latestheadlines'=>$latestheadlines,
     'search_txt'=>$search_txt,
     'latestheadline2s'=>$latestheadline2s,
      'footers'=>$footers,
    ]);
    }
    //
    public function about(){
         $footers = Post::where('public_site',1)->latest()->limit(5)->get();
         $categories=DB::table('post_categories')->where('status',1)->orderBy('image','asc')->limit(12)->get();
        $latestPosts=DB::table('post_categories')->where('status',1)->orderBy('image','asc')->skip(12)->take(8)->get();
        $latestPosts1=DB::table('post_categories')->where('status',1)->orderBy('image','asc')->skip(11)->take(1)->get();
        $team_list_all = Team::where('p_status','other')->get();
         return view('new_front.about')->with([
        'team_list_all'=>$team_list_all,
        'footers'=>$footers,
        'categories'=>$categories,
        'latestPosts'=>$latestPosts,
        'latestPosts1'=>$latestPosts1

    ]);


    }

    public function publisher_and_editor_in_chief(){

         $footers = Post::where('public_site',1)->latest()->limit(5)->get();
         $categories=DB::table('post_categories')->where('status',1)->orderBy('image','asc')->limit(12)->get();
        $latestPosts=DB::table('post_categories')->where('status',1)->orderBy('image','asc')->skip(12)->take(8)->get();
        $latestPosts1=DB::table('post_categories')->where('status',1)->orderBy('image','asc')->skip(11)->take(1)->get();
        $team_list_all = Team::where('p_status','publisher_and_editor_in_chief')->get();
         return view('new_front.p_value')->with([
        'team_list_all'=>$team_list_all,
        'footers'=>$footers,
        'categories'=>$categories,
        'latestPosts'=>$latestPosts,
        'latestPosts1'=>$latestPosts1

    ]);

    }

      public function contributor(){

         $footers = Post::where('public_site',0)->latest()->limit(5)->get();
         $categories=DB::table('post_categories')->where('status',1)->orderBy('image','asc')->limit(12)->get();
        $latestPosts=DB::table('post_categories')->where('status',1)->orderBy('image','asc')->skip(12)->take(8)->get();
        $latestPosts1=DB::table('post_categories')->where('status',1)->orderBy('image','asc')->skip(11)->take(1)->get();
        $team_list_all = Team::where('p_status','contributer')->get();
         return view('new_front.contributor')->with([
        'team_list_all'=>$team_list_all,
        'footers'=>$footers,
        'categories'=>$categories,
        'latestPosts'=>$latestPosts,
        'latestPosts1'=>$latestPosts1

    ]);

    }
}
