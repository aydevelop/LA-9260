<?php

namespace App\Http\Controllers;

use App\Http\Requests;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AccountController extends Controller
{
    public function ahowAccount(Request $request)
    {
        $invoices = Auth::user()->invoices();
        return view('account', compact('invoices'));
    }

    public function updateSubscription(Request $request)
    {
        
    }

    public function updateCard(Request $request)
    {

    }

    public function deleteSubscription(Request $request)
    {
        $user = $request->user();
        $user->subscription('primary')->cancel();
        return redirect('account');
    }

    public function downloadInvoice($invoiceId)
    {
        return Auth::user()->downloadInvoice($invoiceId, [
            'vendor' => 'Hi-Fi',
            'product' => 'Monthly Subscription'
        ]);
    }
}
