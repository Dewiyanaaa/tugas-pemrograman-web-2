<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $title ?? 'RS KASIH' }}</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body style="background-color: #f5f5f5;">

    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-danger">
        <div class="container">
            <a class="navbar-brand" href="#">
                RS KASIH
            </a>

            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">

                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse justify-content-end" id="navbarNav">

                <ul class="navbar-nav">

                    <li class="nav-item">
                        <a class="nav-link {{ request()->is('pasien*') ? 'active fw-bold' : '' }}"
                            href="{{ route('pasien.index') }}">
                            Pasien
                        </a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link {{ request()->is('poliklinik*') ? 'active fw-bold' : '' }}"
                            href="{{ route('poliklinik.index') }}">
                            Poliklinik
                        </a>
                    </li>

                </ul>
            </div>
        </div>
    </nav>

    <!-- Header Biru -->
    <div class="bg-primary text-white text-center py-5 mb-5">
        <h1 class="fw-bold">
            {{ $title }}
        </h1>
    </div>

    <!-- Content -->
    <div class="container">
        {{ $slot }}
    </div>

</body>

</html>
