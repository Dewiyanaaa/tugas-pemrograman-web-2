<x-app>
    <x-slot:title>{{ $title }}</x-slot>

    <ul class="list-group">
        @foreach ($Pasiens as $Pasien)
            <li class="list-group-item">{{ $loop->iteration }} . {{ $Pasien->keluhan }} -- {{ $Pasien->alamat }} --
                {{ $Pasien->jeniskelamin }} --
                {{ $Pasien->umur }} -- {{ $Pasien->name }} </li>
        @endforeach
    </ul>

</x-app>
