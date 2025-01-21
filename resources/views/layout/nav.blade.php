<!-- =============================================
=          Header Start        =
=============================================  -->
<!-- Bootstrap 5 CSS -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"></script>
<script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>


<style>
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
                                {{-- <h1 class="text-white">QH</h1> --}}
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
                                <!-- Search Bar -->
                                <div class="search-bar">
                                    <input type="text" id="search-input" placeholder="Search..." onkeyup="searchProducts()">
                                    <div id="search-results" class="dropdown-menu" style="display: none;"></div>
                                </div>
                                @php
                                $pendingOrders = \App\Models\Order::where('status', 'pending')->get();

                                @endphp
                                <!-- Cart Icon -->
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
</section>
<script>
    function searchProducts() {
        var query = document.getElementById('search-input').value;

        if (query.length > 2) { // Minimum 3 characters hone par hi search start ho
            fetch(`/search?query=${query}`)
                .then(response => response.json())
                .then(data => {
                    var resultsContainer = document.getElementById('search-results');
                    resultsContainer.innerHTML = ''; // Clear previous results
                    if (data.length > 0) {
                        data.forEach(product => {
                            var productItem = document.createElement('a');
                            productItem.href = `/product/product-list/${product.id}`; // Product detail page link
                            productItem.classList.add('dropdown-item');
                            productItem.innerText = product.product_model; // Assuming product name is 'name'
                            resultsContainer.appendChild(productItem);
                        });
                        resultsContainer.style.display = 'block'; // Show the dropdown
                    } else {
                        resultsContainer.style.display = 'none'; // Hide if no results
                    }
                })
                .catch(error => console.error('Error fetching search results:', error));
        } else {
            document.getElementById('search-results').style.display = 'none'; // Hide dropdown if input is too short
        }
    }
</script>

<!-- =============================================
=           Header End         =
=============================================  -->