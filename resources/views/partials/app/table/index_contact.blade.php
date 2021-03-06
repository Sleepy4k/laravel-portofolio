<table class="table table-borderless table-data3">
    <thead>
        <tr>
            <th>
                No
            </th>
            <th>
                Nama
            </th>
            <th>
                Email
            </th>
            <th>
                Pesan
            </th>
            <th>
                Aksi
            </th>
        </tr>
    </thead>
    <tbody>
        @forelse ($contacts as $index => $contact)
            <tr>
                <td>
                    {{ $index + 1 }}
                </td>
                <td>
                    {{ $contact->nama }}
                </td>
                <td>
                    {{ $contact->email }}
                </td>
                <td>
                    {{ $contact->pesan }}
                </td>
                <td>
                    <a href="{{ route('contact.edit', $contact->id) }}">
                        <i class="fas fa-edit"></i>
                    </a> 
                    | 
                    <a href="{{ route('contact.destroy', $contact->id) }}" style="color:red" class="button delete-confirm">
                        <i class="fas fa-trash"></i>
                    </a>
                </td>
            </tr>
        @empty
            <tr>
                <td colspan=9 style="text-align: center;"> 
                    Belum Ada Data Yang Tersedia 
                </td>
            </tr>
        @endforelse
    </tbody>
</table>

{{$contacts->links()}}