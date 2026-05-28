<x-app :title="$title">

    <div class="container mt-5" style="max-width: 800px;">

        <form action="{{ route('poliklinik.store') }}" method="POST">
            @csrf

            <div class="mb-3">
                <label>Nama Poliklinik</label>
                <input type="text" name="nama" class="form-control" value="{{ old('nama') }}">

                @error('nama')
                    <small class="text-danger">
                        {{ $message }}
                    </small>
                @enderror
            </div>

            <div class="mb-3">
                <label>Lokasi</label>

                <select name="lokasi" class="form-control">
                    <option value="">-- Pilih Lokasi --</option>

                    <option value="Lantai 1" {{ old('lokasi') == 'Lantai 1' ? 'selected' : '' }}>
                        Lantai 1
                    </option>

                    <option value="Lantai 2" {{ old('lokasi') == 'Lantai 2' ? 'selected' : '' }}>
                        Lantai 2
                    </option>

                    <option value="Gedung A" {{ old('lokasi') == 'Gedung A' ? 'selected' : '' }}>
                        Gedung A
                    </option>

                    <option value="Gedung B" {{ old('lokasi') == 'Gedung B' ? 'selected' : '' }}>
                        Gedung B
                    </option>
                </select>

                @error('lokasi')
                    <small class="text-danger">
                        {{ $message }}
                    </small>
                @enderror
            </div>

            <div class="mb-3">
                <label>Telepon</label>
                <input type="text" name="telepon" class="form-control" value="{{ old('telepon') }}">

                @error('telepon')
                    <small class="text-danger">
                        {{ $message }}
                    </small>
                @enderror
            </div>

            <a href="{{ route('poliklinik.index') }}" class="btn btn-warning">
                Back
            </a>

            <button type="submit" class="btn btn-primary">
                Submit
            </button>

        </form>

    </div>

</x-app>
