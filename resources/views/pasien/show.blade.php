<x-app>
    <x-slot:title>{{ $title }}</x-slot>



    <ul class="list-group">
        <li class="list-group-item">Nama: {{ $pasien->name }}</li>
        <li class="list-group-item">Umur: {{ $pasien->umur }}</li>
        <li class="list-group-item">Jenis Kelamin: {{ $pasien->jeniskelamin }}</li>
        <li class="list-group-item">Alamat: {{ $pasien->alamat }}</li>
        <li class="list-group-item">Keluhan: {{ $pasien->keluhan }}</li>
    </ul>

    <a href="{{ route('pasien.index') }}" class="btn btn-secondary mt-3">Kembali</a>
</x-app>
