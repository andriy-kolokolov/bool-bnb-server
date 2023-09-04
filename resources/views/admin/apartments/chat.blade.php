@extends('admin.layouts.base')

@section('content')
  <h1>Apartment Messages</h1>
  <div class="d-flex flex-wrap">
    @foreach($messages as $message)
      <div class="card" style="width: 18rem;">
        <div class="card-body">
          <h4 class="card-title">{{ $message->guest_email }}</h4>
          <p class="card-text">{{ $message->message }}</p>
        </div>
      </div>
    @endforeach
  </div>
@endsection