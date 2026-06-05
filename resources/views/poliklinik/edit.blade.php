<x-app :title="$title">
    @if ($errors->any())
        <div class="alert alert-danger">
            <ul class="mb-0">
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('poliklinik.update', $poliklinik->id) }}" method="POST">
        @csrf
        @method('PUT')

        <div class="mb-3">
            <label>Nama Poliklinik</label>
            <input type="text" name="nama" class="form-control" value="{{ old('nama', $poliklinik->nama) }}">

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

                <option value="Lantai 1" {{ old('lokasi', $poliklinik->lokasi) == 'Lantai 1' ? 'selected' : '' }}>
                    Lantai 1
                </option>

                <option value="Lantai 2" {{ old('lokasi', $poliklinik->lokasi) == 'Lantai 2' ? 'selected' : '' }}>
                    Lantai 2
                </option>

                <option value="Gedung A" {{ old('lokasi', $poliklinik->lokasi) == 'Gedung A' ? 'selected' : '' }}>
                    Gedung A
                </option>

                <option value="Gedung B" {{ old('lokasi', $poliklinik->lokasi) == 'Gedung B' ? 'selected' : '' }}>
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
            <input type="text" name="telepon" class="form-control"
                value="{{ old('telepon', $poliklinik->telepon) }}">

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
            Update
        </button>



</x-app>
