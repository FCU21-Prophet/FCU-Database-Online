@extends('app')

@section('title', '首頁')

@section('css')

@endsection
@section('content')
    {{--{{$video}}--}}

    <div class="ui action input">
        <input type="text" placeholder="搜尋片片...">
        <button class="ui button">搜尋</button>
    </div>

    <table class="ui celled table">

        <thead>
        <tr>
            <th>片名</th>
            <th>國家</th>
            <th>片長(秒)</th>
        </tr>
        </thead>
        <tbody>

        @foreach($videos as $video)
            <tr>
                <td>
                    {{--$url = route('routeName', ['id' => 1]);--}}
                    <button class="ui button" onclick= self.location.href="{{ route('videoDetail', ['id' => $video['id']]) }}">
                        {{ $video['name'] }}
                    </button>
                </td>
                <td>{{ $video['country'] }}</td>
                <td>{{ $video['running_time'] }}</td>
            </tr>
        @endforeach

        </tbody>

    </table>

    <div class="ui right aligned grid">
        <div class="right floated left aligned two wide column">
            <button class="ui button">加入</button>
        </div>
    </div>
    <br>
    <br>

@endsection
