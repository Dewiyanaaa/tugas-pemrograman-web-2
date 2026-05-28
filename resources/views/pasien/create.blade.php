<x-app>
    <x-slot:title>{{ $title }}</x-slot>

    <form method="POST" action="{{ route('pasien.store') }}">

        @csrf

        <div class="mb-3">
            <label>Nama</label>
            <input type="text" name="name" class="form-control">
        </div>

        <div class="mb-3">
            <label>Umur</label>
            <input type="number" name="umur" class="form-control">
        </div>

        <div class="mb-3">
            <label>Jenis Kelamin</label>

            <select name="jeniskelamin" class="form-control">

                <option value="">
                    -- Pilih --
                </option>

                <option value="Laki-laki">
                    Laki-laki
                </option>

                <option value="Perempuan">
                    Perempuan
                </option>

            </select>
        </div>

        <div class="mb-3">
            <label>Alamat</label>
            <input type="text" name="alamat" class="form-control">
        </div>

        <div class="mb-3">
            <label>Keluhan</label>
            <input type="text" name="keluhan" class="form-control">
        </div>

        <button type="submit" class="btn btn-primary">
            Submit
        </button>
    </form>

</x-app>
