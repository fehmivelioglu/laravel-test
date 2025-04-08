<!DOCTYPE html>
<html lang="tr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $title ?? 'Laravel Uygulaması' }}</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body class="d-flex flex-column min-vh-100">
    <header class="bg-white shadow-sm">
        <nav class="navbar navbar-expand-lg navbar-light">
            <div class="container">
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse justify-content-center" id="navbarNav">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <x-nav-link href="/" :active="request()->is('/')">Ana
                                Sayfa</x-nav-link>
                        </li>
                        <li class="nav-item">
                            <x-nav-link href="/about" :active="request()->is('about')">Hakkımızda</x-nav-link>
                        </li>
                        <li class="nav-item">
                            <x-nav-link href="/welcome" :active="request()->is('welcome')">Welcome</x-nav-link>
                        </li>
                        <li class="nav-item">
                            <x-nav-link href="/greeting" :active="request()->is('greeting')">Greeting</x-nav-link>
                        </li>
                        <li class="nav-item">
                            <x-nav-link href="/jobs" :active="request()->is('jobs')">Jobs</x-nav-link>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>

    <main class="container py-4 flex-grow-1">
        {{ $slot }}

        <div class="card mb-4">
            <div class="card-header bg-info text-white">
                <h5 class="mb-0">Request Bilgileri</h5>
            </div>
            <div class="card-body">
                <h6>URL: {{ request()->fullUrl() }}</h6>
                <h6>Method: {{ request()->method() }}</h6>
                <h6>Path: {{ request()->path() }}</h6>
                <h6>IP: {{ request()->ip() }}</h6>

                <h6 class="mt-3">Headers:</h6>
                <pre>{{ json_encode(request()->headers->all(), JSON_PRETTY_PRINT) }}</pre>

                <h6 class="mt-3">Query Parameters:</h6>
                <pre>{{ json_encode(request()->query(), JSON_PRETTY_PRINT) }}</pre>

                <h6 class="mt-3">Request Data:</h6>
                <pre>{{ json_encode(request()->all(), JSON_PRETTY_PRINT) }}</pre>
            </div>
        </div>


    </main>

    <footer class=" bg-dark text-white py-3 mt-auto">
        <div class="container text-center">
            <p class="mb-0">&copy; {{ date('Y') }} Tüm hakları saklıdır.</p>
        </div>
    </footer>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js">
    </script>
</body>

</html>
