@extends('app')

@section('title', '首頁')

@section('css')

@endsection
@section('content')
{{--{{$video}}--}}

<button class="ui button">修改</button>
<button class="ui button">刪除</button>

<table class="ui celled table"  style="word-break: break-all">
    <tbody>
    <tr>
        <td>片名: {{ $video['name'] }}</td>
    </tr>
    <tr>
        <td>國家: {{ $video['country'] }}</td>
    </tr>
    <tr>
        <td>片長(分): {{ $video['running_time'] }}</td>
    </tr>
    <tr>
        <td>URL: {{ $video['url'] }}</td>
    </tr>
    <tr>
        <td>簡介: {{ $video['introduction'] }}</td>
    </tr>
    <tr>
        <td>
            <iframe width="560" height="315" src="{{ $video['url'] }}" frameborder="0" allowfullscreen></iframe>
        </td>
    </tr>

</table>

@endsection
