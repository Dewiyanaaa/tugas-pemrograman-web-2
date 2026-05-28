<x-app>
    <x-slot:title>{{ $title }}</x-slot>

    <form method="POST" action="{{ route('pasien.update', $pasien) }}">

        @csrf
        @method('PUT')

        <div class="mb-3">
            <label>Nama</label>

            <input type="text" name="name" value="{{ $pasien->name }}" class="form-control">
        </div>

        <div class="mb-3">
            <label>Umur</label>

            <input type="number" name="umur" value="{{ $pasien->umur }}" class="form-control">
        </div>

        <div class="mb-3">
            <label>Jenis Kelamin</label>

            <select name="jeniskelamin" class="form-control">

                <option value="Laki-laki" {{ $pasien->jeniskelamin == 'Laki-laki' ? 'selected' : '' }}>
                    Laki-laki
                </option>

                <option value="Perempuan" {{ $pasien->jeniskelamin == 'Perempuan' ? 'selected' : '' }}>
                    Perempuan
                </option>

            </select>
        </div>

        <div class="mb-3">
            <label>Alamat</label>

            <input type="text" name="alamat" value="{{ $pasien->alamat }}" class="form-control">
        </div>

        <div class="mb-3">
            <label>Keluhan</label>

            <input type="text" name="keluhan" value="{{ $pasien->keluhan }}" class="form-control">
        </div>

        <button type="submit" class="btn btn-primary">
            Update
        </button>
    </form>

</x-app>
