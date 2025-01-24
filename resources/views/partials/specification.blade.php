@extends('layout.master')
@section('content')

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cart Page</title>
    <link rel="stylesheet" href="{{ asset('/assets/css/product.css') }}">
    <meta name="csrf-token" content="{{ csrf_token() }}">
</head>

<body>
    <div class="product-container row mx-auto">
        <div class="col-md-5 product-image">
            <img src="{{ asset($product->image_url) }}" alt="bulb">
        </div>
        <div class="col-md-7 product-details">
            <h1 class="product-title">{{ $product->product_model }}</h1>
            <p class="quintity">1 Year Warranty</p>
            <div class="order-wrapper">
                <a href="/contact-us" class="bulk-order">Bulk Order</a>
            </div>
            <div class="col-md-12">
                <div class="btn-wrapper mt-4">
                    <div class="dropdown">
                        <button class="btn dropdown-spec dropdown-toggle" type="button" id="specificationsDropdown"
                            data-bs-toggle="dropdown" aria-expanded="false">
                            Color Temperature
                        </button>
                        <ul class="dropdown-menu" aria-labelledby="specificationsDropdown">
                            <li><a class="dropdown-item dropdown-item-specifications" href="#" data-value="3000K">3000K</a></li>
                            <li><a class="dropdown-item dropdown-item-specifications" href="#" data-value="4000K">4000K</a></li>
                            <li><a class="dropdown-item dropdown-item-specifications" href="#" data-value="6500K">6500K</a></li>
                        </ul>
                    </div>
                    <div class="d-flex">
                        <div class="dropdown">
                            <button class="btn dropdown-spec dropdown-toggle" type="button" id="cardTypeDropdown"
                                data-bs-toggle="dropdown" aria-expanded="false">
                                Cap Type
                            </button>
                            <ul class="dropdown-menu" aria-labelledby="cardTypeDropdown">
                                <li><a class="dropdown-item dropdown-item-cap" href="#" data-value="B22">B22</a></li>
                                <li><a class="dropdown-item dropdown-item-cap" href="#" data-value="E27">E27</a></li>
                            </ul>
                        </div>
                        <div class="form-group description">
                            <label for="exampleFormControlTextarea1" class="label">Description</label>
                            <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                        </div>
                    </div>
                </div>
            </div>
            <div class="main-wrapper">
                <div>
                    <p class="quantity mt-4">Quantity</p>
                    <div class="input-group" style="max-width: 150px;">
                        <button class="btn btn-outline-secondary" type="button" id="button-decrement">-</button>
                        <input type="text" class="form-control text-center" value="1" id="quantity">
                        <button class="btn btn-outline-secondary" type="button" id="button-increment">+</button>
                    </div>
                </div>
            </div>
            <div class="mt-4">
                <button class="cart" id="add-to-cart" data-product-id="{{ $product->id }}">Add to Cart</button>
            </div>
            <div class="specification-wrapper">
                <p class="quintity">Specifications</p>
                <table class="table table-bordered">
                    <thead class="table-header">
                        <tr>
                            <th>Model</th>
                            <th>Wattage</th>
                            <th>Initial Lumens</th>
                            <th>Stable Lumens</th>
                            <th>RA</th>
                            <th>Beam Angle</th>
                            <th>Life</th>
                            <th>Lamp Size H1</th>
                            <th>Lamp Size H2</th>
                            <th>Lamp Size D</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($specifications as $product)
                        <tr>
                            <td>{{ $product->type }}</td>
                            <td>{{ $product->wattage }}</td>
                            <td>{{ $product->initial_lumen }}</td>
                            <td>{{ $product->stable_lumen }}</td>
                            <td>{{ $product->ra }}</td>
                            <td>{{ $product->beam_angle }}</td>
                            <td>{{ $product->guarantee }}</td>
                            <td>{{ $product->lamp_size_h1 }}</td>
                            <td>{{ $product->lamp_size_h2 }}</td>
                            <td>{{ $product->lamp_size_d }}</td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <div class="container mt-4">
        <div class="custom-card-slider">
            <div class="custom-card-wrapper">
                @foreach ($specifications as $product)
                <div class="custom-card custom-card-product" data-product-id="{{ $product->id }}">
                    <img src="{{ asset('storage/images/products/' . $product->image_url) }}" alt="Product Image">
                    <h5>{{ $product->type }}</h5>
                </div>
                @endforeach
            </div>
        </div>
    </div>

</body>
@endsection

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
<script>
    document.addEventListener('DOMContentLoaded', function() {
        const decrementButton = document.getElementById('button-decrement');
        const incrementButton = document.getElementById('button-increment');
        const quantityInput = document.getElementById('quantity');
        const exampleFormControlTextarea1 = document.getElementById('exampleFormControlTextarea1');
        const addToCartBtn = document.getElementById('add-to-cart');
        const cards = document.querySelectorAll('.custom-card-product');

        incrementButton.addEventListener('click', () => {
            let currentValue = parseInt(quantityInput.value);
            quantityInput.value = currentValue + 1;
        });
        decrementButton.addEventListener('click', () => {
            let currentValue = parseInt(quantityInput.value);
            if (currentValue > 1) {
                quantityInput.value = currentValue - 1;
            }
        });

        let selectedValuespecifications = '';
        let selectedValuecap = '';
        document.querySelectorAll('.dropdown-item-specifications').forEach(item => {
            item.addEventListener('click', function(event) {
                selectedValuespecifications = event.target.getAttribute('data-value');
                document.getElementById('specificationsDropdown').textContent = selectedValuespecifications;
            });
        });

        document.querySelectorAll('.dropdown-item-cap').forEach(item => {
            item.addEventListener('click', function(event) {
                selectedValuecap = event.target.getAttribute('data-value');
                document.getElementById('cardTypeDropdown').textContent = selectedValuecap;
            });
        });

        if (addToCartBtn) {
            addToCartBtn.addEventListener('click', () => {
                const productId = addToCartBtn.getAttribute('data-product-id');
                const quantity = quantityInput ? quantityInput.value : 1;
                const exampleFormControlTextarea = exampleFormControlTextarea1 ? exampleFormControlTextarea1.value : '';
                fetch('/cart/add', {
                        method: 'POST',
                        headers: {
                            'Content-Type': 'application/json',
                            'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute('content'),
                        },

                        body: JSON.stringify({
                            product_id: productId,
                            quantity: quantity,
                            description: exampleFormControlTextarea,
                            specifications_type: selectedValuespecifications,
                            cap_type: selectedValuecap
                        }),
                    })
                    .then(response => {
                        if (!response.ok) {
                            return Promise.reject('Failed to add item to the cart.');
                        }
                        return response.json();
                    })
                    .then(data => {
                        alert(data.message);
                        window.location.reload();
                    })
                    .catch(error => {
                        console.error('Error:', error);
                        alert('There was an error adding the product to your cart. Please try again later.');
                    });
            });
        }

        cards.forEach(card => {
            card.addEventListener('click', () => {
                const productId = card.getAttribute('data-product-id');

                fetch('/cart/save', {
                        method: 'POST',
                        headers: {
                            'Content-Type': 'application/json',
                            'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute('content'),
                        },
                        body: JSON.stringify({
                            product_id: productId,
                            quantity: 1
                        }),
                    })
                    .then(response => response.json())
                    .then(data => {
                        alert(data.message); // Show success message
                    })
                    .catch(error => {
                        console.error('Error:', error);
                    });
            });
        });
    });
</script>