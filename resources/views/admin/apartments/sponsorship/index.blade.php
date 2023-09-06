@extends('admin.layouts.base')
@section('content')
    <div class="body">
        <h1 class="text-accent">pricing</h1>

        <div class="plans">

            @foreach($availableSponsorships as $sponsorship)
                <div class="plan plan--light">
                    <h2 class="plan-title">basic</h2>

                    <p class="plan-price">$2.99</p>

                    <p class="plan-description">
                        Eleifend cursus volutpat risus convallis nam sed
                        quam sollicitudin eget leo at erat cursus justo
                    </p>

                    <a href="#" class="btn-sponsor">Join Now</a>
                </div>
            @endforeach

        </div>

        <a href="#" class="btn-sponsor btn-mb">Get in touch</a>
    </div>
@endsection
