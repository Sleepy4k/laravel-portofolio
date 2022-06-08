@extends('layouts.app')

@section('title', 'Gallery')

@section('content')
    <div class="main-content">
        <div class="section__content section__content--p30">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12">
                        <div class="overview-wrap">
                            <h2 class="title-1">
                                Data Gallery
                            </h2>
                            <a href="{{ route('gallery.create') }}" class="ms-auto">
                                <button type="button" class="btn btn-success btn-sm">
                                    <i class="fas fa-plus"></i>
                                    Tambah
                                </button>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-12">
                <div class="table-responsive m-b-40">
                    @include('partials.app.table.index_gallery')
                </div>
            </div>
            @include('partials.app.footer')
        </div>
    </div>
@endsection