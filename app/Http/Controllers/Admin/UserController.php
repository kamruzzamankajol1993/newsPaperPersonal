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




         $homead=Adver::where('id',16)->value('image');
         $homead1=Adver::where('id',17)->value('image');
         $homead2=Adver::where('id',18)->value('image');

         $homead3=Adver::where('id',19)->value('image');
         $homead4=Adver::where('id',20)->value('image');

         ;
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



       $comPartOne =Post::where('category_id',68)->limit(1)->latest()->get();

       $comPartTwo =Post::where('category_id',68)->latest()->skip(1)->take(4)->get();


       $enPartOne =Post::where('category_id',7)->limit(1)->latest()->get();

       $enPartTwo =Post::where('category_id',7)->latest()->skip(1)->take(4)->get();




       $relPartOne =Post::where('category_id',50)->limit(1)->latest()->get();

       $relPartTwo =Post::where('category_id',50)->latest()->skip(1)->take(4)->get();


       $intPartOne =Post::where('category_id',4)->limit(1)->latest()->get();

       $intPartTwo =Post::where('category_id',4)->latest()->skip(1)->take(4)->get();


       $sportsPartOne =Post::where('category_id',6)->limit(1)->latest()->get();

       $sportsPartTwo =Post::where('category_id',6)->latest()->skip(1)->take(2)->get();


       $sportsPartThree=Post::where('category_id',6)->latest()->skip(3)->take(2)->get();


       $sportsPartFour=Post::where('category_id',6)->latest()->skip(5)->take(1)->get();


       $videoPartOne =Post::where('category_id',52)->latest()->get();

       $commentPartOne =Post::where('category_id',75)->limit(4)->latest()->get();

       $juktoPartOne =Post::where('category_id',70)->limit(10)->latest()->get();
       $curopPartOne =Post::where('category_id',71)->limit(5)->latest()->get();

       $motaPartOne =Post::where('category_id',76)->limit(5)->latest()->get();
       $proPartOne =Post::where('category_id',11)->limit(5)->latest()->get();

       $vorPartOne =Post::where('category_id',18)->limit(5)->latest()->get();
       $exPartOne =Post::where('category_id',73)->limit(5)->latest()->get();
       $syPartOne =Post::where('category_id',60)->limit(5)->latest()->get();


       $agriPartOne =Post::where('category_id',41)->limit(5)->latest()->get();
       $hePartOne =Post::where('category_id',8)->limit(5)->latest()->get();
       $othPartOne =Post::where('category_id',16)->limit(5)->latest()->get();


       $phPartOne =Post::where('category_id',51)->limit(10)->latest()->get();



       $leftNew =Post::where('extra_publish_option',1)->inRandomOrder()->limit(2)->get();
       $rightNew =Post::where('extra_publish_option',0)->inRandomOrder()->limit(2)->get();

       $latestheadlines = Post::latest()->skip(5)->take(4)->get();
       $famousheadlines = Post::latest()->skip(9)->take(4)->get();

       //dd( $topNews);
    return view('new_front.index1')->with([

        'homead'=>$homead,
        'homead1'=>$homead1,
        'homead2'=>$homead2,
        'homead3'=>$homead3,
        'homead4'=>$homead4,

        'phPartOne'=>$phPartOne,

        'agriPartOne'=>$agriPartOne,
        'hePartOne'=>$hePartOne,
        'othPartOne'=>$othPartOne,


        'syPartOne'=>$syPartOne,
        'vorPartOne'=>$vorPartOne,
        'exPartOne'=>$exPartOne,

        'motaPartOne'=>$motaPartOne,
        'proPartOne'=>$proPartOne,



        'juktoPartOne'=>$juktoPartOne,
        'curopPartOne'=>$curopPartOne,

        'enPartOne'=>$enPartOne,
        'enPartTwo'=>$enPartTwo,

        'sportsPartOne'=>$sportsPartOne,
        'sportsPartTwo'=>$sportsPartTwo,
        'sportsPartThree'=>$sportsPartThree,
        'sportsPartFour'=>$sportsPartFour,

'videoPartOne'=>$videoPartOne,


        'comPartOne'=>$comPartOne,
        'comPartTwo'=>$comPartTwo,
        'relPartOne'=>$relPartOne,
        'relPartTwo'=>$relPartTwo,
        'intPartOne'=>$intPartOne,
        'intPartTwo'=>$intPartTwo,


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
        $extraCatName = DB::table('post_categories')->where('id',16)->value('name');

        $latestPosts=DB::table('post_categories')->where('status',1)->orderBy('image','asc')->skip(9)->take(18)->get();
        $categories=DB::table('post_categories')->where('status',1)->orderBy('image','asc')->limit(9)->get();

        $search_txt = $request->input('subcategory_id');
        $newses = Post::where('public_site',1)->where('status',1)
        ->Where('subcategory_id', 'like', '%'.$search_txt.'%')
                           ->orwhere('title', 'like', '%'.$search_txt.'%')
                ->orWhere('paragraph', 'like', '%'.$search_txt.'%')
                ->orWhere('category_id', 'like', '%'.$search_txt.'%')
                ->get();

                return view('new_front.category')->with([
                    'newsesOne'=>$newsesOne,
                  'latestPosts'=>$latestPosts,
                  'extraCatName'=>$extraCatName,
                  'postCatname'=>$postCatname,
                  'categories'=>$categories,
                  'newses'=>$newses,

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
        $extraCatName = DB::table('post_categories')->where('id',16)->value('name');

        $latestPosts=DB::table('post_categories')->where('status',1)->orderBy('image','asc')->skip(9)->take(18)->get();
        $categories=DB::table('post_categories')->where('status',1)->orderBy('image','asc')->limit(9)->get();
        $team_list_all = Team::get();
         return view('new_front.contributor')->with([
        'team_list_all'=>$team_list_all,

        'latestPosts'=>$latestPosts,
'categories'=>$categories,
        'extraCatName'=>$extraCatName,

    ]);

    }
}
