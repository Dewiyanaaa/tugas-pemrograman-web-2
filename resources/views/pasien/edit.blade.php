<x-app>
    <x-slot:title>{{ $title }}</x-slot>

    <form method="POST" action="{{ route('pasien.update', $pasien) }}">
        @csrf
        @method('PUT')

        <div class="mb-3">
            <label for="name" class="form-label">Masukan Nama Anda : </label>
            <input type="text" class="form-control @error('name') is-invalid @enderror" id="name" name="name"
                value="{{ old('name', $pasien->name) }}"> @error('name')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>

        <div class="mb-3">
            <label for="umur" class="form-label">Masukan Umur Anda :</label>
            <input type="text" class="form-control @error('umur') is-invalid @enderror" id="umur" name="umur"
                value="{{ old('umur', $pasien->umur) }}"> @error('umur')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>

        <div class="mb-3">
            <label for="jeniskelamin" class="form-label">Jenis Kelamin</label>
            <select class="form-control @error('jeniskelamin') is-invalid @enderror" name="jeniskelamin"
                id="jeniskelamin">
                <option value="">-- Pilih --</option>
                <option value="Laki-laki"
                    {{ old('jeniskelamin', $pasien->jeniskelamin) == 'Laki-laki' ? 'selected' : '' }}>Laki-laki</option>
                <option value="Perempuan"
                    {{ old('jeniskelamin', $pasien->jeniskelamin) == 'Perempuan' ? 'selected' : '' }}>Perempuan</option>
            </select>
            @error('jeniskelamin')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>

        <div class="mb-3">
            <label for="alamat" class="form-label">Masukan Alamat Rumah Anda :</label>
            <input type="text" class="form-control @error('alamat') is-invalid @enderror" id="alamat"
                name="alamat" value="{{ old('alamat', $pasien->alamat) }}"> @error('alamat')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>

        <div class="mb-3">
            <label for="keluhan" class="form-label">Masukan Keluhan Anda :</label>
            <input type="text" class="form-control @error('keluhan') is-invalid @enderror" id="keluhan"
                name="keluhan" value="{{ old('keluhan', $pasien->keluhan) }}"> @error('keluhan')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>

        <a class="btn btn-warning" href="{{ route('pasien.index') }}" role="button">Cancel</a>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</x-app>
