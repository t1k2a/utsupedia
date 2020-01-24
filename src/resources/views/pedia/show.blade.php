@extends('layouts.pediaapp')

@section('content')
    <div class="container mt-4">
        <div class="border p-4">
            <h1 class="h5 mb-4">
                {{ $item->title }}
            </h1>

            <p class="mb-5">
                {!! nl2br(e($item->contents)) !!}
            </p>
        </div>
    </div>
@endsection
