<form action="{{ route('about.store') }}" method="post" enctype="multipart/form-data">
    @csrf
    <div class="form-group">
        <label class=" form-control-label">
            Judul
        </label>
        <input type="text" name="title" class="@error('title') is-invalid @enderror form-control" value="{{ old('title') }}" required autofocus>
    </div>

    @error('title')
        <span class="error-display">
            {{ $message }}
        </span>
    @enderror

    <div class="form-group">
        <label class=" form-control-label">
            Nama
        </label>
        <input type="text" name="name" class="@error('name') is-invalid @enderror form-control" value="{{ old('name') }}" required autofocus>
    </div>

    @error('name')
        <span class="error-display">
            {{ $message }}
        </span>
    @enderror
    
    <div class="form-group">
        <label class=" form-control-label">
            Umur
        </label>
        <input type="text" name="bday" class="@error('bday') is-invalid @enderror form-control" value="{{ old('bday') }}" required autofocus>
    </div>

    @error('bday')
        <span class="error-display">
            {{ $message }}
        </span>
    @enderror

    <div class="form-group">
        <label class=" form-control-label">
            Nomer Handphone
        </label>
        <input type="text" name="phone" class="@error('phone') is-invalid @enderror form-control" value="{{ old('phone') }}" required autofocus>
    </div>

    @error('phone')
        <span class="error-display">
            {{ $message }}
        </span>
    @enderror
    
    <div class="form-group">
        <label class=" form-control-label">
            Email
        </label>
        <input type="text" name="email" class="@error('email') is-invalid @enderror form-control" value="{{ old('email') }}" required autofocus>
    </div>

    @error('email')
        <span class="error-display">
            {{ $message }}
        </span>
    @enderror
    
    <div class="form-group">
        <label class=" form-control-label">
            Bio
        </label>
        <input type="text" name="bio" class="@error('bio') is-invalid @enderror form-control" value="{{ old('bio') }}" required autofocus>
    </div>

    @error('bio')
        <span class="error-display">
            {{ $message }}
        </span>
    @enderror

    <div class="form-group">
        <label class=" form-control-label">
            Foto
        </label>

        <img class="img-preview img-fluid mb-3 col-sm-5" style="max-width: 15em; max-height: 15em;">

        <input class="@error('link') is-invalid @enderror form-control" type="file" id="image" onchange="previewImage()" name="image" required autofocus>

        @error('image')
            <span class="error-display">
                {{ $message }}
            </span>
        @enderror
    </div>

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