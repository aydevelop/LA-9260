<?php

namespace App\Http\Controllers;

use App\Post;

use App\Http\Requests;
use Illuminate\Http\Request;

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
        }

        $ccToken = $request->input('cc_token');
        $plan = $request->input('plan');

        $plan_id = "test";
        if($plan == "Bronze"){ $plan_id="plan_GDjjZK3iUySkcW"; }
        if($plan == "Silver"){ $plan_id="plan_GCyUAGL6l2CoHi";  }

        try {
            $user->newSubscription('primary',  $plan_id)->create($ccToken, [
                'email' => $user->email
            ]);
        } catch (Exception $e) {
            return $e;
            //return back()->withErrors(['message' => 'Error creating subscription.']);
        }
        
        return "ok";
    } 

    public function shoWelcome()
    {
        $posts = Post::where('premium', true)->get();
        return view('welcome', compact('posts'));
    }
}
