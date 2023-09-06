@extends('admin.layouts.base')

@vite(['resources/scss/payment-page.scss'])

@section('content')

    <div class="container">
        <div id="dropin-container"></div>
        <button id="submit-button" class="button button--small button--green">Purchase</button>
    </div>

    <script src="https://js.braintreegateway.com/web/dropin/1.40.2/js/dropin.js"></script>
    <script>
        let button = document.querySelector('#submit-button');

        braintree.dropin.create({
            authorization: 'sandbox_g42y39zw_348pk9cgf3bgyw2b',
            selector: '#dropin-container'
        }, function (err, instance) {
            button.addEventListener('click', function () {
                instance.requestPaymentMethod(function (err, payload) {
                    // Submit payload.nonce to your server
                });
            })
        });
    </script>
@endsection
