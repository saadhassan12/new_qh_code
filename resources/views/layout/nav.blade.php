<!-- =============================================
=          Header Start        =
=============================================  -->
<!-- Bootstrap 5 CSS -->
<!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"></script>
<script src="https://code.jquery.com/jquery-3.6.4.min.js"></script> -->

<!-- Bootstrap 5 CSS -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"></script>
<script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>

<style>
    .navbar {
        background-color: #f8f9fa;
    }

    .web-link-ul {
        list-style: none;
        margin: 0;
        padding: 5px 8px;
        display: flex;
        gap: 1.5rem;
    }

    .web-links ul li {
        border-bottom: 1px solid;
    }

    .web-link-li {
        position: relative;
    }

    .web-link-li > a {
        text-decoration: none;
        color: #333;
        font-weight: 500;
        padding: 8px 12px;
        transition: color 0.3s ease;
    }

    .web-link-li > a:hover {
        color: #007bff;
    }

    .sub-menu,
    .nested-menu {
        display: none;
        position: absolute;
        left: 13px;
        top: 126%;
        background-color: #fff;
        border: 1px solid #ddd;
        box-shadow: 0 2px 8px rgba(0, 0, 0, 0.1);
        padding: 8px 10px !important;
        z-index: 1000;
        list-style: none;
        min-width: 200px;
    }
  

    .sub-menu li,
    .nested-menu li {
        padding: 5px 0;
    }

    .web-link-li:hover > .sub-menu,
    .sub-menu li:hover > .nested-menu {
        display: block;
    }

    .nested-menu {
        left: 106%;
        top: 0;
    }

    .navbar-toggler {
        border: none;
    }
    /* Responsive Adjustments */
    @media (max-width: 992px) {
        .web-links {
            flex-direction: column;
            align-items: flex-start;
            width: 100%;
        }

        .web-link-ul {
            flex-direction: column;
            width: 100%;
        }

        .navbar-collapse {
            margin-top: 10px;
        }

        .search-bar input {
            width: 100%;
        }

        .web-link-li > a {
            padding: 10px;
        }

        /* Allow multi-dropdown to open independently */
        .web-link-li.dropdown:hover > .sub-menu {
            display: block;
        }

        .cart-icon {
            margin-right: 10px;
        }

        /* Ensure the navbar is hidden when toggled */
        .navbar-collapse.collapse {
            display: none !important;
        }
        
        .navbar-collapse.collapse.show {
            display: block !important;
        }
    }

    @media (max-width: 576px) {
        .web-logo img {
            width: 120px;
        }

        .search-bar input {
            width: 100%;
            padding: 8px;
        }

        .cart-icon i {
            font-size: 1.5rem;
        }

        .cart-count {
            font-size: 12px;
            top: 5px;
            right: 5px;
        }

    }

    .navbar-toggler-icon {
        font-size: 1.5rem;
    }
    .offcanvas-end {
    right: 0;
    width: 300px; /* Adjust the width as needed */
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
            font-size: 14px;
            font-weight: 600;
        }

        .moadl-number {
            font-size: 10px;
            font-weight: 400;
            color: #8c8c8c;
            margin-bottom: 0;
        }

        .size {
            font-size: 14px;
            font-weight: 400;
            color: #8c8c8c;
        }
        .item-total{
            font-size: 14px;
            font-weight: 600;
        }
        .order-note{
            font-size: 16px;
            font-weight: 600;
            margin-bottom: 5px;
        }
        .price{
            font-size: 12px;
            font-weight: 400;
        }
        @media only screen and (max-width: 768px) {
            .heading-content{
                font-size: 14px !important;
                 font-weight: 600;

            }
        }
