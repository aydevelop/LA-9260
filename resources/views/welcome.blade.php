
   @extends('layouts.app')

   @section('content')
    <div class="container" >
        <div class="section-header">
                <h2>
                    Premium Posts
                </h2>
            </div>
            <p class="text-center lead">
                You now have access to these premium!
            </p>
        </div>

        <div class="row">
            <div class="col-sm3">
                @foreach($posts as $post)
                    @include('partials.post-card', ['post' => $post])
                @endforeach
            </div>
        </div>
    @endsection