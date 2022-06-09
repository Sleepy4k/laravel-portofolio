<form method="POST" action="{{ route('contact.store')}}">
    @csrf
    <div class="mb-3">
        <label for="inputname">
            Nama
        </label>
        <input type="text" class="form-control" id="inputname" placeholder="Nama" value="{{ old('nama') }}" name="nama" required autofocus>
    </div>

    @error('nama')
        <span class="error-display">
            {{ $message }}
        </span>
    @enderror

    <div class="mb-3">
        <label for="inputemail">
            Email
        </label>
        <input type="email" class="form-control" id="inputemail" placeholder="name@example.com" value="{{ old('email') }}" name="email" required autofocus>
    </div>

    @error('email')
        <span class="error-display">
            {{ $message }}
        </span>
    @enderror

    <div class="form-input">
        <label for="inputnote">
            Pesan
        </label>
        <textarea class="form-control" name="pesan" id="inputnote" placeholder="Masukan Pesan" value="{{ old('pesan') }}" style="height: 100px" required autofocus></textarea>
    </div>

    @error('pesan')
        <span class="error-display">
            {{ $message }}
        </span>
    @enderror

    <div>
        <button type="submit" class="btn btn-style">
            Kirim Pesan
        </button>
    </div>
</form>