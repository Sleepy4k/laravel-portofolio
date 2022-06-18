<form action="{{ route('gallery.update', $gallery->id) }}" method="POST" enctype="multipart/form-data">
    @csrf
    <div class="form-group">
        <label class=" form-control-label">
            Judul
        </label>
        <input type="text" name="title" class="@error('title') is-invalid @enderror form-control" value="{{ old('title', $gallery->title) }}" required autofocus>
    </div>

    @error('title')
        <span class="error-display">
            {{ $message }}
        </span>
    @enderror

    <div class="form-group">
        <label class=" form-control-label">
            Deskripsi
        </label>
        <input type="text" name="desc" class="@error('desc') is-invalid @enderror form-control" value="{{ old('desc', $gallery->desc) }}" required autofocus>
    </div>

    @error('desc')
        <span class="error-display">
            {{ $message }}
        </span>
    @enderror
    
    <div class="form-group">
        <label class=" form-control-label">
            Link
        </label>
        <input type="text" name="link" class="@error('link') is-invalid @enderror form-control" value="{{ old('link', $gallery->link) }}" required autofocus>
    </div>

    @error('link')
        <span class="error-display">
            {{ $message }}
        </span>
    @enderror

    <div class="form-group">
        <label class=" form-control-label">
            Foto
        </label>

        <input type="hidden" name="oldImg" id="oldImg" value="{{ $gallery->image }}">

        @if ($gallery->image)
            @if (!empty(file_exists('storage/images/'.$gallery->image)))
                <img src="{{ asset('storage/images/'.$gallery->image) }}" class="img-preview img-fluid mb-3 col-sm-5 d-block" style="max-width: 15em; max-height: 15em;">
            @else
                <img src="{{ asset('admin/images/bg-title-01.jpg') }}" class="img-preview img-fluid mb-3 col-sm-5 d-block" style="max-width: 15em; max-height: 15em;">
            @endif
        @else
            <img class="img-preview img-fluid mb-3 col-sm-5" style="max-width: 15em; max-height: 15em;">
        @endif

        <input class="@error('link') is-invalid @enderror form-control" type="file" id="image" onchange="previewImage()" name="image">
    </div>

    @error('image')
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