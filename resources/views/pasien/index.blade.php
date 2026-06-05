<x-app>
    <x-slot:title>{{ $title }}</x-slot>

    <div class="container mt-5">

        {{-- Tombol Create --}}
        <a href="{{ route('pasien.create') }}" class="btn btn-primary mb-4">
            Create
        </a>



        {{-- List Data --}}
        <ul class="list-group">

            @foreach ($pasiens as $pasien)
                <li class="list-group-item d-flex justify-content-between align-items-center">

                    <div>
                        {{ $loop->iteration }}.

                        {{ $pasien->name }}
                        --

                        {{ $pasien->umur }} Tahun
                        --

                        {{ $pasien->jeniskelamin }}
                        --

                        {{ $pasien->alamat }}
                        --

                        {{ $pasien->keluhan }}

                        <a class="btn btn-warning btn-sm" href="{{ route('pasien.edit', $pasien) }}">Edit</a>

                        <a class="btn btn-info btn-sm" href="{{ route('pasien.show', $pasien) }}">Detail</a>

                        <form action="{{ route('pasien.destroy', $pasien) }}" method="POST" class="d-inline">
                            @csrf
                            @method('DELETE')
                            <button class="btn btn-danger btn-sm">Delete</button>
                        </form>


                </li>
            @endforeach

        </ul>

    </div>
</x-app>
