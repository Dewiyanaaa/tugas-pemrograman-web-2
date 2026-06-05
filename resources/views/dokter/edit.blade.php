<x-app :title="$title">

    <form action="{{ route('dokter.update', $dokter->id) }}" method="POST">
        @csrf
        @method('PUT')

        {{-- Nama Dokter --}}
        <div class="mb-3">
            <label>Nama Dokter</label>
            <input type="text" name="nama" class="form-control" value="{{ old('nama', $dokter->nama) }}">

            @error('nama')
                <small class="text-danger">
                    {{ $message }}
                </small>
            @enderror
        </div>

        {{-- Spesialis --}}
        <div class="mb-3">
            <label>Spesialis</label>
            <input type="text" name="spesialis" class="form-control"
                value="{{ old('spesialis', $dokter->spesialis) }}">

            @error('spesialis')
                <small class="text-danger">
                    {{ $message }}
                </small>
            @enderror
        </div>

        {{-- Telepon --}}
        <div class="mb-3">
            <label>Telepon</label>
            <input type="text" name="telepon" class="form-control" value="{{ old('telepon', $dokter->telepon) }}">

            @error('telepon')
                <small class="text-danger">
                    {{ $message }}
                </small>
            @enderror
        </div>

        {{-- Email --}}
        <div class="mb-3">
            <label>Email</label>
            <input type="email" name="email" class="form-control" value="{{ old('email', $dokter->email) }}">

            @error('email')
                <small class="text-danger">
                    {{ $message }}
                </small>
            @enderror
        </div>

        {{-- Alamat --}}
        <div class="mb-3">
            <label>Alamat</label>
            <textarea name="alamat" class="form-control" rows="3">{{ old('alamat', $dokter->alamat) }}</textarea>

            @error('alamat')
                <small class="text-danger">
                    {{ $message }}
                </small>
            @enderror
        </div>

        {{-- Jadwal Praktik --}}
        <div class="mb-3">
            <label>Jadwal Praktik</label>

            <select name="jadwal_praktik" class="form-control">
                <option value="">-- Pilih Jadwal --</option>

                <option value="Pagi"
                    {{ old('jadwal_praktik', $dokter->jadwal_praktik) == 'Pagi' ? 'selected' : '' }}>
                    Pagi
                </option>

                <option value="Siang"
                    {{ old('jadwal_praktik', $dokter->jadwal_praktik) == 'Siang' ? 'selected' : '' }}>
                    Siang
                </option>

                <option value="Malam"
                    {{ old('jadwal_praktik', $dokter->jadwal_praktik) == 'Malam' ? 'selected' : '' }}>
                    Malam
                </option>
            </select>

            @error('jadwal_praktik')
                <small class="text-danger">
                    {{ $message }}
                </small>
            @enderror
        </div>

        {{-- Poliklinik --}}
        <div class="mb-3">
            <label>Poliklinik</label>

            <select name="poliklinik_id" class="form-control">
                <option value="">-- Pilih Poliklinik --</option>

                @foreach ($polikliniks as $poliklinik)
                    <option value="{{ $poliklinik->id }}"
                        {{ old('poliklinik_id', $dokter->poliklinik_id) == $poliklinik->id ? 'selected' : '' }}>
                        {{ $poliklinik->nama }}
                    </option>
                @endforeach
            </select>

            @error('poliklinik_id')
                <small class="text-danger">
                    {{ $message }}
                </small>
            @enderror
        </div>

        <a href="{{ route('dokter.index') }}" class="btn btn-warning">
            Back
        </a>

        <button type="submit" class="btn btn-primary">
            Update
        </button>

    </form>

</x-app>
