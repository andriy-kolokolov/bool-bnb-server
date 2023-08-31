@php
    $user = Auth::user();
@endphp

<header>
	{{-- <div class="header-brand">
		<a href="{{ route('admin.dashboard') }}">
			<img class="img-logo" src="{{ asset('logo-orizzontale.png') }}" alt="Logo"
				style="max-width: 150px; padding: 1rem;">
		</a>
	</div>
	<nav class="navbar navbar-expand-lg bg-body-tertiary flex-end">
		<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
			aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
			<span class="navbar-toggler-icon"></span>
		</button>

		<div class="collapse navbar-collapse" id="navbarSupportedContent">
			<ul class="navbar-nav ms-auto">

				<!--    ADMIN PROFILE EDIT    -->
				<li class="nav-item dropdown">
					<a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
						{{ $user->name }}
					</a>
					<ul class="dropdown-menu dropdown-menu-end  text-center">
						<li>
							<a class="dropdown-item w-100" href="{{ route('profile.edit') }}">Edit profile</a>
						</li>
						<li>
							<form class="dropdown-item" action="{{ route('logout') }}" method="post">
								@csrf
								<button class="btn btn-danger w-100">Log out</button>
							</form>
						</li>
					</ul>
				</li>

			</ul>
		</div>
	</nav> --}}

	<nav>
		<div class="myContainer">
		<!-- logo -->
		<a class="image" href="http://127.0.0.1:8000/admin">
			<img
				src="{{ asset('logo-orizzontale.png') }}"
				alt="logo"
				class="ms-total"
			/>
			<img src="{{ asset('logo-b.png') }}" alt="logo-small" class="ms-small" />
		</a>

		<!-- search -->
		<form class="search">
			<input class="myInput" type="text" />
			<button class="myBtn">
				<i class="fa-solid fa-magnifying-glass"></i>
			</button>
		</form>

		<!-- routes -->
		<div class="routes btn-group">
			<div class="menu-dropdown">
			<button
				id="button"
				type="button"
				data-bs-toggle="dropdown"
				data-bs-auto-close="inside"
			>
				<div id="icon"></div>
			</button>
			<ul class="dropdown-menu dropdown-menu-end">
				<li>
					<div href="http://localhost:5173" class="dropdown-item">
						Home
					</div>
				</li>
				<li>
					<a class="dropdown-item w-100" href="{{ route('profile.edit') }}">Edit profile</a>
				</li>
				<li>
					<form class="dropdown-item" action="{{ route('logout') }}" method="post">
						@csrf
						<button class="btn btn-danger w-100">Log out</button>
					</form>
				</li>
			</ul>
			</div>
			<!-- altra routes -->
			<div class="menu-off">
			<button
				id="btn"
				type="button"
				data-bs-toggle="offcanvas"
				data-bs-target="#staticBackdrop"
				aria-controls="offcanvasRight"
			>
				<div id="icn"></div>
			</button>
			<div
				class="offcanvas offcanvas-end w-100"
				data-bs-backdrop="static"
				tabindex="-1"
				id="staticBackdrop"
				aria-labelledby="staticBackdropLabel"
			>
				<div class="offcanvas-header btn-position">
				<button
					type="button"
					class="btn"
					id="off-close"
					data-bs-dismiss="offcanvas"
					aria-label="Close"
				>
					<i class="fa-solid fa-xmark"></i>
				</button>
				</div>
				<div class="offcanvas-body">
				<div class="ms-routes">
					<ul>
						<li>
							<button data-bs-dismiss="offcanvas" aria-label="Close" href="http://localhost:5173">
								<div  class="drop-item">
									Home
								</div>
							</button>
						</li>
						<li>
							<button data-bs-dismiss="offcanvas" aria-label="Close" href="{{ route('profile.edit') }}">
								<div  class="drop-item">
									Edit profile
								</div>
							</button>
						</li>
						<li>
							<button data-bs-dismiss="offcanvas" aria-label="Close" class="drop-item">
								<form action="{{ route('logout') }}" method="post">
									@csrf
									<button>Log out</button>
								</form>
							</button>
						</li>
					</ul>
				</div>
				</div>
			</div>
			</div>
		</div>
		</div>
	</nav>
</header>
