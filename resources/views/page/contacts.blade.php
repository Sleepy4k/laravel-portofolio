@extends('layouts.main')

@section('container')
    <div class="title-top mb-5">
        <h2 class="fw-bold">Contact Us</h2>
    </div>

    <form method="post" action="{{route('contact.store')}}">
        @csrf
        <div class="form-floating mb-3">
            <label for="inputname">
                Nama
            </label>
            <input type="text" class="form-control" id="inputname" placeholder="Nama" name="nama">
        </div>

        @error('nama')
            <span class="error-display">
                {{ $message }}
            </span>
        @enderror

        <div class="form-floating mb-3">
            <label for="inputemail">
                Email
            </label>
            <input type="email" class="form-control" id="inputemail" placeholder="name@example.com" name="email">
        </div>

        @error('email')
            <span class="error-display">
                {{ $message }}
            </span>
        @enderror

        <div class="form-floating mb-3">
            <label for="floatingTextarea2">
                Pesan
            </label>
            <textarea class="form-control" placeholder="Tinggalkan pesan disini" id="floatingTextarea2" style="height: 100px" name="pesan"></textarea>
        </div>

        @error('pesan')
            <span class="error-display">
                {{ $message }}
            </span>
        @enderror

        <button type="submit" class="btn btn-primary">
            Kirim
        </button>
    </form>
@endsection