@extends('admin.layouts.base')

@section('content')
	<div class="index d-flex flex-column justify-content-center container-fluid w-75 h-100 mt-3">
		@if (session('already_sponsored'))
			<div class="alert alert-warning fw-bold">
				{{ session('already_sponsored') }}
			</div>
		@endif
		@if (session('success'))
			@php $apartment = session('apartment') @endphp
			<div class="alert alert-success fw-bold">
				{{ session('success') }}
				{{ 'Apartment - ' . $apartment->name . ' is sponsored until - ' . $apartment->sponsorships->first()->pivot->end_date }}
			</div>
		@endif
		{{-- confirm delete --}}
		@if (session('delete_success'))
			@php $apartment = session('delete_success') @endphp
			<div class="alert alert-danger fw-bold">
				{{ session('delete_success') }}
			</div>
		@endif
		@if (session('create_success'))
			@php $apartment = session('create_success') @endphp
			<div class="alert alert-success fw-bold">
				{{ session('create_success') }}
			</div>
		@endif

		<h1 class="pb-4">MY APARTMENTS</h1>

		<table class="table table-striped">
			<thead>
				<tr>
					<th scope="col">Name</th>
					<th scope="col">Address</th>
					<th scope="col">Sponsor</th>
					<th scope="col">Sponsored Until</th>
					<th scope="col">Actions</th>
				</tr>
			</thead>
			<tbody>
				@foreach ($apartments as $apartment)
					<tr>
						<td>
							<p class="mt-1 m-0">{{ $apartment->name }}</p>
						</td>
						<td>
							<p class="mt-1 m-0">{{ $apartment->address->street }}
								- {{ $apartment->address->zip }} {{ $apartment->address->city }}</p>
						</td>
						<td>
							{!! $apartment->is_sponsored
							    ? '<i style="color: green; font-size: 25px;" class="fa-solid fa-check ms-3 mt-1"></i>'
							    : '<i style="color: red; font-size: 25px;"  class="fa-solid fa-xmark ms-3 mt-1"></i>' !!}
						</td>
						<td>
							@if ($apartment->is_sponsored)
								<p class="ms-badge mt-1 m-0">
									{{ \Carbon\Carbon::parse($apartment->sponsorships->first()->pivot->end_date)->setTimezone('Europe/Rome')->format('d-m-Y - H:i:s') }}
								</p>
							@endif
						</td>
						<td style="width: 430px;">
							<a class="btn myBtnPurple" style="background-color: #485ba1; color: white;"
								href="{{ route('admin.apartments.show', ['apartment' => $apartment]) }}">
								<i class="fa-regular fa-eye"></i>
								Show
							</a>
							<a class="btn myBtnPurple" style="background-color: #485ba1; color: white;"
								href="{{ route('admin.apartments.edit', ['apartment' => $apartment]) }}">
								<i class="fa-regular fa-pen-to-square"></i>
								Edit
							</a>
							<a class="btn myBtnPurple" style="background-color: #485ba1; color: white;"
								href="{{ route('admin.apartments.chat', ['id' => $apartment->id]) }}">
								<i class="fa-solid fa-envelope"></i>
								Messages
							</a>
							<a class="btn myBtnPurple" style="background-color: #9153a9; color: white;"
								href="{{ route('admin.apartments.sponsorship.index', ['id' => $apartment->id]) }}">
								<i class="fa-solid fa-medal"></i>
								Sponsor
							</a>
							<!-- Button delete -->
							<button type="button" class="btn btn-danger" data-bs-toggle="modal"
								data-bs-target="#deleteModal-{{ $apartment->id }}">
								<i class="fa-solid fa-trash"></i>
							</button>
						</td>
					</tr>

					<!-- Delete Modal -->
					<div class="modal fade" id="deleteModal-{{ $apartment->id }}" tabindex="-1" aria-labelledby="deleteModalLabel"
						aria-hidden="true">
						<div class="modal-dialog modal-dialog-centered">
							<div class="modal-content">
								<div class="modal-header">
									<h1 class="modal-title fs-5" id="deleteModalLabel">Delete confirmation</h1>
									<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
								</div>
								<div class="modal-body">
									Are you sure? It's going to be deleted permanently!
								</div>
								<div class="modal-footer">
									<button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
									<form action="{{ route('admin.apartments.destroy', ['apartment' => $apartment]) }}" method="post"
										class="d-inline-block">
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
		<div class="d-flex gap-2 pt-5">
			<a class="btn btn-secondary" href="{{ route('admin.dashboard') }}">Back</a>
			<a class="btn myBtnPurple" style="background-color: #485ba1; color: white;"
				href="{{ route('admin.apartments.create') }}"><i class="fa-solid fa-plus"></i> Add</a>
		</div>
	</div>
@endsection
