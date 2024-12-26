<!-- =============================================
=          Header Start        =
=============================================  -->
<section class="header">
        <div class="container-fluid p-0">
            <div class="row align-items-start">
                <div class="col-md-12 p-0">
                {{-- <div class="web-logo container p-0 mt-3">
                    <a href="/">
                        <img src="/assets/images/logo.png" alt="" style="width:150px;" class="img-fluid">
                    </a>
                </div> --}}
                <div class="header-menu d-flex" id="querydata">

                    <div class="container d-flex justify-content-between">
                        <div class="web-logo">
                            <a href="/">
                                {{-- <h1 class="text-white">QH</h1> --}}
                                <img src="/assets/images/QH-logo-remove.png" alt="" style="width:150px; padding: 15px 5px;" class="img-fluid">
                            </a>
                        </div>
                        <div class="website-menu row gx-0 px-4 py-3 w-75">
                            <div class="web-links">
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
                                    <div class="col-md-3 header-right">
                                       <div class="col-md-3 header-right">
                                            <div class="search-bar">
                                                <input type="text" id="search-input" placeholder="Search..." onkeyup="searchProducts()">
                                                <div id="search-results" class="dropdown-menu" style="display: none;"></div>
                                            </div>
                                        </div>
                                    </div>
                                </ul>
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

        if (query.length > 2) {  // Minimum 3 characters hone par hi search start ho
            fetch(`/search?query=${query}`)
                .then(response => response.json())
                .then(data => {
                    var resultsContainer = document.getElementById('search-results');
                    resultsContainer.innerHTML = '';  // Clear previous results
                    if (data.length > 0) {
                        data.forEach(product => {
                            var productItem = document.createElement('a');
                            productItem.href = `/product/product-list/${product.id}`;  // Product detail page link
                            productItem.classList.add('dropdown-item');
                            productItem.innerText = product.product_model;  // Assuming product name is 'name'
                            resultsContainer.appendChild(productItem);
                        });
                        resultsContainer.style.display = 'block';  // Show the dropdown
                    } else {
                        resultsContainer.style.display = 'none';  // Hide if no results
                    }
                })
                .catch(error => console.error('Error fetching search results:', error));
        } else {
            document.getElementById('search-results').style.display = 'none';  // Hide dropdown if input is too short
        }
    }
</script>

<!-- =============================================
=           Header End         =
=============================================  -->
