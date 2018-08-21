<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PageController extends Controller
{
    /**
     * Show homepage
     *
     * @return Response
     */
    public function homepage() {
        return view('pages.home');
    }

    /**
     * Show artist profile
     * 
     */
    public function artist(Request $request) {
        return view('pages.artist');
    }
}
