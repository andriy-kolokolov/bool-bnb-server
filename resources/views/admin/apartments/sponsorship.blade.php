@extends('admin.layouts.base')

@section('content')
    <div class="container mt-3">
        <h2>Sponsorship for this Apartment</h2>
            <div class="d-flex gap-1 mt-3">
                <a class="btn btn-secondary" href="{{ route('admin.apartments.index') }}">Back</a>
            </div>
    </div>
@endsection
