<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Checkout Page</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- icons link -->
    <style>
        body {
            background-color: #f8f9fa;
        }

        .header {
            background-color: #ffffff;
            padding: 1rem 2rem;
            border-bottom: 1px solid #ddd;
            display: flex;
            align-items: center;
            justify-content: space-around;
        }

        .header img {
            height: 40px;
        }

        .checkout-container {
            max-width: 1400px;
            margin: 2rem auto;
            gap: 1rem;
        }

        .left-column {
            background-color: #ffffff;
            padding: 2rem;
            border-radius: 0.5rem;
            /* box-shadow: 0 0 10px rgba(0, 0, 0, 0.1); */
        }

        .right-column {
            background-color: #f5f5f5;
            padding: 1.5rem;
            flex: 1;
            border-radius: 0.5rem;
            /* box-shadow: 0 0 10px rgba(0, 0, 0, 0.1); */
        }

        .form-label {
            font-weight: bold;
        }

        .total {
            font-size: 1.25rem;
            font-weight: bold;
        }

        .collapse {
            border: 1px solid hsl(0, 0%, 87%);
            background-color: hsl(0, 0%, 97%);
            padding: 10px 20px;
            font-size: 14px;
            font-weight: 400;
            text-align: center;

        }

        .btn-primary {
            width: 100%;
        }

        .contact-wrapper {
            display: flex;
            align-items: center;
            justify-content: space-between;
        }

        .contact-text {
            font-size: 25px;
            font-weight: 600;
        }

        .btn-link {
            font-size: 16px;
            font-weight: 500;
            color: #143A84;
        }

        .form-control {
            height: 48px;
            font-size: 14px;
            font-weight: 400;
        }

        .form-control:focus,
        .form-select:focus {
            box-shadow: none;
            /* Remove the shadow */
            outline: none;
            /* Remove the default outline */
        }

        .form-select {
            height: 48px;
            font-size: 14px;
            font-weight: 400;
        }

        .form-check-input {
            width: 20px;
            height: 20px;
            border-radius: 4px;

        }

        .form-check-input:focus {
            box-shadow: none;
            /* Remove the shadow */
            outline: none;
            /* Remove the default outline */
            background-color: #143A84;
        }

        .form-check-label {
            font-size: 14px;
            font-weight: 500;
            margin-left: 8px;
        }

        .shiping-div {
            border: 1px solid hsl(204, 77%, 39%);
            background-color: hsl(218, 100%, 97%);
            border-radius: 4px;
            height: 48px;
        }

        .shiping-text {
            display: flex;
            align-items: center;
            padding: 10px 11px;
            justify-content: space-between;
        }

        .home {
            font-size: 16px;
            font-weight: 400;
            margin-bottom: 0;
        }

        .free {
            font-size: 16px;
            font-weight: 700;
            margin-bottom: 0;
        }

        .payment-div {
            border: 1px solid hsl(0, 0%, 87%);
            border-radius: 4px;
            height: 48px;
            padding: 10px 30px;
            margin: 0;
        }

        .payment-div:hover {
            background-color: hsl(218, 100%, 97%);
            border: 1px solid hsl(204, 77%, 39%);
        }

        .form-check-input:focus {
            background-color: #143A84;
        }

        .form-check-input:active {
            background-color: #143A84;
        }

        .pay-btn {
            width: 100%;
            background-color: #143A84;
            color: white;
            padding: 12px 20px;
            font-size: 20px;
            font-weight: 600;
        }

        .pay-btn:hover {
            background-color: #143A84;
            color: white;
        }

        .bulb-img {
            width: 55px;
            height: 70px;

        }

        .bulb-wraper {
            display: flex;
            align-items: center;
            gap: 10px;

        }
    </style>
</head>

