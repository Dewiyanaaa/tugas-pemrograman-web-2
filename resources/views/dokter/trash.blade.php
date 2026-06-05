<x-app :title="$title">

    <a href="{{ route('dokter.index') }}" class="btn btn-primary mb-3">
        Back
    </a>

    <div class="card">

        <div class="card-header">
            Data Dokter Terhapus
        </div>

        <div class="card-body p-0">

            @forelse ($dokters as $dokter)
                <div class="border-bottom p-3">

                    {{ $dokter->nama }}
                    --
                    {{ $dokter->spesialis }}
                    --
                    {{ $dokter->email }}

                    <div class="mt-2">

                        <form action="{{ route('dokter.restore', $dokter->id) }}" method="POST" class="d-inline">

                            @csrf
                            @method('PUT')

                            <button type="submit" class="btn btn-success btn-sm">
                                Restore
                            </button>

                        </form>

                        <form action="{{ route('dokter.forceDelete', $dokter->id) }}" method="POST" class="d-inline">

                            @csrf
                            @method('DELETE')

                            <button type="submit" class="btn btn-danger btn-sm"
                                onclick="return confirm('Yakin hapus permanen?')">

                                Delete Permanent

                            </button>

                        </form>

                    </div>

                </div>

            @empty

                <div class="p-3 text-center">
                    Tidak ada data di trash
                </div>
            @endforelse

        </div>
    </div>

</x-app>
