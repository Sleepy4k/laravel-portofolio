@extends('layouts.app')

@section('title', 'Edit Data Contact')

@section('content')
    <div class="main-content">
        <div class="section__content section__content--p30">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12"></div>
                </div>
            </div>
            <div class="card">
                <div class="card-header">
                    <strong>
                        Edit Data
                    </strong>
                </div>
                <div class="card-body card-block">
                    @include('partials.app.form.edit_contact')
                </div>
            </div>
        </div>
        @include('partials.app.footer')
    </div>
@endsection