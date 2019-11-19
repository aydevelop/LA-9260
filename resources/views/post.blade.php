@extends('layouts.app')

@section('content')

<div class="container">
    <div class="card post-single">
        <div class="img-container" 
            style="background-image:url('{{ $post->image }}')" >
        </div>

        <div class="card-content">
            <header class="post-header" >
                <h1>
                    {{ $post->title }}
                </h1>
                <div class="byline">
                    {{ $post->author->name }}
                </div>
                {!! $post->content !!}
            </header>
        </div>
    </div>
</div>

@endsection