<nav class="navbar navbar-expand-lg navbar-light bg-light">
	<div class="container-fluid">
		<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
			<span class="navbar-toggler-icon"></span>
		</button>
		<div class="collapse navbar-collapse" id="navbarNav">
			<ul class="navbar-nav">
				<li class="nav-item">
					<a class="nav-link {{ ( $title === 'Home') ? 'active' : '' }}" aria-current="page" href="{{ route('index.home') }}">
						Home
					</a>
				</li>   
				<li class="nav-item">
					<a class="nav-link {{ ( $title === 'About') ? 'active' : '' }}" href="{{ route('index.about') }}">
						About
					</a>
				</li>
				<li class="nav-item">
					<a class="nav-link {{ ( $title === 'Gallery') ? 'active' : '' }}" href="{{ route('index.gallery') }}">
						Gallery
					</a>
				</li>
				<li class="nav-item">
					<a class="nav-link {{ ( $title === 'Contacts') ? 'active' : '' }}" href="{{ route('contact.create') }}">
						Contacts
					</a>
				</li>
			</ul>
			
			@if(Auth::guest())
				<ul class="navbar-nav ms-auto">
					<li class="nav-item">
						<a href="{{ route('login') }}" class="nav-link">
							Login
						</a>
					</li>
					<li class="nav-item">
						<a href="{{ route('register') }}" class="nav-link">
							Register
						</a>
					</li>
				</ul>
			@else
				<ul class="navbar-nav ms-auto">
					<li class="nav-item">
						<a href="{{ route('contact.index') }}" class="nav-link">
							Dashboard
						</a>
					</li>
				</ul>
			@endif
		</div>
	</div>
</nav>