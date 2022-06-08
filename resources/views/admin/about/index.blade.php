@extends('layouts.app')

@section('title', 'About')

@section('content')
    <div class="main-content">
        <div class="section__content section__content--p30">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12">
                        <div class="overview-wrap">
                            <h2 class="title-1">
                                Data About
                            </h2>
                            <a href="{{ route('about.create') }}" class="ms-auto">
                                @if($abouts->count() < 1)
                                    <button type="button" class="btn btn-success btn-sm">
                                        <i class="fas fa-plus"></i>
                                        Tambah
                                    </button>
                                @endif
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-12">
                <div class="table-responsive m-b-40">
                    @include('partials.app.table.index_about')
                </div>
            </div>
            @include('partials.app.footer')
        </div>
    </div>
@endsection