@extends('admin.layouts.base')

@section('content')

    <div class="index container-fluid mt-5 w-75">
        @if (session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif
        {{-- confirm delete --}}
        @if (session('delete_success'))
            @php $apartment = session('delete_success') @endphp
            <div class="alert alert-danger m-0 mb-3">
                {{ session('delete_success') }}
            </div>
        @endif
        @if (session('create_success'))
            @php $apartment = session('create_success') @endphp
            <div class="alert alert-success m-0 mb-3">
                {{ session('create_success') }}
            </div>
        @endif

        <h1 class="mb-3">MY APARTMENTS</h1>
        <div class="d-flex gap-1 mb-4">
            <a class="btn btn-secondary" href="{{ route('admin.dashboard') }}">Back</a>
            <a class="btn myBtnPurple" style="background-color: #485ba1; color: white;" href="{{ route('admin.apartments.create') }}">Add new Apartment</a>
        </div>


        <table class="table table-striped">
            <thead>
            <tr>
                <th scope="col">ID</th>
                <th scope="col">Name</th>
                <th scope="col">Address</th>
                <th scope="col">Available</th>
                <th scope="col">Sponsor</th>
                <th scope="col">Actions</th>
            </tr>
            </thead>
            <tbody>
            @foreach($apartments as $apartment)
                <tr>
                    <th scope="row">{{ $apartment->id }}</th>
                    <td>{{ $apartment->name }}</td>
                    <td>{{ $apartment->address->street }} - {{ $apartment->address->zip }} {{ $apartment->address->city }}</td>
                    <td>{!! $apartment->is_available ? '<i style="color: green; font-size: 25px;" class="fa-solid fa-check ms-3 mt-1"></i>' : '<i style="color: red; font-size: 25px;"  class="fa-solid fa-xmark ms-3 mt-1"></i>' !!}</td>
                    <td>{!! $apartment->is_sponsored ? '<i style="color: green; font-size: 25px;" class="fa-solid fa-check ms-3 mt-1"></i>' : '<i style="color: red; font-size: 25px;"  class="fa-solid fa-xmark ms-3 mt-1"></i>' !!}</td>
                    <td style="width: 290px;">
                        <a class="btn myBtnPurple" style="background-color: #485ba1; color: white;"
                           href="{{ route('admin.apartments.show', ['apartment' => $apartment]) }}">Show</a>
                        <a class="btn myBtnPurple" style="background-color: #485ba1; color: white;"
                           href="{{ route('admin.apartments.edit', ['apartment' => $apartment]) }}">Edit</a>
                        <a class="btn myBtnPurple" style="background-color: #485ba1; color: white;"
                           href="{{ route('admin.apartments.sponsorship', ['apartment' => $apartment]) }}">Sponsor</a>

                        <!-- Button delete -->
                        <button type="button" class="btn btn-danger" data-bs-toggle="modal"
                                data-bs-target="#deleteModal-{{ $apartment->id }}">
                            Delete
                        </button>
                    </td>
                </tr>

                <!-- Delete Modal -->
                <div class="modal fade" id="deleteModal-{{ $apartment->id }}" tabindex="-1"
                     aria-labelledby="deleteModalLabel"
                     aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h1 class="modal-title fs-5" id="deleteModalLabel">Delete confirmation</h1>
                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                        aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                Are you sure you want to delete this apartment?
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                                <form
                                    action="{{ route('admin.apartments.destroy', ['apartment' => $apartment]) }}"
                                    method="post"
                                    class="d-inline-block"
                                >
                                    @csrf
                                    @method('delete')
                                    <button class="btn btn-danger">Yes, Delete</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End Delete Modal -->
            @endforeach
            </tbody>
        </table>
    </div>

@endsection
