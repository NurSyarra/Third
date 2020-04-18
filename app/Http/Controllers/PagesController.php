<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index(){
    	$title = 'Welcome to Committee Manager';
    	//return view('pages.index', compact('title'));
    	return view('pages.index')->with('title', $title);
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
        return view('pages.profile')->with('title', $title);
    }
    public function organiserprofile(){
        $title = 'Profile';
        return view('pages.organiserprofile')->with('title', $title);
    }


}