</style>
<section class="header">
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container">
            <a class="navbar-brand" href="/">
                <img src="/assets/images/QH-logo-remove.png" alt="" style="width: 150px;" class="img-fluid">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarContent" aria-controls="navbarContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarContent">
                <ul class="navbar-nav m-auto web-links gap-3">
                    <li class="web-link-li"><a href="/">Home</a></li>
                    <li class="web-link-li dropdown">
                        <a href="{{ route('products') }}">Products</a>
                        <ul class="sub-menu">
                            <li>
                                <a href="{{ route('consumer') }}">Consumer</a>
                                <ul class="nested-menu">
                                                    @php
                                                    $comsumer_tpye_products = getProductTypes(\App\Models\ProductType::CONSUMER_TYPE);
                                                    $professional_tpye_products= getProductTypes(\App\Models\ProductType::PROFESSIONAL_TYPE);
                                                    @endphp

                                                    @foreach($comsumer_tpye_products as $product)
                                                    <li><a href="{{ route('product-list',['id'=>$product->id])}}">{{ $product->type_name }}</a></li>
                                                    @endforeach
                                                </ul>
                        </li>
                            
                            <li><a href="{{ route('professional') }}">Professional</a>
                            <ul class="nested-menu">
                                                    @foreach($professional_tpye_products as $product)
                                                    <li><a href="{{ route('product-list',['id'=>$product->id]) }}">{{ $product->type_name }}</a></li>
                                                    @endforeach
                                                </ul>
                        </li>
                        </ul>
                    </li>
                    <li class="web-link-li"><a href="{{ route('about.us') }}">About us</a></li>
                    <li class="web-link-li"><a href="{{ route('contact.us') }}">Contact us</a></li>
                    <li class="web-link-li"><a href="{{ route('support') }}">Support</a></li>
                </ul>

                <div class="d-flex align-items-center">
                    <div class="search-bar me-3">
                        <input type="text" id="search-input" placeholder="Search..." onkeyup="searchProducts()">
                        <div id="search-results" class="dropdown-menu" style="display: none;"></div>
                    </div>
                    @php
                    $pendingOrders = \App\Models\Order::where('status', 'pending')->get();
                    @endphp
                    <div class="cart-icon position-relative" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasRight" aria-controls="offcanvasRight">
                        <i class="fas fa-shopping-cart fa-2x"></i>
                        <span class="cart-count badge bg-danger position-absolute">{{ count($pendingOrders) }}</span>
                    </div>
                </div>
            </div>
        </div>
    </nav>
</section>

<!-- Offcanvas Modal -->
<div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasRight" aria-labelledby="offcanvasRightLabel">
  <div class="offcanvas-header">
    <h5 id="offcanvasRightLabel">Product Cart</h5>
    <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
  </div>
  <div class="offcanvas-body">
  <div class="container">
    <div class="row">
    <div class=" col-md-12 cart-item">
                <img src="/assets/images/QH-logo-remove.png" alt="Product Image">
                <div class="cart-details">
                    <h2 class="heading-content mt-3">Product Name</h2>
                    <p class="moadl-number">AO357T-SML-227</p>
                    <p class="size">Size: S</p>
                    <p class="item-total">Item Total</p>
                </div>
                <div class="remove-section">
                    <div class="price">Rs. 14,999</div>
                    <i class="fa-solid fa-trash-can text-center"></i>
                </div>
            </div>
    </div>
  </div>
  </div>
</div>

<!-- Bootstrap JS (ensure it’s included in your project) -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
<!-- Optional: Include this for custom handling of the cart content -->
<script>
    // This will toggle the cart view if needed, and you can extend it to show actual cart items
    const cartIcon = document.querySelector('.cart-icon');
    const offcanvasRight = new bootstrap.Offcanvas(document.getElementById('offcanvasRight'));

    cartIcon.addEventListener('click', function() {
        offcanvasRight.show();
    });
</script>



<!-- Add this just before closing </body> tag -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>

<!-- <style>
    .come-from-modal.right .modal-dialog {
        position: fixed;
        top: 0;
        right: -320px;
        margin: 0;
        height: 100%;
        width: 320px;
        transform: translateX(100%);
        transition: transform 0.3s ease-in-out;
    }
    .come-from-modal.right.show .modal-dialog {
        transform: translateX(0);
    }
</style>


