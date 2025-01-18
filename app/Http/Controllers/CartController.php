<?php

namespace App\Http\Controllers;

use App\Models\Checkout;
use App\Models\Order;
use Illuminate\Http\Request;

class CartController extends Controller
{
    //
    public function addToCart(Request $request)
    {

        $validated = $request->validate([
            'product_id' => 'required|exists:products,id',
            'quantity' => 'required|integer|min:1',
        ]);

        $order = Order::create([
            'product_id' => $validated['product_id'],
            'quantity' => $validated['quantity'],
            'status' => 'pending',
            'description' => $request->exampleFormControlTextarea,

        ]);

        return response()->json(['message' => 'Product added to cart successfully!', 'order' => $order]);
    }
    public function save(Request $request)
    {
        $validated = $request->validate([
            'product_id' => 'required|exists:products,id',
            'quantity' => 'required|integer|min:1',
        ]);

        // Save the product to the cart table
        Order::create([
            'product_id' => $validated['product_id'],
            'quantity' => $validated['quantity'],
        ]);

        return response()->json(['message' => 'Product added to cart successfully!']);
    }
    public function deleteOrder($id)
    {
        $order = Order::findOrFail($id);
        if ($order->status !== 'pending') {
            return redirect()->route('cart.modal')->with('error', 'Only pending orders can be deleted.');
        }
        $order->delete();
        return redirect()->back()->with('success', 'Order deleted successfully.');
    }

    public function checkout()
    {

        return view('partials.checkout');
    }
    public function store(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'first_name' => 'required|string|max:255',
            'last_name' => 'required|string|max:255',
            'address' => 'required|string|max:255',
            'city' => 'required|string|max:255',
            'postal_code' => 'required|string|max:10',
            'phone' => 'required|string|max:15',
            'country' => 'required|string|max:255',
            'payment_method' => 'required|string',
        ]);
        dd($request);

        $data =  Checkout::create($request->all());
        dd($data);
        return redirect()->back()->with('success', 'Checkout data saved successfully!');
    }
}
