<?php

namespace App\Http\Controllers;

use Stripe\Stripe;
use Stripe\Charge;
use Illuminate\Http\Request;

class CheckoutController extends Controller
{
    public function index()
    {
        return view('shop.checkout');
    }

    public function store(Request $request)
    {
        Stripe::setApiKey(env('STRIPE_SECRET'));

        $charge = Charge::create([
            'amount' => Cart::getTotal() * 100, // Convert to cents
            'currency' => 'usd',
            'description' => 'Order',
            'source' => $request->stripeToken,
        ]);

        // Clear the cart
        Cart::clear();

        return redirect()->route('shop.index')->with('success', 'Payment successful! Your order is being processed.');
    }
}
