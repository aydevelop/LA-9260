@extends('layouts.app')

@section('content')
    
    <div class="hero">
        <div class="hero-content">
            <h1>Daily Dose of Cute Animals</h1>
            <h2>Only $10/month</h2>
            <div class="cta">
                <p>We promise you won't regret it</p>
                <a class="btn btn-danger" href="/subscribe">Subscribe</a>
            </div>
        </div>
    </div>

     <section>
         <div class="container">
            <div class="section-header">
                <h2>
                    Latest...
                </h2>
            </div>
            <div class="row">
                @foreach($posts as $post)
                    <div class="col-sm-6">
                        @include('partials.post-card',['post'=>$post])
                    </div>
                @endforeach

            </div>
         </div>
     </section>

@endsection