@extends('admin.layouts.base')
@section('content')
	<div class="container mt-3">
		<h2>Sponsorship for this Apartment</h2>
		<div class="d-flex gap-4 justify-content-center mt-5 mb-5">
			@foreach ($availableSponsorships as $sponsorship)
				<div class="text-center w-50">
					<div class="card-body">

						<div class="card__bx card-color">
							<div class="card__data">
								<div class="card__icon">
									<div class="card__icon-bx">
										<i class="fa-solid fa-pen-ruler"></i>
									</div>
								</div>
								<div class="card__content">
									<h3 class="m-0">{{ $sponsorship->level }}</h3>
									<h5 class="card-title">{{ $sponsorship->duration }}</h5>
								</div>
							</div>
						</div>


						{{-- <h5 class="card-title">{{ $sponsorship->duration }}</h5>
                        <h6 class="card-title mt-3 mb-3" style="color: #9153a9;">{{ $sponsorship->price }}</h6> --}}
						<a href="#" class="btn myBtnPurple" style="background-color: #485ba1; color: white;">Buy</a>
					</div>
				</div>
			@endforeach
		</div>


		<div class="d-flex gap-1 mt-3">
			<a class="btn btn-secondary" href="{{ route('admin.apartments.index') }}">Back</a>
		</div>
	</div>
@endsection
