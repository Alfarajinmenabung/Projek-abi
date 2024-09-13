<?php

use Darryldecode\Cart\Facades\CartFacade as Cart;
use App\Models\Product;

class CartController extends Controller
{
    public function add(Request $request, $id)
    {
        $product = Product::find($id);

        Cart::add(array(
            'id' => $product->id,
            'name' => $product->name,
            'price' => $product->price,
            'quantity' => 1,
            'attributes' => array()
        ));

        return redirect()->back()->with('success', 'Product added to cart!');
    }

    public function cart()
    {
        $cartCollection = Cart::getContent();
        return view('shop.cart', compact('cartCollection'));
    }

    public function remove(Request $request)
    {
        Cart::remove($request->id);
        return redirect()->back()->with('success', 'Product removed from cart!');
    }

    public function clear()
    {
        Cart::clear();
        return redirect()->back()->with('success', 'Cart cleared!');
    }
}
