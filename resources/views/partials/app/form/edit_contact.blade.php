<form action="{{route('contact.update', $contact->id)}}" method="post" class="">
    @csrf
    <div class="form-group">
        <label class=" form-control-label">
            Nama
        </label>
        <input type="text" name="nama" class="@error('nama') is-invalid @enderror form-control" value="{{old('nama', $contact->nama)}}" required autofocus>
    </div>

    @error('nama')
        <span class="error-display">
            {{ $message }}
        </span>
    @enderror

    <div class="form-group">
        <label class=" form-control-label">
            Email
        </label>
        <input type="email" name="email" class="@error('email') is-invalid @enderror form-control" value="{{old('email', $contact->email}}" required autofocus>
    </div>

    @error('email')
        <span class="error-display">
            {{ $message }}
        </span>
    @enderror

    <div class="form-group">
        <label class=" form-control-label">
            Pesan
        </label>
        <textarea class="@error('pesan') is-invalid @enderror form-control" style="height: 100px" name="pesan" required autofocus>{{old('nama', $contact->pesan}}</textarea>
    </div>

    @error('pesan')
        <span class="error-display">
            {{ $message }}
        </span>
    @enderror

    <div class="card-footer">
        <button type="submit" class="btn btn-primary btn-sm">
            <i class="fa fa-dot-circle-o"></i> 
            Submit
        </button>
        <button type="reset" class="btn btn-danger btn-sm">
            <i class="fa fa-ban"></i> 
            Reset
        </button>
    </div>
</form>