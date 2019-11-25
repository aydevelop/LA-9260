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

                @if($post->premium and !(Auth::user() and Auth::user()->subscribed('primary')))
                
                    <div>
                        <h3>
                            Subscribe to gain access
                        </h3>
                        <h4>
                            <a href="/subscribe">
                                Subscribe Now
                            </a>
                        </h4>
                    </div>
                @else
                    {!! $post->content !!}
                @endif
            </header>
        </div>
    </div>
</div>

@endsection