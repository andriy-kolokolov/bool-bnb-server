@extends('admin.layouts.base')

@section('content')
    @vite(['resources/js/message-icon.js'])
    <div class="h-100 message-container d-flex gap-3 flex-column align-items-center justify-content-start">
        <h1 class="pt-3 pb-3 text-center">Apartment Messages</h1>
        <div class="mx-auto d-flex gap-3 flex-wrap justify-content-center">
            @foreach($messages as $message)
                <div class="card ms-message-card" style="width: 18rem;">
                    <div class="card-body">
                        <h4 class="card-title">{{ $message->guest_name }}</h4>
                        <h5 class="card-text">{{ $message->guest_email }}</h5>
                        <p class="card-body">{{ $message->message }}</p>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection
