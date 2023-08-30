@extends('admin.layouts.base')

@section('content')
    <div class="container">
        <h2>Create Apartment</h2>
        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        <form action="{{ route('admin.apartments.store') }}" method="POST" enctype="multipart/form-data">
            @csrf

            <div class="form-group">
                <label for="name">Name:</label>
                <input type="text" class="form-control" id="name" name="name" required>
            </div>

            <div class="form-group">
                <label for="rooms">Rooms:</label>
                <input type="number" class="form-control" id="rooms" name="rooms" required>
            </div>

            <div class="form-group">
                <label for="beds">Beds:</label>
                <input type="number" class="form-control" id="beds" name="beds" required>
            </div>

            <div class="form-group">
                <label>Services:</label><br>
                @foreach ($services as $service)
                    <label class="checkbox-inline">
                        <input type="checkbox" name="services[]" value="{{ $service['id'] }}">
                        <i class="{{ $service['icon'] }}"></i> {{ $service['name'] }}
                    </label><br>
                @endforeach
            </div>

            <div class="form-group">
                <label for="bathrooms">Bathrooms:</label>
                <input type="number" class="form-control" id="bathrooms" name="bathrooms" required>
            </div>

            <div class="form-group">
                <label for="square_meters">Square Meters:</label>
                <input type="number" class="form-control" id="square_meters" name="square_meters" required>
            </div>

            <div class="form-group">
                <label>Address:</label>
                <input type="text" class="form-control" name="street" placeholder="Street" required>
                <input type="text" class="form-control" name="zip" placeholder="ZIP" required>
                <input type="text" class="form-control" name="city" placeholder="City" required>
            </div>

            <div class="form-group">
                <label for="images">Upload Images (max 5):</label>
                <input type="file" class="form-control-file" id="images" name="images[]" accept="image/*" multiple
                       required>
            </div>

            <button type="submit" class="btn btn-primary">Create Apartment</button>
        </form>
    </div>
@endsection
