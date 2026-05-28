@props(['title'])

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>{{ $title ?? 'RS KASIH' }}</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>

    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-danger">
        <div class="container">
            <a class="navbar-brand" href="#">
                RS KASIH
            </a>

            <div class="collapse navbar-collapse">
                <ul class="navbar-nav ms-auto">

                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('pasien.index') }}">
                            Pasien
                        </a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('poliklinik.index') }}">
                            Poliklinik
                        </a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('dokter.index') }}">
                            Dokter
                        </a>
                    </li>

                </ul>
            </div>
        </div>
    </nav>

    <!-- Header -->
    <div class="bg-primary text-white text-center py-5 mb-5">
        <h1 class="fw-bold">
            {{ $title }}
        </h1>
    </div>

    <!-- Content -->
    <div class="container">

        {{-- Notifikasi Success --}}
        @if (session('success'))
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                {{ session('success') }}

                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close">
                </button>
            </div>
        @endif

        {{ $slot }}

    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

</body>

</html>
