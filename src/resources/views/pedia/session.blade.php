@extends('layouts.pediaapp')

@section('title', 'Session')

@section('menubar')
    @parent
    セッションページ
@endsection

@section('content')
    <p>{{$session_data}}</p>
    <form action="/pedia/session" method="POST">
        {{ csrf_field() }}
    <input type="text" name="input">
    <input type="submit" value="send">
@endsection
