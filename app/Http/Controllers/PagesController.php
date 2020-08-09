<?php

namespace App\Http\Controllers;
use App\faq;
use Illuminate\Support\Facades\Storage;
use Illuminate\Http\Request;
use Auth;
use App\POst;


class PagesController extends Controller
{
    public function index(){
        $title = 'Welcome to Committee Manager';
        $post = POst::all();
        return view('pages.index')->with('post', $post);
    }

    public function about(){
        $title = 'About Us';
        return view('pages.about')->with('title', $title);
    }


    public function services(){
        $data = array(
            'title' => 'Services',
            'services' => ['CommitteeApplication', 'CreateEvent']
        );
        return view('pages.services')->with($data);
    }
   
   public function profile(){
        $title = 'Profile';
        return view('pages.organiserprofile')->with('title', $title);
    }

    public function display_education(){
        $title = 'Education';
        $posts = POst::where('Categories', 'Education' )->paginate(10);
        return view('posts.index')->with('posts', $posts);
    }

    public function display_fest(){
        $title = 'Festival';
        $posts = POst::where('Categories', 'Festival' )->paginate(10);
        return view('posts.index')->with('posts', $posts);
    }

    public function display_health(){
        $title = 'health';
        $posts = POst::where('Categories', 'Health' )->paginate(10);
        return view('posts.index')->with('posts', $posts);
    }

    public function display_culture(){
        $title = 'culture';
        $posts = POst::where('Categories', 'Culture and Arts' )->paginate(10);
        return view('posts.index')->with('posts', $posts);
    }

    public function display_animals(){
        $title = 'animals';
        $posts = POst::where('Categories', 'Animals and Nature' )->paginate(10);
        return view('posts.index')->with('posts', $posts);
    }

    public function display_community(){
        $title = 'community';
        $posts = POst::where('Categories', 'Community Service' )->paginate(10);
        return view('posts.index')->with('posts', $posts);
    }



       
}
