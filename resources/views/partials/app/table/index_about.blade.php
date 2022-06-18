<table class="table table-borderless table-data3">
    <thead>
        <tr>
            <th>
                No
            </th>
            <th>
                Judul
            </th>
            <th>
                Name
            </th>
            <th>
                Umur
            </th>
            <th>
                Phone
            </th>
            <th>
                Email
            </th>
            <th>
                Bio
            </th>
            <th>
                Foto
            </th>
            <th>
                Aksi
            </th>
        </tr>
    </thead>
    <tbody>
        @if (count($abouts) <= 0)
            <tr>
                <td colspan=9 style="text-align: center;"> 
                    Belum Ada Data Yang Tersedia 
                </td>
            </tr>
        @else
            @foreach ($abouts as $index => $about)
                <tr>
                    <td>
                        {{$index + 1}}
                    </td>
                    <td>
                        {{$about->title}}
                    </td>
                    <td>
                        {{$about->name}}
                    </td>
                    <td>
                        {{$about->bday}}
                    </td>
                    <td>
                        {{$about->phone}}
                    </td>
                    <td>
                        {{$about->email}}
                    </td>
                    <td>
                        {{$about->bio}}
                    </td>
                    @if (!empty(file_exists('storage/images/'.$about->image)))
                        <td>
                            <img height="35px" width="35px" src="{{ asset('storage/images/'.$about->image) }}"/>
                        </td>
                    @else
                        <td>
                            <img height="35px" width="35px" src="{{ asset('admin/images/bg-title-01.jpg') }}"/>
                        </td>
                    @endif
                    <td>
                        <a href="{{route('about.edit', $about->id)}}">
                            <i class="fas fa-edit"></i>
                        </a> 
                        | 
                        <a href="{{route('about.destroy', $about->id)}}" style="color:red" class="button delete-confirm">
                            <i class="fas fa-trash"></i>
                        </a>
                    </td>
                </tr> 
            @endforeach
        @endif
    </tbody>
</table>

{{$abouts->links()}}