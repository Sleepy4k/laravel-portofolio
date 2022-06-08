@extends('layouts.main')

@section('container')
    <div class="title-top mb-5">
        <h2 class="fw-bold">Contact Us</h2>
    </div>

    <div class="row contact-block">
        <div class="col-md-5 contact-right ps-lg-0">
            @include('partials.main.form.contact')
        </div>
    </div>
@endsection