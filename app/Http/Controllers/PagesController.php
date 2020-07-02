<?php

namespace App\Http\Controllers;
use App\faq;
use Illuminate\Support\Facades\Storage;
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

}
