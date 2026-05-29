<x-app :title="$title">


    <table class="table table-bordered">

        <tr>
            <th width="30%">Nama Dokter</th>
            <td>{{ $dokter->nama }}</td>
        </tr>

        <tr>
            <th>Spesialis</th>
            <td>{{ $dokter->spesialis }}</td>
        </tr>

        <tr>
            <th>Telepon</th>
            <td>{{ $dokter->telepon }}</td>
        </tr>

        <tr>
            <th>Alamat</th>
            <td>{{ $dokter->alamat }}</td>
        </tr>

        <tr>
            <th>Jadwal Praktik</th>
            <td>{{ $dokter->jadwal_praktik }}</td>
        </tr>

        <tr>
            <th>Poliklinik</th>
            <td>{{ $dokter->poliklinik->nama }}</td>
        </tr>

    </table>

    <a href="{{ route('dokter.index') }}" class="btn btn-warning">
        Back
    </a>



</x-app>
