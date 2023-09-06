<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Apartment;
use Braintree\Gateway;
use Illuminate\Http\Request;

class PaymentController extends Controller {

    public function processPayment(Request $request, Apartment $apartment) {
        $gateway = new Gateway([
            'environment' => 'sandbox',
            'merchantId' => '73nbpwd9qxc2rzsm',
            'publicKey' => 'cjwzqtj3ps8vmy95',
            'privateKey' => '4d5ab429d2c409a2ec43d587fe879af4',
        ]);
        $paymentAmount = $request->all()['payment_amount'];
        $result = $gateway->transaction()->sale([
            'amount' => $paymentAmount,
            'paymentMethodNonce' => 'fake-valid-nonce',
            'options' => [
                'submitForSettlement' => true,
            ],
        ]);
        if ($result->success) {

            return redirect()->route('admin.apartments.index')->with('success', 'Payment was successful.');
        } else {
            // Payment failed
            return redirect()->back()->with('error', 'Payment failed.');
        }
    }
}
