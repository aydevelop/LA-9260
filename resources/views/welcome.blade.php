
   @extends('layouts.app')

   @section('content')
    <div class="container" >
        <h2>
            Premium Posts
        </h2>

        <div class="row">
            <div class="col-sm3">
                @foreach($posts as $post)
                    @include('partials.post-card', ['post' => $post])
                @endforeach
            </div>
        </div>
    @endsection