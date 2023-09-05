@extends('admin.layouts.base')

@section('content')
    <h1>Apartment Messages</h1>
    <div class="d-flex flex-wrap">
        @foreach($messages as $message)
            <div class="card" style="width: 18rem;">
                <div class="card-body">
                    <h4 class="card-title">{{ $message->guest_name }}</h4>
                    <h5 class="card-text">{{ $message->guest_email }}</h5>
                    <p class="card-body">{{ $message->message }}</p>
                </div>
            </div>
        @endforeach
    </div>
@endsection
