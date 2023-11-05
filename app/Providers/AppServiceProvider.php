<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Models\SystemInformation;
use App\Models\Unit;
use App\Models\Post;
use App\Models\Team;
use App\Models\Adver;
use App\Models\Divisionnewscategory;
class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {

        $homead=Adver::where('id',16)->value('image');
        $breakingNews = Post::latest()->limit(5)->get();

        $icon_name = SystemInformation::value('icon');
        $logo_name = SystemInformation::value('logo');
        $ins_name = SystemInformation::value('System_name');

        $system_all = SystemInformation::latest()->first();

        $ss_link_list = Divisionnewscategory::all();


        $teamList = Team::all();

         $bb_site_logo_header = Unit::where('name','Bangla Site Header Logo')->value('img');
         $bb_site_logo_footer = Unit::where('name','Bangla Site Footer Logo')->value('img');
         $ee_site_logo_header = Unit::where('name','Engish Site Header Logo')->value('img');
         $ee_site_logo_footer = Unit::where('name','Engish Site Footer Logo')->value('img');
         $bb_site_logo_water_mark = Unit::where('name','Watermark')->value('img');


         $english_lan_banner = Unit::where('name','English Language Banner')->value('img');

         $bangla_lan_banner = Unit::where('name','Bangla Language Banner')->value('img');

       $personal_logo_name = Unit::where('name','personal_logo')->value('img');

         view()->share('english_lan_banner', $english_lan_banner);
         view()->share('bangla_lan_banner', $bangla_lan_banner);

          view()->share('personal_logo_name', $personal_logo_name);

          view()->share('homead', $homead);

          view()->share('ss_link_list', $ss_link_list);


         view()->share('bb_site_logo_header', $bb_site_logo_header);
         view()->share('bb_site_logo_footer', $bb_site_logo_footer);
         view()->share('ee_site_logo_header', $ee_site_logo_header);
         view()->share('ee_site_logo_footer', $ee_site_logo_footer);
         view()->share('bb_site_logo_water_mark', $bb_site_logo_water_mark);


        view()->share('system_all', $system_all);

        view()->share('ins_name', $ins_name);
        view()->share('logo',  $logo_name);
        view()->share('icon', $icon_name);

        view()->share('breakingNews', $breakingNews);

        view()->share('teamList', $teamList);


    }
}
