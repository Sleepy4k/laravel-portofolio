@extends('layouts.app')

@section('title', 'Edit Data Contact')

@section('content')
    <div class="main-content">
        <div class="section__content section__content--p30">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12">
                    </div>
                    </div>
                </div>

                <div class="card">
                    <div class="card-header">
                        <strong>Form Edit Data Contact Us</strong>
                    </div>
                    <div class="card-body card-block">
                        <form action="{{route('contact.update', $contact->id)}}" method="post" class="">
                            {{csrf_field()}}
                            <div class="form-group">
                                <label class=" form-control-label">Nama</label>
                                <input type="text" name="nama" class="form-control" value="{{$contact->nama}}">
                            </div>
                            <div class="form-group">
                                <label class=" form-control-label">Email</label>
                                <input type="email" name="email" class="form-control" value="{{$contact->email}}">
                            </div>
                            <div class="form-group">
                                <label class=" form-control-label">Password</label>
                                <textarea class="form-control" style="height: 100px" name="pesan">{{$contact->pesan}}</textarea>
                            </div>
                            <div class="card-footer">
                                <button type="submit" class="btn btn-primary btn-sm">
                                    <i class="fa fa-dot-circle-o"></i> Submit
                                </button>
                                <button type="reset" class="btn btn-danger btn-sm">
                                    <i class="fa fa-ban"></i> Reset
                                </button>
                            </div>
                        </form>
                    </div>

                </div>
                    </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="copyright">
                            <p>Copyright © 2018 Colorlib. All rights reserved. Template by <a href="https://colorlib.com">Colorlib</a>.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection