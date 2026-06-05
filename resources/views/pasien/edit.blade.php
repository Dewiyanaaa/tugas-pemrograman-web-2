<x-app>
    <x-slot:title>{{ $title }}</x-slot>

    <form method="POST" action="{{ route('pasien.update', $pasien) }}">
        @csrf
        @method('PUT')

        <div class="mb-3">
            <label>Nama</label>
            <input type="text" name="name" value="{{ old('name', $pasien->name) }}" class="form-control">

            @error('name')
                <small class="text-danger">
                    {{ $message }}
                </small>
            @enderror
        </div>

        <div class="mb-3">
            <label>Umur</label>
            <input type="number" name="umur" value="{{ old('umur', $pasien->umur) }}" class="form-control">

            @error('umur')
                <small class="text-danger">
                    {{ $message }}
                </small>
            @enderror
        </div>

        <div class="mb-3">
            <label>Jenis Kelamin</label>

            <select name="jeniskelamin" class="form-control">
                <option value="">-- Pilih --</option>

                <option value="Laki-laki"
                    {{ old('jeniskelamin', $pasien->jeniskelamin) == 'Laki-laki' ? 'selected' : '' }}>
                    Laki-laki
                </option>

                <option value="Perempuan"
                    {{ old('jeniskelamin', $pasien->jeniskelamin) == 'Perempuan' ? 'selected' : '' }}>
                    Perempuan
                </option>
            </select>

            @error('jeniskelamin')
                <small class="text-danger">
                    {{ $message }}
                </small>
            @enderror
        </div>

        <div class="mb-3">
            <label>Alamat</label>
            <input type="text" name="alamat" value="{{ old('alamat', $pasien->alamat) }}" class="form-control">

            @error('alamat')
                <small class="text-danger">
                    {{ $message }}
                </small>
            @enderror
        </div>

        <div class="mb-3">
            <label>Keluhan</label>
            <input type="text" name="keluhan" value="{{ old('keluhan', $pasien->keluhan) }}" class="form-control">

            @error('keluhan')
                <small class="text-danger">
                    {{ $message }}
                </small>
            @enderror
        </div>

        <a href="{{ route('pasien.index') }}" class="btn btn-warning">
            Back
        </a>

        <button type="submit" class="btn btn-primary">
            Update
        </button>
    </form>

</x-app>
