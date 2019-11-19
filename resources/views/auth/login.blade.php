@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row">
        <div class="col-sm-6 col-sm-offset-3">
            <div class="card auth-card">
                <h1>
                    Login
                </h1>
                <form method="POST" action="/login" >
                   
                    {!! csrf_field() !!}

                    <div class="form-group">
                        <label for="">Email</label>
                        <input class="form-control" type="email" name="email">
                    </div>

                    <div class="form-group">
                         <label for="">Password</label>
                         <input class="form-control" type="password" name="password">
                    </div>
                    
                    <div class="form-group">
                        <button type="submit"
                        class="btn btn-success btn-lg btn-block"
                        >
                            Login
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