<x-app>
    <x-slot:title>
        Data Poliklinik
    </x-slot>
    @if (session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif
    <div class="container mt-4">

        <a href="{{ route('poliklinik.create') }}" class="btn btn-primary mb-3">
            Create
        </a>

        <form>

            <div class="row g-3 mb-3">

                <div class="col-md-7">
                    <input type="text" class="form-control" name="keyword" placeholder="Search poliklinik name ..."
                        value="{{ request('keyword') }}">
                </div>

                <div class="col-md-3">
                    <button type="submit" class="btn btn-success w-100">
                        Search
                    </button>
                </div>

        </form>

        <ul class="list-group">

            @foreach ($polikliniks as $poliklinik)
                <li class="list-group-item">

                    {{ $polikliniks->firstItem() + $loop->index }}.

                    {{ $poliklinik->nama }}

                    --

                    {{ $poliklinik->lokasi }}

                    --

                    {{ $poliklinik->telepon }}



                    <a href="{{ route('poliklinik.edit', $poliklinik->id) }}" class="btn btn-warning btn-sm">
                        Edit
                    </a>

                    <form action="{{ route('poliklinik.destroy', $poliklinik->id) }}" method="POST" class="d-inline">
                        @csrf
                        @method('DELETE')

                        <button type="submit" class="btn btn-danger btn-sm"
                            onclick="return confirm('Yakin ingin menghapus data?')">
                            Delete
                        </button>

                </li>
            @endforeach

        </ul>

        <div class="mt-3">
            {{ $polikliniks->links() }}
        </div>

    </div>

</x-app>
