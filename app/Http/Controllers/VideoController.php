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
        $videos = Video::all();
        return view('video.list', compact('videos'));
    }
    public function show($id)
    {
        $output = Video::findOrFail($id);
        // https://www.youtube.com/embed/nDtj-2qnTXk
        $strTemp = substr($output['url'] , 32 - strlen($output['url']) );
        $output['url'] = "https://www.youtube.com/embed/".$strTemp;
        return view('video.index', ['video' =>  $output]);
    }

    public function create()
    {
        return view('video.create');
    }

    public function store()
    {
        //
    }
}
