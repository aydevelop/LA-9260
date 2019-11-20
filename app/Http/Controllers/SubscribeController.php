<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class SubscribeController extends Controller
{
    public function showSubscribe()
    {
        return view('subscribe');
    }

    public function processSubscribe(Request $request){
        
    } 
}
