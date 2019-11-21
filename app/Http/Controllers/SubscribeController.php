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
       // grab the user
       $user = $request->user();
       // if there is no user, we have to create one
       if ( ! $user) {
           $this->validate($request, [
               'name'     => 'required|max:255',
               'email'    => 'required|email|max:255|unique:users',
               'password' => 'required|min:6'
           ]);

           try {
               $user = User::create([
                   'name'     => $request->input('name'),
                   'email'    => $request->input('email'),
                   'password' => bcrypt($request->input('password')),
               ]);
               Auth::login($user);
           } catch (\Exception $e) {
               return back()->withErrors(['message' => 'Error creating user.']);
           }

           return 'OK';
       }

 
    } 
}
