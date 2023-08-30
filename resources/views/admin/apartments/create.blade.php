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
                <input type="text" class="form-control" id="name" name="name" placeholder="Apartment name" required>
            </div>

            <div class="form-group">
                <label for="street">Street:</label>
                <input type="text" id="street" class="form-control" name="street" placeholder="Street" required>
                <label for="city">City:</label>
                <input type="text" id="city" class="form-control" name="city" placeholder="City" required>
                <label for="zip">ZIP:</label>
                <input type="text" id="zip" class="form-control" name="zip" placeholder="ZIP" required>
            </div>

            <div class="form-group">
                <label>Services:</label><br>
                <div class="row row-cols-2 row-cols-sm-3 row-cols-md-4">
                    @foreach ($services as $service)
                        <div class="p-3 col d-flex justify-content-center">
                            <label class="checkbox-inline d-flex flex-row justify-content-start ms-checkbox-label">
                                <input type="checkbox" name="services[]" value="{{ $service['id'] }}"
                                       class="h-100 d-flex align-items-center ms-custom-checkbox">
                                <span class="ms-3 ms-icon-wrap d-flex align-items-center">
                                    <i class="fs-icon {{ $service['icon'] }}"></i>
                                    <span class="ms-3 name">
                                        {{ $service['name'] }}
                                    </span>
                                </span>
                            </label>
                        </div>
                    @endforeach
                </div>
            </div>

            <div class="form-group">
                <label for="rooms">Rooms:</label>
                <input type="number" class="form-control" id="rooms" name="rooms" placeholder="Rooms" required>
            </div>

            <div class="form-group">
                <label for="beds">Beds:</label>
                <input type="number" class="form-control" id="beds" name="beds" placeholder="Beds" required>
            </div>

            <div class="form-group">
                <label for="bathrooms">Bathrooms:</label>
                <input type="number" class="form-control" id="bathrooms" name="bathrooms" placeholder="Bathrooms" required>
            </div>

            <div class="form-group">
                <label for="square_meters">Square Meters:</label>
                <input type="number" class="form-control" id="square_meters" name="square_meters" placeholder="Square meters" required>
            </div>

            <div class="form-group">
                <label for="images">Upload Images (min 5):</label>
                <input type="file" class="form-control-file" id="images" name="images[]" accept="image/*" multiple
                       required>
            </div>

            <button type="submit" class="btn btn-primary">Create Apartment</button>
        </form>
    </div>
@endsection
