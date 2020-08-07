@extends('layouts.pediaapp')
@section('title', $item->title)

@section('content')
    <link rel="stylesheet" type="text/css" href="{{ asset('css/markdown.css') }}">
    <div class="container mt-4">
        <div class="border p-4">
            <div class="mb-4 text-right">
                @auth
                <form style="display: inline-block;" method="POST"
                    action="/column/{{$item->id}}"
                >
                    <a class="btn btn-primary" href="{{$item->id}}/edit">
                        編集する
                    </a>
                @endauth
                    @csrf
                @auth
                    @method('DELETE')

                    <button class="btn btn-danger">削除する</button>
                @endauth
                </form>
            </div>

            <h1 class="h5 mb-4">
                {{ $item->title }}
            </h1>

            <div class="mb-5 show-post">
            @php
                $converter = new \cebe\markdown\MarkdownExtra();
                $item->contents = $converter->parse($item->contents);
            @endphp  
            {!! $item->contents !!}
            </div>
        </div>
    </div>
@endsection