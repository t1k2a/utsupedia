@extends('layouts.pediaapp')

@section('content')
    <div class="container mt-4">
        <div class="border p-4">
            <div class="mb-4 text-right">
                @auth
                <form style='' method="POST"
                    action="/pedia/{{$item->id}}"
                > 
                    <a style="width:10% display:flex; flex-direction: row;" class="btn btn-primary" href="{{$item->id}}/edit">
                        編集する
                    </a>
                    @csrf
                    @method('DELETE')
                    <button style="width:20% display:flex; flex-direction: row;" class="btn btn-danger">削除する</button>
                @endauth
                </form>
            </div>

            <h1 class="h5 mb-4">
                {{ $item->title }}
            </h1>

            <p class="mb-5">
            @php
                $converter = new \cebe\markdown\MarkdownExtra();
                $item->contents = $converter->parse($item->contents);
            @endphp  
                {!! $item->contents !!}
            </p>
        </div>
    </div>
@endsection
