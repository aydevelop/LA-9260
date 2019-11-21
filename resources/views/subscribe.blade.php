@extends('layouts.app')

@section('content')

   <div class="hero2" style="text-align:center; padding-top: 20px">
       <div class="horo-content">
           <h1>You're Joining!</h1>
           <h2>Hooray!</h2>
       </div>
   </div>

   <section class="container">
       <div class="card card-padded">
        <form action="/subscribe" method="POST" id="subscribe-form">

            {!! csrf_field()  !!}

            <div class="stripe-errors">
                @if ($errors->any())
                    @foreach ($errors->all() as $error)
                        <div>{{$error}}</div>
                    @endforeach
                @endif
            </div>

            @if(Auth::guest())

            <div class="section-header">
                <h2>User Info</h2>
            </div>

            <div class="form-group">
                <label>Name</label>
                <input type="text" class="form-control" name="name" />
            </div>

            <div class="form-group">
                <label>Email</label>
                <input type="text" class="form-control" name="email" />
            </div>

            <div class="form-group">
                <label>Password</label>
                <input type="password" class="form-control" name="password" />
            </div>

            @endif

            <div class="section-header">
                <h2>Subscription Info</h2>
            </div>

            <div class="row-group">
                <div class="row">
                    <div class="col-xs-4">
                        <div class="subscription-option">
                            <input type="radio" 
                            id="plan-bronze" name="plan" 
                            value="bronze"
                            selected>
                            <label for="plan-bronze">
                                <span class="plan-price">$5 <small>/mo</small></span>
                                <span class="plan-name">Bronze</span>
                            </label>
                        </div>
                    </div>
                    <div class="col-xs-4">
                        <div class="subscription-option">
                            <input type="radio" 
                            id="plan-silver" name="plan" 
                            value="silver"
                            selected>
                            <label for="plan-silver">
                                <span class="plan-price">$10 <small>/mo</small></span>
                                <span class="plan-name">Silver</span>
                            </label>
                        </div>
                    </div>
                    
                </div>
            </div>

            <div class="form-group row">
                <div class="col-xs-8">
                    <label> Credit Card Number </label>
                    <input type="text" class="form-control" placeholder="123 123 123 123" data-stripe="number">
                </div>
                <div class="col-xs-4">
                    <label>CVC</label>
                    <input type="text" class="form-control" placeholder="123" data-stripe="cvc" >
                </div>
            </div>

            <div class="form-group row">
                <div class="col-xs-3">
                    <label>Expiration Month</label>
                    <input type="text" class="form-control" placeholder="01" data-stripe="exp-month">
                </div>
                <div class="col-xs-3">
                    <label>Expiration Year</label>
                    <input type="text" class="form-control" placeholder="2030" data-stripe="exp-year">
                </div>
            </div>

            

            <div class="form-group text-center">
                <input type="submit" class="btn-block btn btn-success" value="Join">
                   
            </div>
        </form>
       </div>
   </section>

@endsection