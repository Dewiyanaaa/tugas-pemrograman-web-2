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

            </li>
        @endforeach
    </ul>

</x-app>
