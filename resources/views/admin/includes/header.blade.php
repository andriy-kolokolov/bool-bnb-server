<header class="shadow mb-4 admin-header container-fluid d-flex justify-content-between">
	<div class="header-brand">
		<a href="{{ route('admin.dashboard') }}">
			<img class="img-logo" src="{{ asset('storage/uploads/logo-orizzontale.png') }}" alt="Logo"
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
						{{ $user->username }}
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
	</nav>
</header>
