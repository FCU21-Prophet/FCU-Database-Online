@extends('app')

@section('title', '新增影片')

@section('css')

@endsection
@section('content')

    <form class="ui form" action="{{route('videoStore')}}" method="post">
        {{ csrf_field() }}
        <div class="field">
            <label style="color: white">片名</label>
            <input type="text" name="video_name" placeholder="片片名稱...?">
        </div>

        <div class="field">
            <label style="color: white">國家</label>
            <input type="text" name="country" placeholder="國家名稱...?">
        </div>

        <div class="field">
            <label style="color: white">片長</label>
            <input type="text" name="running_time" placeholder="片長多久...?">
        </div>

        <div class="field">
            <label style="color: white">URL</label>
            <input type="text" name="URL" placeholder="(youtube only)">
        </div>

        <div class="field">
            <label style="color: white">簡介</label>
            <input type="text" name="introduction" placeholder="片片在講啥...?">
        </div>

        <button class="ui button" type="submit">提交</button>
    </form>

@endsection