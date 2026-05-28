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
    <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
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

    <div class="container">
        {{ $slot }}
    </div>

</body>

</html>
