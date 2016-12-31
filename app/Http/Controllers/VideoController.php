<?php

namespace App\Http\Controllers;

use App\Video;
use Illuminate\Http\Request;

use App\Http\Requests;

class VideoController extends Controller
{
    //
    public function index()
    {
        $video = Video::all();
        return view('video.list', compact('video'));
    }
}
