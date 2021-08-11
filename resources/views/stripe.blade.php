@extends('layouts.app')

@section('content')
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <title>Document</title>

    </style>
</head>

<body>
    <!--    <h3>Subscribe</h3> -->
        <div class="container mt-4 bg-dark">
            <div class="pricing card-deck flex-column  flex-md-row my-3">
                <div class="card card-pricing text-center px-3 mb-4"> <span class="h6 w-60 mx-auto px-4 py-1 rounded-bottom bg-primary text-white shadow-sm">Starter</span>
                    <div class="bg-transparent card-header pt-4 border-0">
                        <h1 class="h1 font-weight-normal text-primary text-center mb-0" data-pricing-value="15">$<span class="price">3</span><span class="h6 text-muted ml-2">/ per month</span></h1>
                    </div>
                    <div class="card-body pt-0">
                        <ul class="list-unstyled mb-4">
                            <li>Up to 5 users</li>
                            <li>Basic support</li>
                            <li>Monthly updates</li>
                            <li>Free cancelation</li>
                        </ul>
                        <script src="https://checkout.stripe.com/checkout.js" class="stripe-button" data-key="pk_test_GryUHqXe48kgNc75J2BovmeN" data-amount="1100" data-name="Webcasts" data-description="Subscribe to Awesome Blogs" data-image="https://stripe.com/img/documentation/checkout/marketplace.png" data-label="Subscribe Now" data-email="{{ auth()->check()?auth()->user()->email: null}}" data-panel-label="1 Month" data-locale="auto">
                        </script>
                    </div>
                </div>
                <div class="card card-pricing popular shadow text-center px-3 mb-4"> <span class="h6 w-60 mx-auto px-4 py-1 rounded-bottom bg-primary text-white shadow-sm">Professional</span>
                    <div class="bg-transparent card-header pt-4 border-0">
                        <h1 class="h1 font-weight-normal text-primary text-center mb-0" data-pricing-value="30">$<span class="price">6</span><span class="h6 text-muted ml-2">/ per month</span></h1>
                    </div>
                    <div class="card-body pt-0">
                        <ul class="list-unstyled mb-4">
                            <li>Up to 10 users</li>
                            <li>Email Support support</li>
                            <li>Monthly updates</li>
                            <li>Free cancelation</li>
                        </ul>
                        <script src="https://checkout.stripe.com/checkout.js" class="stripe-button" data-key="pk_test_GryUHqXe48kgNc75J2BovmeN" data-amount="1100" data-name="Webcasts" data-description="Subscribe to Awesome Blogs" data-image="https://stripe.com/img/documentation/checkout/marketplace.png" data-label="Subscribe Now" data-email="{{ auth()->check()?auth()->user()->email: null}}" data-panel-label="3 Months" data-locale="auto">
                        </script>
                    </div>
                </div>
                <div class="card card-pricing text-center px-3 mb-4"> <span class="h6 w-60 mx-auto px-4 py-1 rounded-bottom bg-primary text-white shadow-sm">Business</span>
                    <div class="bg-transparent card-header pt-4 border-0">
                        <h1 class="h1 font-weight-normal text-primary text-center mb-0" data-pricing-value="45">$<span class="price">9</span><span class="h6 text-muted ml-2">/ per month</span></h1>
                    </div>
                    <div class="card-body pt-0">
                        <ul class="list-unstyled mb-4">
                            <li>Up to 15 users</li>
                            <li>Email & phone support</li>
                            <li>Monthly updates</li>
                            <li>Free cancelation</li>
                        </ul>
                        <script src="https://checkout.stripe.com/checkout.js" class="stripe-button" data-key="pk_test_GryUHqXe48kgNc75J2BovmeN" data-amount="1100" data-name="Webcasts" data-description="Subscribe to Awesome Blogs" data-image="https://stripe.com/img/documentation/checkout/marketplace.png" data-label="Subscribe Now" data-email="{{ auth()->check()?auth()->user()->email: null}}" data-panel-label="6 Months" data-locale="auto">
                        </script>
                    </div>
                </div>
                <div class="card card-pricing text-center px-3 mb-4"> <span class="h6 w-60 mx-auto px-4 py-1 rounded-bottom bg-primary text-white shadow-sm">Enterprise</span>
                    <div class="bg-transparent card-header pt-4 border-0">
                        <h1 class="h1 font-weight-normal text-primary text-center mb-0" data-pricing-value="60">$<span class="price">12</span><span class="h6 text-muted ml-2">/ per month</span></h1>
                    </div>
                    <div class="card-body pt-0">
                        <ul class="list-unstyled mb-4">
                            <li>Up to 20 users</li>
                            <li>Basic support</li>
                            <li>Monthly updates</li>
                            <li>Free cancelation</li>
                        </ul>
                        <script src="https://checkout.stripe.com/checkout.js" class="stripe-button" data-key="pk_test_GryUHqXe48kgNc75J2BovmeN" data-amount="1100" data-name="Webcasts" data-description="Subscribe to Awesome Blogs" data-image="https://stripe.com/img/documentation/checkout/marketplace.png" data-label="Subscribe Now" data-email="{{ auth()->check()?auth()->user()->email: null}}" data-panel-label="1 year" data-locale="auto">
                        </script>
                    </div>
                </div>
            </div>
        </div>





</body>

</html>
@endsection