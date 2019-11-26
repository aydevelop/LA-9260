@extends('layouts.app')

@section('content')
    <section class="container">
        <div class="card car-padded">
            <div class="section-header" style="padding-top:20px">
                <h2>
                    Your Subscription
                </h2>
            </div>

            @if(!Auth::user()->subscribed('primary'))
                <div class="jumbotron text-center">
                    <p>You don't have a subscription</p>
                    <a href="/subscribe" class="btn btn-success">
                        
                    </a>
                </div>
            @else
                <div class="row">
                    <div class="col-sm-12">
                        <div class="well text-center">
                            <strong>Current Plan:</strong>
                            {{ Auth::user()->subscription('primary')->stripe_plan == "plan_GDjjZK3iUySkcW" ? "Bronze" : "Silver "  }}
                        </div>
                    </div>
                </div>
            @endif
            
            <div class="section-header">
                <h2>Billing History</h2>
            </div>

            @if (count($invoices) > 0)
                <table class="table table-bordered table-striped table-hover">
                        <tr>
                            <th>ID</th>
                            <th>Price</th>
                        </tr>
                    @foreach($invoices as $invoice)
                        <tr>
                            <td>{{ $invoice->id }} </td>
                            <td> {{ $invoice->total() }}</td>
                            {{-- <td>
                                <a href="/account/invoices/{{ $invoice->id }}">
                                    Download
                                </a>
                            </td> --}}
                        </tr>
                    @endforeach
                </table>
            @else
                <div>
                    <p>
                        No Billing history
                    </p>
                </div>
            @endif

           
        </div>
        </div>
    </section>
@endsection