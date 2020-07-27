<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Auth;
use App\POst;
use App\faq;

class DashboardController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $user_id = auth()->user()->id;
        $user = User::find($user_id);
        $posts = $user->posts;
        $org_posts = POst::all();
        return view('dashboard', compact('posts', 'org_posts'));
    }

    public function organiser(Request $req){
        return view('middleware') ->withMessage('Organiser');
    }
    public function student(Request $req){
        return view('middleware') ->withMessage('Student');
    }
    public function admin(Request $req){
        return view('middleware') ->withMessage('Admin');
    }


}
