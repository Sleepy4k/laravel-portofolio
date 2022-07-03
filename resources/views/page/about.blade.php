@extends('layouts.main')

@section('container')
	<div class="container py-md-5 py-4">
		<div class="row align-items-center">
			@if($abouts->count() <= 0)
				<div class="col-lg-4">
					<div class="position-relative">
						<div style="text-align: center;">Belum Ada Profile Yang di tulis</div>
					</div>
				</div>
			@else
				@foreach ($abouts as $about)
					@if(!empty(file_exists('storage/images/'.$about->image)))
						<div class="col-lg-4">
							<div class="position-relative">
								<img src="{{ asset('storage/images/'.$about->image) }}" alt="{{ $about->name }}" class="radius-image img-fluid">
							</div>
						</div>
						<div class="col-lg-8 ps-lg-5 mt-lg-0 mt-5">
							<h5 class="title-small mb-1">
								About
							</h5>
							<h3 class="title-style">
								{{ $about->title }}
							</h3>
							<p class="mt-3">
								{{ $about->bio }}
							</p>
							<div class="my-info mt-md-5 mt-4">
								<ul class="single-info">
									<li class="name-style">
										Nama
									</li>
									<li>
										:
									</li>
									<li>
										<p>
											{{ $about->name }}
										</p>
									</li>
								</ul>
								<ul class="single-info">
									<li class="name-style">
										Umur
									</li>
									<li>
										:
									</li>
									<li>
										<p>
											{{ $about->bday }}
										</p>
									</li>
								</ul>
								<ul class="single-info">
									<li class="name-style">
										No Hp
									</li>
									<li>
										:
									</li>
									<li>
										<p>
											{{ $about->phone }}
										</p>
									</li>
								</ul>
								<ul class="single-info">
									<li class="name-style">
										Email
									</li>
									<li>
										:
									</li>
									<li>
										<p>
											<a href="https://mail.google.com/mail/?view=cm&fs=1&tf=1&to={{ $about->email }}" >
												{{ $about->email }}
											</a>
										</p>
									</li>
								</ul>
							</div>
						</div>
					@else
						<div class="col-lg-4">
							<div class="position-relative">
								<img src="{{ asset('admin/images/bg-title-01.jpg') }}}" alt="{{ $about->name }}" class="radius-image img-fluid">
							</div>
						</div>
						<div class="col-lg-8 ps-lg-5 mt-lg-0 mt-5">
							<h5 class="title-small mb-1">
								About
							</h5>
							<h3 class="title-style">
								{{ $about->title }}
							</h3>
							<p class="mt-3">
								{{ $about->bio }}
							</p>
							<div class="my-info mt-md-5 mt-4">
								<ul class="single-info">
									<li class="name-style">
										Nama
									</li>
									<li>
										:
									</li>
									<li>
										<p>
											{{ $about->name }}
										</p>
									</li>
								</ul>
								<ul class="single-info">
									<li class="name-style">
										Umur
									</li>
									<li>
										:
									</li>
									<li>
										<p>
											{{ $about->bday }}
										</p>
									</li>
								</ul>
								<ul class="single-info">
									<li class="name-style">
										No Hp
									</li>
									<li>
										:
									</li>
									<li>
										<p>
											{{ $about->phone }}
										</p>
									</li>
								</ul>
								<ul class="single-info">
									<li class="name-style">
										Email
									</li>
									<li>
										:
									</li>
									<li>
										<p>
											<a href="https://mail.google.com/mail/?view=cm&fs=1&tf=1&to={{ $about->email }}" >
												{{ $about->email }}
											</a>
										</p>
									</li>
								</ul>
							</div>
						</div>
					@endif
				@endforeach
			@endif
		</div>
	</div>
@endsection