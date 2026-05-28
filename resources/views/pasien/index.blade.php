<x-app>
    <x-slot:title>{{ $title }}</x-slot>

    <div class="container mt-5">

        {{-- Tombol Create --}}
        <a href="{{ route('pasien.create') }}" class="btn btn-primary mb-4">
            Create
        </a>

        {{-- Pesan sukses --}}
        @if (session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif

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
                    </div>

                    <div class="d-flex gap-2">

                        {{-- Tombol Edit --}}
                        <a href="{{ route('pasien.edit', $pasien) }}" class="btn btn-warning">
                            Edit
                        </a>

                        {{-- Tombol Delete --}}
                        <form action="{{ route('pasien.destroy', $pasien) }}" method="POST">

                            @csrf
                            @method('DELETE')

                            <button type="submit" class="btn btn-danger" onclick="return confirm('Yakin hapus data?')">
                                Delete
                            </button>

                        </form>

                    </div>

                </li>
            @endforeach

        </ul>

    </div>
</x-app>
