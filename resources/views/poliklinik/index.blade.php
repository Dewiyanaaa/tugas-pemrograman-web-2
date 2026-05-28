<x-app>
    <x-slot:title>
        Data Poliklinik
    </x-slot>

    <div class="container mt-4">

        <a href="#" class="btn btn-primary mb-3">
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

                    <button class="btn btn-warning btn-sm">
                        Edit
                    </button>

                    <button class="btn btn-danger btn-sm">
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
