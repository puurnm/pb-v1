<!DOCTYPE html>
<html lang="zxx">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Export Go</title>
    @include('partials.homepage.styling')
</head>
<body>
    <div class="container-scroller">
        <div class="main-panel">
            <!-- partial navbar -->
            @include('partials.homepage.navbar')

            <!-- main -->
            <div id="homepage">
                <main class="py-4">
                    @yield('content')
                </main>
            </div>

            <!-- partial footer -->
            @include('partials.homepage.footer')

            <!-- partial -->
        </div>
    </div>
</body>

@include('partials.homepage.script')

</html>

