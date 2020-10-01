<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller {
    public function index () {
    	$title = 'Welcome to the webshop';
    	return view('pages.index', compact('title'));
    }

    public function about () {
    	$title = 'about us';
    	return view('pages.about', compact('title'));
    }

    public function services () {
    	$title = 'Services';
    	return view('pages.services', compact('title'));
    }
}
