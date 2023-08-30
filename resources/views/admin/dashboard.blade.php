@php $user = Auth::user() @endphp

@extends('admin.layouts.base')

@section('contents')
	<div class="w-75 m-auto text-center d-flex flex-column align-items-center">
		<h1 class="page-title fw-bold mt-4">
			Welcome {{ $user->username }}!
		</h1>
		<h4 class="mt-5">Use the buttons below to add a new apartment</h4>
		<h4>or to view a list of the ones you already added:</h4>
		<h4 class="mb-5">from there you will be able to perform various operations on each of them.</h4>
		<div class="w-50 d-flex justify-content-evenly">
			{{-- <a href="{{ route('admin.apartment.create') }}" class="btn px-4 py-3 fw-bold"
				style="background-color: #485ba1; color: white"><i class="bi bi-file-earmark-plus"></i> Add New Apartment </a> --}}
			<a href="{{ route('admin.apartment.index') }}" class="btn px-4 py-3 fw-bold"
				style="background-color: #9153a9; color: white"><i class="bi bi-file-earmark-plus"></i> View Your Apartments</a>
		</div>
	</div>
@endsection
