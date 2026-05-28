<x-app :title="$title">



    <div class="card-body">

        <ul class="list-group mb-3">
            <li class="list-group-item">
                <strong>Nama:</strong>
                {{ $poliklinik->nama }}
            </li>

            <li class="list-group-item">
                <strong>Lokasi:</strong>
                {{ $poliklinik->lokasi }}
            </li>

            <li class="list-group-item">
                <strong>Telepon:</strong>
                {{ $poliklinik->telepon }}
            </li>

            <li class="list-group-item">
                <strong>Dibuat:</strong>
                {{ $poliklinik->created_at->format('d F Y H:i') }}
            </li>

            <li class="list-group-item">
                <strong>Update:</strong>
                {{ $poliklinik->updated_at->diffForHumans() }}
            </li>
        </ul>

        <a href="{{ route('poliklinik.index') }}" class="btn btn-warning">
            Back
        </a>


</x-app>
