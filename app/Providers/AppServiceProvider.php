<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
###################
use Illuminate\Support\Facades\Blade;
use Illuminate\Support\Facades\DB;

// use Illuminate\Support\ServiceProvider;
use App\Models\item;

use App\Models\User;

use App\Models\Admin;

use Illuminate\Support\Facades\View;
// use App\Models\item;




class AppServiceProvider extends ServiceProvider
{
    // define('pagination_count',10);
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
        $session=Session('phone');

        $client=DB::table('users')->select('*')->where('phone','=',$session)->get();

        // $client=User::select('*')->where('phone','=',$session)->get();



        $admins=Admin::select('*')->where('phone','=',$session)->get();

        $items=item::select('*')->inRandomOrder()->paginate(4);

        $users=[
            'client'=>$client,
            'admin'=>$admins,
            'items'=>$items
        ];


        View::share('all_data',$users);
    }
}
