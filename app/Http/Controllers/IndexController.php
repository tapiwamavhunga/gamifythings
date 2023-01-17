<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

use App\Models\Champion;
use App\Models\Competition;
use App\Models\Challenge;
class IndexController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
   

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */

    public function welcome()
    {
        $data = array(
            'count_user' => DB::table('users')->count(),
        );

        $champions = Champion::all();
        $challenges = Challenge::all(); 
        //print_r($champions);

        return view('welcome', compact('data', 'champions', 'challenges'));

        //return view('home',$data, $champions);
    }


    public function index()
    {
        $data = array(
            'count_user' => DB::table('users')->count(),
            'menu'      => 'menu.v_menu_admin',
            'content' => 'content.view_dashboard'
        );

        $champions = Champion::all();
        $challenges = Challenge::all(); 
        //print_r($champions);

                return view('home', compact('data', 'champions', 'challenges'));

        //return view('home',$data, $champions);
    }
}
