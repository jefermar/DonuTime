<!DOCTYPE html>
<html lang="es">
<head>
    @include('includes.head')
</head>
<body style="background: linear-gradient(135deg, #f3e5f5, #e1bee7);">
    @include('includes.navbar')
    <main class="py-4">
        @yield('content')
    </main>
    @include('includes.footer')
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet">
</body>
</html>
