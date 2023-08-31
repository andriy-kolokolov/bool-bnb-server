@extends('admin.layouts.base')

@section('content') 

    <div class="index container mt-5">

        <h1 class="mb-3">APARTMENT</h1>
        <div class="d-flex gap-1 mb-4">
            <a class="btn btn-secondary" href="{{ route('admin.dashboard') }}">Back</a>
            <a class="btn btn-primary" href="{{ route('admin.apartments.create') }}">Add new Apartment</a>
        </div>


            {{-- conferma delete --}}
            @if (session('delete_success'))
                @php $apartment = session('delete_success') @endphp
                <div class="alert alert-danger m-0 mb-3">
                    "{{ $apartment->name }}" Deleted
                </div>
            @endif

        <table class="table table-striped">
            <thead>
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Name</th>
                    <th scope="col">Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach($apartments as $apartment)
                    <tr>
                        <th scope="row">{{ $apartment->id }}</th>
                        <td>{{ $apartment->name }}</td>
                        <td>
                            <a class="btn btn-warning" href="{{ route('admin.apartments.edit', ['apartment' => $apartment]) }}">Edit</a>
                            <!-- Button delete -->
                            <form
                                action="{{ route('admin.apartments.destroy', ['apartment' => $apartment]) }}"
                                method="post"
                                class="d-inline-block"
                            >
                                @csrf
                                @method('delete')
                                <button class="btn btn-danger">Delete</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>

    </div>

@endsection