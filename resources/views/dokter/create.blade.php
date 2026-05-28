<x-app :title="$title">

    <div class="card">

        <div class="card-header">
            Tambah Data Dokter
        </div>

        <div class="card-body">

            <form action="{{ route('dokter.store') }}" method="POST">
                @csrf

                <div class="mb-3">
                    <label>Nama Dokter</label>
                    <input type="text" name="nama" class="form-control" value="{{ old('nama') }}">

                    @error('nama')
                        <small class="text-danger">
                            {{ $message }}
                        </small>
                    @enderror
                </div>

                <div class="mb-3">
                    <label>Spesialis</label>
                    <input type="text" name="spesialis" class="form-control" value="{{ old('spesialis') }}">

                    @error('spesialis')
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

                <div class="mb-3">
                    <label>Alamat</label>
                    <textarea name="alamat" class="form-control" rows="3">{{ old('alamat') }}</textarea>

                    @error('alamat')
                        <small class="text-danger">
                            {{ $message }}
                        </small>
                    @enderror
                </div>

                <div class="mb-3">
                    <label>Jadwal Praktik</label>
                    <select name="jadwal_praktik" class="form-control">
                        <option value="">-- Pilih Jadwal --</option>
                        <option value="Pagi">Pagi</option>
                        <option value="Siang">Siang</option>
                        <option value="Malam">Malam</option>
                    </select>

                    @error('jadwal_praktik')
                        <small class="text-danger">
                            {{ $message }}
                        </small>
                    @enderror
                </div>

                <div class="mb-3">
                    <label>Poliklinik</label>

                    <select name="poliklinik_id" class="form-control">
                        <option value="">
                            -- Pilih Poliklinik --
                        </option>

                        @foreach ($polikliniks as $poliklinik)
                            <option value="{{ $poliklinik->id }}">
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
                    Save
                </button>

            </form>

        </div>
    </div>

</x-app>
