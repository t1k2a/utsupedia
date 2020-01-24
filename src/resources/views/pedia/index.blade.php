@extends('layouts.pediaapp')
@section('title', 'うつペディア')

@section('content')
    <div class="mb-4">
        <a href="pedia/create" class="btn btn-primary">
            新規作成
        </a>
    </div>
    <div class="cotainer mt-4">
    @foreach ($items as $item)
    <div class="card mb-4">
        <div class="card-header">
            {{ $item->title }}
        </div>
        <div class="card-body">
            <p class="card-text">
                {!! nl2br(e(Str::limit($item->contents, 200))) !!}
            </p>
        </div>
        <div class="card-footer">
            <span class="mr-2">
                投稿日時 {{ $item->created_at }}
            </span>
        </div>
    </div>
    @endforeach
    </div>
@endsection