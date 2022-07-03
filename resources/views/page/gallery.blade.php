@extends('layouts.main')

@section('container')
	<section class="w3l-gallery pb-5" id="gallery">
		<div class="container py-md-5 py-4">
			<div class="title-heading-w3 text-center mb-sm-5 mb-4">
				<h5 class="title-small mb-1">Gallery</h5>
				<h3 class="title-style">Berikut Merupakan Project Saya</h3>
			</div>
			<div class="row">
				@if($galleries->count() <= 0)
					<div class="col-lg-4">
						<div class="position-relative">
							<div style="text-align: center;">Belum Ada Profile Yang di tulis</div>
						</div>
					</div>
				@else
					@foreach ($galleries as $gallery)
						@if(!empty(file_exists('storage/images/'.$gallery->image)))
							<div class="col-lg-4 col-md-6 item mt-4 pt-lg-2">
								<a href="{{ $gallery->link }}" src="{{ asset('storage/images/'.$gallery->image) }}" target="_blank" data-lightbox="example-set" data-title="{{ $gallery->title }}" class="zoom d-block">
									<img class="card-img-bottom d-block" style="max-width: 15em; max-height: 15em;" src="{{ asset('storage/images/'.$gallery->image) }}" alt="none">
									<span class="overlay__hover"></span>
									<span class="hover-content">
										<span class="title">
											{{ $gallery->title }}
										</span>
										<span class="content">
											{{ $gallery->desc }}
										</span>
									</span>
								</a>
							</div>
						@else
							<div class="col-lg-4 col-md-6 item mt-4 pt-lg-2">
								<a href="{{ $gallery->link }}" src="{{ asset('admin/images/bg-title-01.jpg') }}" target="_blank" data-lightbox="example-set" data-title="{{ $gallery->title }}" class="zoom d-block">
									<img class="card-img-bottom d-block" src="{{ asset('admin/images/bg-title-01.jpg') }}" alt="none">
									<span class="overlay__hover"></span>
									<span class="hover-content">
										<span class="title">
											{{ $gallery->title }}
										</span>
										<span class="content">
											{{ $gallery->desc }}
										</span>
									</span>
								</a>
							</div>
						@endif
					@endforeach
				@endif
			</div>
		</div>
	</section>
@endsection