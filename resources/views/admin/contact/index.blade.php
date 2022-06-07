@extends('layouts.app')
@section('title', 'Apri | Data Contact')
@section('content')
    <div class="main-content">
        <div class="section__content section__content--p30">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12">
                        <div class="overview-wrap">
                            <h2 class="title-1">Data Contact Us</h2>
                        </div>
                    </div>
                </div>
            </div>
                <div class="col-md-12">
                    <div class="table-responsive m-b-40">
                        <table class="table table-borderless table-data3">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Nama</th>
                                    <th>Email</th>
                                    <th>Pesan</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($contacts as $index => $contact)
                                    <tr>
                                        <td>{{$index + 1}}</td>
                                        <td>{{$contact->nama}}</td>
                                        <td>{{$contact->email}}</td>
                                        <td>{{$contact->pesan}}</td>
                                        <td>
                                            <a href="{{route('contact.edit', $contact->id)}}">
                                                <i class="fas fa-edit"></i>
                                            </a> 
                                            | 
                                            <a href="{{route('contact.destroy', $contact->id)}}" style="color:red">
                                                <i class="fas fa-trash"></i>
                                            </a>
                                        </td>
                                    </tr> 
                                @endforeach
                            </tbody>
                        </table>
                        {{$contacts->links()}}
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