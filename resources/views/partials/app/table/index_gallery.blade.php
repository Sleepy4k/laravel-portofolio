<table class="table table-borderless table-data3">
    <thead>
        <tr>
            <th>
                No
            </th>
            <th>
                Title
            </th>
            <th>
                Description
            </th>
            <th>
                Image
            </th>
            <th>
                Aksi
            </th>
        </tr>
    </thead>
    <tbody>
        @foreach ($galleries as $index => $gallery)
            <tr>
                <td>
                    {{$index + 1}}
                </td>
                <td>
                    {{$gallery->title}}
                </td>
                <td>
                    {{$gallery->desc}}
                </td>
                @if(!empty(file_exists('storage/images/gallery/'.$gallery->image)))
                    <td>
                        <img height="35px" width="35px" src="{{ asset('storage/images/gallery/'.$gallery->image) }}"/>
                    </td>
                @else
                    <td>
                        <img height="35px" width="35px" src="{{ asset('admin/images/bg-title-01.jpg') }}"/>
                    </td>
                @endif
                <td>
                    <a href="{{route('gallery.edit', $gallery->id)}}">
                        <i class="fas fa-edit"></i>
                    </a> 
                    | 
                    <a href="{{route('gallery.destroy', $gallery->id)}}" style="color:red" class="button delete-confirm">
                        <i class="fas fa-trash"></i>
                    </a>
                </td>
            </tr> 
        @endforeach
    </tbody>
</table>

{{$galleries->links()}}