<form action="{{ route('about.update', $about->id) }}" method="POST" enctype="multipart/form-data">
    @csrf
    <div class="form-group">
        <label class=" form-control-label">
            Judul
        </label>
        <input type="text" name="title" class="@error('title') is-invalid @enderror form-control" value="{{ old('title', $contact->title) }}" required autofocus>
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
        <input type="text" name="name" class="@error('name') is-invalid @enderror form-control" value="{{ old('name', $contact->name) }}" required autofocus>
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
        <input type="text" name="bday" class="@error('bday') is-invalid @enderror form-control" value="{{ old('bday', $contact->bday) }}" required autofocus>
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
        <input type="text" name="phone" class="@error('phone') is-invalid @enderror form-control" value="{{ old('phone', $contact->phone) }}" required autofocus>
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
        <input type="text" name="email" class="@error('email') is-invalid @enderror form-control" value="{{ old('email', $contact->email) }}" required autofocus>
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
        <input type="text" name="bio" class="@error('bio') is-invalid @enderror form-control" value="{{ old('bio', $contact->bio) }}" required autofocus>
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

        <input type="hidden" name="oldImg" id="oldImg" value="{{ $about->image }}">

        @if($about->image)
            @if(!empty(file_exists('storage/images/about/'.$about->image)))
                <img src="{{ asset('storage/images/about/'.$about->image) }}" class="img-preview img-fluid mb-3 col-sm-5 d-block" style="max-width: 15em; max-height: 15em;">
            @else
                <img src="{{ asset('admin/images/bg-title-01.jpg') }}" class="img-preview img-fluid mb-3 col-sm-5 d-block" style="max-width: 15em; max-height: 15em;">
            @endif
        @else
            <img class="img-preview img-fluid mb-3 col-sm-5" style="max-width: 15em; max-height: 15em;">
        @endif

        <input class="@error('link') is-invalid @enderror form-control" type="file" id="image" onchange="previewImage()" name="image">

        @if ($errors->has('image')) 
            <span class="text-danger">
                {{ $errors->first('image') }}
            </span> 
        @endif
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