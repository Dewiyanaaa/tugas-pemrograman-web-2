<x-app>
    <x-slot:title>{{ $title }}</x-slot>


    @session('success')
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endsession

    <a class="btn btn-primary mb-5" href="{{ route('pasien.create') }}" role="button">Create</a>

    <ul class="list-group">
        @foreach ($Pasiens as $Pasien)
            <li class="list-group-item">{{ $loop->iteration }} . {{ $Pasien->name }} -- {{ $Pasien->umur }} --
                {{ $Pasien->jeniskelamin }} --
                {{ $Pasien->alamat }} -- {{ $Pasien->keluhan }}

                <a class="btn btn-warning btn-sm" href="{{ route('pasien.edit', $Pasien) }}" role="button">Edit</a>


                <form action="{{ route('pasien.destroy', $Pasien) }}" method="POST" class="d-inline">
                    @method('DELETE')
                    @csrf
                    <button type="submit" class="btn btn-danger btn-sm"
                        onclick="return confirm ('ANDA YAKIN')">Delete</button>
                </form>




            </li>
        @endforeach
    </ul>

</x-app>
