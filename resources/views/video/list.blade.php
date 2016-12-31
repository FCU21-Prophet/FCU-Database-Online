@extends('app')

@section('title', '首頁')

@section('css')

@endsection
@section('content')
    {{--{{$video}}--}}

    <table class="ui celled table">
        <thead>
        <tr>
            <th>片名</th>
            <th>國家</th>
            <th>片長</th>
        </tr>
        </thead>
        <tbody>

        @foreach($videos as $video)
            <tr>
                <td>{{ $video['name'] }}</td>
                <td>{{ $video['country'] }}</td>
                <td>{{ $video['running_time'] }}</td>
            </tr>
        @endforeach

        </tbody>

    </table>

@endsection
