<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>School Portal</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <script src="{{ asset('js/app.js') }}"></script>
</head>
<body>
    <div id="main">
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark shadow-sm">
            <div class="container">
                <a class="navbar-brand" href="/">School Portal</a>
                <a class="navbar-brand" href="/payments">View</a>
            </div>
            </div>
          </nav>
    </div>
    <main class="py-5">
        @include('gakuru.layouts.notify')
        @yield('content')
    </main>
</body>
</html>
