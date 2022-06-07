<nav class="navbar navbar-expand-lg navbar-dark bg-danger">
	<div class="container">
		<a class="navbar-brand" href="/">
			Apri
		</a>
		<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
			<span class="navbar-toggler-icon"></span>
		</button>
		<div class="collapse navbar-collapse" id="navbarNav">
			<ul class="navbar-nav">
				<li class="nav-item">
					<a class="nav-link {{ ( $title === 'Home') ? 'active' : '' }}" aria-current="page" href="/">
						Home
					</a>
				</li>   
				<li class="nav-item">
					<a class="nav-link {{ ( $title === 'About') ? 'active' : '' }}" href="/about">
						About
					</a>
				</li>
				<li class="nav-item">
					<a class="nav-link {{ ( $title === 'Gallery') ? 'active' : '' }}" href="/gallery">
						Gallery
					</a>
				</li>
				<li class="nav-item">
					<a class="nav-link {{ ( $title === 'Contacts') ? 'active' : '' }}" href="/contact/create">
						Contacts
					</a>
				</li>
			</ul>
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
		</div>
	</div>
</nav>