@extends('layout.master')
@section('content')
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Shopping Cart</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">

    <style>
        body {
            font-family: Arial, sans-serif;
        }

        .cart-container {
            padding: 2rem;
            max-width: 1500px;
        }

        .cart-header {
            text-align: center;
            font-size: 1.5rem;
            font-weight: bold;
            margin-bottom: 2rem;
        }

        .cart-item {
            display: flex;
            align-items: center;
            justify-content: space-between;
            margin-bottom: 1.5rem;
            border: 1px solid #eaeaea;
        }

        .cart-item img {
            width: 100px;
            height: auto;
        }

        .cart-details {
            flex: 1;
            margin-left: 1rem;
        }

        .cart-actions {
            display: flex;
            align-items: center;
        }

        .quantity-selector {
            display: flex;
            align-items: center;
            border: 1px solid rgba(0, 0, 0, .5);
            border-radius: 5px;
            width: 130px;
            gap: 12px;
            height: 34px;
            padding: 12px 12px;
        }

        .quantity-selector button {
            background-color: white;
            border: none;
            /* padding: 0.5rem; */
            cursor: pointer;
        }

        .quantity-selector input {
            width: 50px;
            text-align: center;
            border: none;
        }

        .subtotal {
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .cart-buttons {
            display: flex;
            flex-direction: column;
            gap: 16px;
            /* margin-top: 1.5rem; */
        }

        .heading-content {
            font-size: 18px;
            font-weight: 600;
        }

        .moadl-number {
            font-size: 14px;
            font-weight: 400;
            color: #8c8c8c;
            margin-bottom: 0;
        }

        .size {
            font-size: 14px;
            font-weight: 400;
            color: #8c8c8c;
        }

        .item-total {
            font-size: 16px;
            font-weight: 600;
        }

        .order-note {
            font-size: 16px;
            font-weight: 600;
            margin-bottom: 5px;
        }

        .instruction {
            text-transform: uppercase;
            color: #8c8c8c;
            font-size: 13px;
            font-weight: 400;
            border-bottom: 2px solid #d3d3d3;
            padding-bottom: 15px;
        }

        .sub {
            font-size: 18px;
            font-weight: 600;
        }

        .total {
            font-size: 18px;
            font-weight: 600;
        }

        .text-muted {
            font-size: 15px;
            font-weight: 500;
        }

        .shopping-btn {
            padding: 10px;
            background-color: black;
            color: white;
            font-size: 18px;
            font-weight: 400;
        }

        .shopping-btn:hover {
            background-color: black;
            color: white;
        }

        .order-notes {
            box-shadow: none;
            outline: none;
        }

        .remove-section {
            display: flex;
            flex-direction: column;
            gap: 18px;
            margin-right: 45px;
        }

        .price {
            font-size: 18px;
            font-weight: 700;

        }
    </style>
</head>

<body>
    <div class="container-fluid cart-container">
        <div class="cart-header">SHOPPING CART</div>
        <div class="row" style="gap: 10px;">
            @foreach ( $pendingOrders as $order )

            <div class=" col-md-7 cart-item">
                <img src="{{ asset('storage/images/products/' . $order->image_url) }}" alt="Product Image">
                <div class="cart-details">
                    <h2 class="heading-content">{{ $order->product_model}}</h2>
                    <p class="size">Status {{ $order->status }}</p>

                    <div class="cart-actions mb-3">
                        <div class="quantity-selector">
                            <button>-</button>
                            <input type="text" value="{{ $order->quantity}}">
                            <button>+</button>
                        </div>
                    </div>

                    <p class="item-total">Item Total</p>
                </div>

                <div class="remove-section">
                    <div class="price">Rs. 14,999</div>
                    <i class="fa-solid fa-trash-can text-center"></i>
                </div>
            </div>
            @endforeach
            <div class="col-md-4">
                <label for="" class="order-note">order note</label>
                <textarea class="form-control order-notes" rows="4" placeholder=""></textarea>
                <p class="instruction mt-2">please leave special instructions above</p>
                <div class="subtotal">
                    <p class="sub">Subtotal:</p>
                    <p class="total">Rs. 14,999</p>
                </div>
                <div class="text-muted mb-4">Taxes and shipping calculated at checkout</div>
                <div class="cart-buttons">
                    <a href="/products" class="btn shopping-btn">Continue Shopping</a>
                    <a href="/checkout" class="btn shopping-btn">Checkout</a>
                </div>
            </div>
        </div>

    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
@endsection