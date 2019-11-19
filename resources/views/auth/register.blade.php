@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row">
        <div class="col-sm-6 col-sm-offset-3">
            <div class="card auth-card">
                <h1>
                    Register
                </h1>
                <form method="POST" action="/register" >
                   
                    {!! csrf_field() !!}

                    <div class="form-group">
                        <label>Name</label>
                        <input class="form-control" type="text" name="name">
                    </div>

                    <div class="form-group">
                        <label for="">Email</label>
                        <input class="form-control" type="email" name="email">
                    </div>

                    <div class="form-group">
                         <label for="">Password</label>
                         <input class="form-control" type="password" name="password">
                    </div>

                    <div class="form-group">
                        <label for="">Confirm Password</label>
                        <input class="form-control" type="password" name="password_confirmation">
                   </div>
                    
                    <div class="form-group">
                        <button type="submit"
                        class="btn btn-success btn-lg btn-block"
                        >
                            Register
                        </button>
                    </div>

                    <div>
                        @if ($errors->any())
                            @foreach ($errors->all() as $error)
                                <div>{{$error}}</div>
                            @endforeach
                        @endif
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

@endsection