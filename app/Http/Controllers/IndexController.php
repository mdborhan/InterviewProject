<?php

namespace App\Http\Controllers;

use App\PostVideo;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function index()
    {
        return view('front.home.index',[
            'singleImageVideos'=>PostVideo::orderBy('id','desc')
                ->where('status',1)->where('type',1)
                ->take(1)->get(),
            'allImageVideos'=>PostVideo::orderBy('id','asc')
                ->where('status',1)->where('type',1)
                ->get(),
            'singleSectiontwoposts'=>PostVideo::orderBy('id','desc')
                ->where('status',1)->where('type',0)
                ->take(1)->get(),
            'allSingleSectiontwoposts'=>PostVideo::orderBy('id','asc')
                ->where('status',1)->where('type',0)
                ->get(),

        ]);
    }
}
