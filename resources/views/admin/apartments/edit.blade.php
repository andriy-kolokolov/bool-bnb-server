@extends('admin.layouts.base')

@section('content')
    <div class="container">
        <h2>Edit Apartment</h2>

        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form action="{{ route('admin.apartments.update', ['apartment' => $apartment]) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('put')
            
            <div class="form-group">
                <label for="name">Name:</label>
                <input type="text" class="form-control" id="name" name="name" required value="{{ old('name', $apartment->name) }}">
            </div>

            <div class="form-group">
                <label for="rooms">Rooms:</label>
                <input type="number" class="form-control" id="rooms" name="rooms" required value="{{ old('rooms', $apartment->rooms) }}">
            </div>

            <div class="form-group">
                <label for="beds">Beds:</label>
                <input type="number" class="form-control" id="beds" name="beds" required value="{{ old('beds', $apartment->beds) }}">
            </div>

            <div class="form-group">
                <label>Services:</label><br>
                @foreach ($services as $service)
                    <label class="checkbox-inline">
                        <input type="checkbox" name="services[]" value="{{ $service->name }}" @if (in_array($service->id, old('services', $apartment->services->pluck('id')->all()))) checked @endif>
                        <i class="{{ $service['icon'] }}"></i> {{ $service['name'] }}
                    </label><br>
                @endforeach
            </div>

            <div class="form-group">
                <label for="bathrooms">Bathrooms:</label>
                <input type="number" class="form-control" id="bathrooms" name="bathrooms" required value="{{ old('bathrooms', $apartment->bathrooms) }}">
            </div>

            <div class="form-group">
                <label for="square_meters">Square Meters:</label>
                <input type="number" class="form-control" id="square_meters" name="square_meters" required value="{{ old('square_meters', $apartment->square_meters) }}">
            </div>

            <div class="form-group">
                <label>Address:</label>
                <input type="text" class="form-control" name="street" placeholder="Street" required value="{{ old('street', $apartment->street) }}">
                <input type="text" class="form-control" name="zip" placeholder="ZIP" required value="{{ old('zip', $apartment->zip) }}">
                <input type="text" class="form-control" name="city" placeholder="City" required value="{{ old('city', $apartment->city) }}">
            </div>

            <div class="form-group">
                <label for="images">Upload Images (max 5):</label>
                <input type="file" class="form-control-file" id="images" name="images[]" accept="image/*" multiple required>
            </div>

            <button type="submit" class="btn btn-primary">Edit Apartment</button>
        </form>
    </div>
@endsection