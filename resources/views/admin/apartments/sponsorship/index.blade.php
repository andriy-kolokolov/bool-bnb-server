@extends('admin.layouts.base')
@section('content')
    <div class="body">
        <h1 class="text-accent">pricing</h1>

        <div class="plans">

            @foreach($availableSponsorships as $sponsorship)

                <div class="plan @if($sponsorship->level === 'Basic') plan--light @endif
                    @if($sponsorship->level === 'Premium') plan--accent @endif
                    @if($sponsorship->level === 'Deluxe') plan--top @endif">
                    <h2 class="plan-title">{{ $sponsorship->level }}</h2>

                    <p class="plan-price">{{ $sponsorship->price }}</p>

                    <p class="space"></p>

                    <p class="plan-price"><span>For {{ $sponsorship->duration }}</span>
                    </p>

                    <p class="space"></p>

                    <a href="#" class="btn-sponsor">Buy Now</a>
                </div>
                
            @endforeach

        </div>
        <div class="d-flex gap-2">
            <a class="btn btn-secondary" href="{{ route('admin.apartments.index') }}"> Back</a>
        </div>

    </div>
@endsection
