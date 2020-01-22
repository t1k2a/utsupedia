@extends('layouts.pediaapp')
@section('title', 'index')

@section('menubar')
    @parent
    インデックスページ
@endsection

@section('content')
    <table>
    <tr><th>Title</th><th>Content</th></tr>
    @foreach ($items as $item)
    <tr>
        <td>{{$item->title}}</td>
        <td>{{$item->contents}}</td>
    </tr>
    @endforeach
    </table>
@endsection