<body>
    <!-- Header -->
    <div class="header">
        <div>
            <img src="/assets/images/QH-logo-remove.png" alt="Logo">
        </div>
        <div>
            <img src="./images/cart.webp" alt="">
        </div>
    </div>

    <!-- Main Content -->
    <div class="checkout-container">
        <di class="row">
            <!-- Left Column -->
            <div class="left-column ">
                <div class="contact-wrapper">
                    <h2 class="contact-text">Contact</h2>
                    <button type="button" class="btn btn-link">Log in</button>
                </div>
                <form action="{{ route('checkout.store') }}" method="POST">
                    @csrf
                    <div class="mb-3 mt-3">
                        <input type="text" class="form-control" id="email" name="email" placeholder="Enter a valid email or phone number">
                    </div>
                    <div class="mb-4">
                        <div class="form-check">
                            <input type="checkbox" class="form-check-input" id="emailOffers">
                            <label class="form-check-label" for="emailOffers">Email me with news and offers</label>
                        </div>
                    </div>
                    <h2 class="contact-text">Delivery</h2>
                    <div class="mb-3">
                        <select class="form-select" id="city" name="city" required>
                            <option value="" selected disabled>Select City</option>
                            <option value="Faisalabad">Faisalabad</option>
                            <option value="Islamabad">Islamabad</option>
                            <option value="Karachi">Karachi</option>
                        </select>
                    </div>
                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <input type="text" class="form-control" id="first_name" name="first_name" placeholder="Enter first name">
                        </div>
                        <div class="col-md-6 mb-3">
                            <input type="text" class="form-control" id="last_name" name="last_name" placeholder="Enter last name">
                        </div>
                    </div>
                    <div class="mb-3">
                        <input type="text" class="form-control" id="address" name="address" placeholder="Enter an address">
                    </div>
                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <input type="text" class="form-control" id="postalCode" name="postal_code" placeholder="Enter postal code">
                        </div>
                        <div class=" col-md-6 mb-3">
                            <input type="text" class="form-control" id="phone" name="phone" placeholder="Enter a phone number">
                        </div>
                    </div>
                    <div class="form-check mb-4">
                        <input type="checkbox" class="form-check-input" id="emailOffers">
                        <label class="form-check-label" for="emailOffers">Save this information for next time</label>
                    </div>
                    <h2 class="contact-text mb-3">Shipping Method</h2>
                    <div class="shiping-div mb-4">
                        <div class="shiping-text">
                            <p class="home">Home Delivery</p>
                            <p class="free">FREE</p>
                        </div>
                    </div>
                    <h2 class="contact-text">Payment</h2>
                    <p>All transactions are secure and encrypted.</p>
                    <div class="form-check payment-div">
                        <input class="form-check-input" type="radio" name="payment_method" id="payfast" data-bs-toggle="collapse" data-bs-target="#payfastCollapse" value="Bank">
                        <label class="form-check-label" for="payfast">
                            PAYFAST (via Debit/Credit/Wallet/Bank Account)
                        </label>
                    </div>
                    <div id="payfastCollapse" class="collapse">
                        <p>
                            After clicking “Pay now”, you will be redirected to PAYFAST(Pay via Debit/Credit/Wallet/Bank Account) to complete your purchase securely.
                        </p>
                    </div>
                    <div class="form-check payment-div">
                        <input class="form-check-input" type="radio" name="payment_method" id="cod" data-bs-toggle="collapse" data-bs-target="#codCollapse" value="cash">
                        <label class="form-check-label" for="cod">
                            Cash on Delivery (COD)
                        </label>
                    </div>

                    <!-- <h2 class="contact-text mt-4">Billing Address</h2>
                    <div class="form-check payment-div">
                        <input class="form-check-input" type="radio" name="billingAddress" id="sameAsShipping" checked>
                        <label class="form-check-label" for="sameAsShipping">Same as shipping address</label>
                    </div>
                    <div class="form-check payment-div mt-2">
                        <input class="form-check-input" type="radio" name="billingAddress" id="differentBilling" data-bs-toggle="collapse" data-bs-target="#billingCollapse">
                        <label class="form-check-label" for="differentBilling">Use a different billing address</label>
                    </div>
                    <div id="billingCollapse" class="collapse">
                        <div class="row mt-3">
                            <div class="col-md-6 mb-3">
                                <input type="text" class="form-control" id="billingFirstName" placeholder="Enter first name">
                            </div>
                            <div class="col-md-6 mb-3">
                                <input type="text" class="form-control" id="billingLastName" placeholder="Enter last name">
                            </div>
                        </div>
                        <div class="mb-3">
                            <input type="text" class="form-control" id="billingAddress" placeholder="Enter an address">
                        </div>
                        <div class="row">
                            <div class="col-md-6 mb-3">
                                <input type="text" class="form-control" id="billingCity" placeholder="Enter city">
                            </div>
                            <div class="col-md-6 mb-3">
                                <input type="text" class="form-control" id="billingPostalCode" placeholder="Enter postal code">
                            </div>
                            <div class="mb-3">
                                <input type="text" class="form-control" id="phone" placeholder="phone (opetional)">
                            </div>
                        </div>
                    </div> -->
                    <button class="btn pay-btn mt-4" type="submit">Pay Now</button>
                </form>
            </div>

    </div>

    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>