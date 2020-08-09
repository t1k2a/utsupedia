@extends('layouts.pediaapp')
@section('title', 'うつペディア')

@section('content')
    <h1 style="margin-top: 30px; border-bottom: solid 3px #c0c0c0;">
        記事一覧
    </h1>
    <div class="mb-4">
        @auth
            <a href="pedia/create" class="btn btn-primary" style="margin-top:30px;">
                新規作成
            </a>
        @endauth
    </div>
    <div class="cotainer mt-4">
    @foreach ($items as $item)
    <div class="card mb-4 title">
        <a class="link-to-show" href="/pedia/{{ $item->id }}">
            <div class="card-header">
                <h1>{{ $item->title }}</h1>
            </div>
            <div class="card-footer">
                <span class="mr-2">
                    投稿日時 {{ $item->created_at }}
                </span>
            </div>
        </a>
    </div>
    @endforeach
    {{ $items->links() }}
    </div>
@endsection
