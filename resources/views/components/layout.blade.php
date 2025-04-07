<!DOCTYPE html>
<html lang="tr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $title ?? 'Laravel Uygulaması' }}</title>
</head>

<body>
    <header>
        <nav>
            <a href="/">Ana Sayfa</a>
            <a href="/about">Hakkımızda</a>
            <a href="/welcome">Welcome</a>
            <a href="/contact">İletişim</a>
            <a href="/greeting">Greeting</a>
        </nav>
    </header>

    <main>
        {{ $slot }}
    </main>

    <footer>
        <p>&copy; {{ date('Y') }} Tüm hakları saklıdır.</p>
    </footer>
</body>

</html>
