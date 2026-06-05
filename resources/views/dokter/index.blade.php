<x-app :title="$title">

    <a href="{{ route('dokter.create') }}" class="btn btn-primary mb-3">
        Create
    </a>

    <form action="{{ route('dokter.index') }}" method="GET">
        <div class="row mb-3">

            <div class="col-md-7">
                <input type="text" name="keyword" class="form-control" placeholder="Search dokter name ..."
                    value="{{ request('keyword') }}">
            </div>

            <div class="col-md-3">
                <select name="poliklinik_id" class="form-control">
                    <option value="">-- Semua Poliklinik --</option>

                    @foreach ($polikliniks as $poliklinik)
                        <option value="{{ $poliklinik->id }}"
                            {{ request('poliklinik_id') == $poliklinik->id ? 'selected' : '' }}>
                            {{ $poliklinik->nama }}
                        </option>
                    @endforeach
                </select>
            </div>

            <div class="col-md-2">
                <button type="submit" class="btn btn-success w-100">
                    Search
                </button>
            </div>

        </div>
    </form>

    <div class="card">
        <div class="card-body p-0">

            @forelse ($dokters as $dokter)
                <div class="border-bottom p-3">

                    {{ $dokters->firstItem() + $loop->index }}.
                    {{ $dokter->nama }}
                    --
                    {{ $dokter->spesialis }}
                    --
                    {{ $dokter->email }}
                    --
                    {{ $dokter->poliklinik->nama }}

                    <a href="{{ route('dokter.edit', $dokter->id) }}" class="btn btn-warning btn-sm">
                        Edit
                    </a>

                    <form action="{{ route('dokter.destroy', $dokter->id) }}" method="POST" class="d-inline">

                        @csrf
                        @method('DELETE')

                        <button type="submit" class="btn btn-danger btn-sm"
                            onclick="return confirm('Yakin ingin menghapus data dokter ini?')">
                            Delete
                        </button>
                    </form>

                    <a href="{{ route('dokter.show', $dokter->id) }}" class="btn btn-info btn-sm">
                        Detail
                    </a>

                </div>

            @empty

                <div class="p-3 text-center">
                    Data dokter tidak ditemukan
                </div>
            @endforelse

        </div>
    </div>

    <div class="mt-3">
        {{ $dokters->links() }}
    </div>

</x-app>
