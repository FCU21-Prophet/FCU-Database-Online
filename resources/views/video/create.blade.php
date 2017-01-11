@extends('app')

@section('title', '新增影片')

@section('css')

@endsection
@section('content')

    <table class="ui celled table">

        <thead>
        <tr>
            <th>片名</th>
            <td>
                <div class="ui action input">
                    <input type="text" placeholder="片片名稱...?" size=40>
                </div>
            </td>
        </tr>

        <tr>
            <th>國家</th>
            <td>
                <div class="ui action input">
                    <input type="text" placeholder="國家名稱...?" size=40>
                </div>
            </td>
        </tr>

        <tr>
            <th>片長(秒)</th>
            <td>
                <div class="ui action input">
                    <input type="text" placeholder="片長多久...?" size=40>
                </div>
            </td>
        </tr>

        <tr>
            <th>URL (youtube only)</th>
            <td>
                <div class="ui action input">
                    <input type="text" size=100>
                </div>
            </td>
        </tr>

        <tr>
            <th>簡介</th>
            <td>
                <div class="ui action input">
                    <input type="text" placeholder="這片片在講什麼...?" size=100>
                </div>
            </td>
        </tr>
        </thead>
    </table>

    <div class="ui right aligned grid">
        <div class="right floated left aligned two wide column">
            <button class="ui button">提交</button>
        </div>
    </div>
    
@endsection