<section class="header">
    <div class="container-fluid">
        <div class="row align-items-start">
            <div class="col-md-12 p-0">
                <div class="header-menu d-flex" id="querydata">
                    <div class="container d-flex justify-content-between">
                        <div class="web-logo">
                            <a href="/">
                                <img src="/assets/images/QH-logo-remove.png" alt="" style="width:150px; padding: 15px 5px;" class="img-fluid">
                            </a>
                        </div>
                        <div class="website-menu row gx-0 px-4 py-3 w-75">
                            <div class="web-links col-md-8">
                                <ul class="web-link-ul d-flex align-items-center justify-content-start mb-0 mt-2 gap-4">
                                    <li class="web-link-li">
                                        <a href="/">Home</a>
                                    </li>
                                    <li class="web-link-li">
                                        <a href="{{ route('products') }}">Products</a>
                                        <ul class="sub-menu">
                                            <li>
                                                <a href="{{ route('consumer') }}">Consumer</a>
                                                <ul class="nested-menu">
                                                    @php
                                                    $comsumer_tpye_products = getProductTypes(\App\Models\ProductType::CONSUMER_TYPE);
                                                    $professional_tpye_products= getProductTypes(\App\Models\ProductType::PROFESSIONAL_TYPE);
                                                    @endphp

                                                    @foreach($comsumer_tpye_products as $product)
                                                    <li><a href="{{ route('product-list',['id'=>$product->id])}}">{{ $product->type_name }}</a></li>
                                                    @endforeach
                                                </ul>
                                            </li>
                                            <li>
                                                <a href="{{ route('professional',)}}">Professional</a>
                                                <ul class="nested-menu">
                                                    @foreach($professional_tpye_products as $product)
                                                    <li><a href="{{ route('product-list',['id'=>$product->id]) }}">{{ $product->type_name }}</a></li>
                                                    @endforeach
                                                </ul>
                                            </li>
                                        </ul>
                                    </li>
                                    </li>
                                    <li class="web-link-li">
                                        <a href="{{ route('about.us') }}">About us</a>
                                    </li>
                                    <li class="web-link-li">
                                        <a href="{{ route('contact.us') }}">Contact us</a>
                                    </li>
                                    <li class="web-link-li">
                                        <a href="{{ route('support') }}">Support</a>
                                    </li>
                                </ul>
                            </div>
                            <div class="header-right d-flex align-items-center col-md-4">
                         
                                <div class="search-bar">
                                    <input type="text" id="search-input" placeholder="Search..." onkeyup="searchProducts()">
                                    <div id="search-results" class="dropdown-menu" style="display: none;"></div>
                                </div>
                                @php
                                $pendingOrders = \App\Models\Order::where('status', 'pending')->get();

                                @endphp
                            
                                <div class="cart-icon" style="position: relative; cursor: pointer;margin-right: -133px;" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasRight" aria-controls="offcanvasRight">
                                    <i class="fas fa-shopping-cart fa-2x"></i>
                                    <span class="cart-count badge bg-danger" style="position: absolute;">{{count($pendingOrders)}}</span>
                                </div>
                                <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasRight" aria-labelledby="offcanvasRightLabel">
                                    <div class="offcanvas-header">
                                        <h5 id="offcanvasRightLabel">Cart page</h5>
                                        <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                                    </div>
                                    <div class="offcanvas-body">
                                        @if($pendingOrders->isEmpty())
                                        <p>No pending orders found.</p>
                                        @else
                                        <div class="row">
                                            @foreach($pendingOrders as $order)
                                            <div class="col-md-12 mb-3">
                                                <div class="card">
                                                    <div class="card-body">
                                                        <h5 class="card-title">Order #{{ $order->id }}</h5>
                                                        <p class="card-text">
                                                            <strong>Product Name:</strong> {{ $order->product_id }}<br>
                                                            <strong>Status:</strong> {{ ucfirst($order->status) }}
                                                        </p>
                                                        <form action="{{ route('order.delete', $order->id) }}" method="POST" style="display:inline;">
                                                            @csrf
                                                            @method('DELETE')
                                                            <button type="submit" class="btn btn-sm btn-danger">Delete Order</button>
                                                        </form>
                                                    </div>
                                                </div>
                                            </div>
                                            @endforeach
                                        </div>

                                        @endif
                                        <a type="button" class="btn btn-primary align-items-center" href="/checkout">Check Out Page</a>

                                    </div>
            
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="web-search"></div>
                </div>
                <a href="javascript:void(0)" class="navigation-toggle transition-xs soft-hide">
                    <i class="fa fa-bars text-dark"></i>
                </a>
            </div>
        </div>
    </div>
    </div>
</section> -->


<!-- <script>
    function searchProducts() {
        var query = document.getElementById('search-input').value;

        if (query.length > 2) { 
            fetch(`/search?query=${query}`)
                .then(response => response.json())
                .then(data => {
                    var resultsContainer = document.getElementById('search-results');
                    resultsContainer.innerHTML = ''; 
                    if (data.length > 0) {
                        data.forEach(product => {
                            var productItem = document.createElement('a');
                            productItem.href = `/product/product-list/${product.id}`;
                            productItem.classList.add('dropdown-item');
                            productItem.innerText = product.product_model; 
                            resultsContainer.appendChild(productItem);
                        });
                        resultsContainer.style.display = 'block'; 
                    } else {
                        resultsContainer.style.display = 'none'; 
                    }
                })
                .catch(error => console.error('Error fetching search results:', error));
        } else {
            document.getElementById('search-results').style.display = 'none'; 
        }
    }
</script> -->

<!-- =============================================
=           Header End         =
=============================================  -->