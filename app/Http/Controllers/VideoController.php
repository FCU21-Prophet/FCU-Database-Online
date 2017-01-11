<?php

namespace App\Http\Controllers;

use App\Video;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Redirect;

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
        $strTemp = substr($output['url'], 32 - strlen($output['url']));
        $output['url'] = "https://www.youtube.com/embed/" . $strTemp;

        return view('video.index', ['video' => $output]);
    }

    public function create()
    {
        return view('video.create');
    }

    public function store()
    {
        $video = new Video;
        $video->name = Input::get('video_name');
        $video->country = Input::get('country');
        $video->running_time = Input::get('running_time');
        $video->url = Input::get('URL');
        $video->introduction = Input::get('introduction');
        $video->save();

        return Redirect::to('video');
    }
    public function modify($id)
    {
        $output = Video::findOrFail($id);
        return view('video.modify',['video' =>  $output]);
    }
}
