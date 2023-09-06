@extends('admin.layouts.base')

@vite(['resources/scss/payment-page.scss', 'resources/js/payment-page-script.js'])

@section('content')
    <div class="container">
        <div id="dropin-container"></div>
        <button id="add-card-button" class="button button--small button--green">Add Card</button>
    </div>

    <form id="payment-form" method="POST" action="{{ route('admin.processPayment', ['apartment' => $apartment]) }}">
        @csrf
        <input type="hidden" id="payment-method-nonce" name="payment_method_nonce">
        <input id="payment-amount" name="payment_amount" value="{{ $paymentAmount }}">
    </form>

    <button id="submit-payment-button" class="button button--small button--green">PAY</button>

    <script src="https://js.braintreegateway.com/web/dropin/1.40.2/js/dropin.js"></script>
@endsection
