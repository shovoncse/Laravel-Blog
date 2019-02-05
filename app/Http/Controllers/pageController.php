<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    //
    public function index() {
        $title = 'Welcome to Laravel';
        return view('pages.index', compact('title'));
        //used for pass multiple value in a array
        //return view('pages.welcome')->with('title', $title);
    }
    public function services() {
        $data = array(
            'title' => 'Services',
            'services' => ['Web Design', 'Programming', 'SEO']
        );
        
        //return view('pages.service', compact('title'));
        //used for pass multiple value in a array
        return view('pages.service')->with($data);
    }
    public function about() {

        return view('pages.about');
    }
}

