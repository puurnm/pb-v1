<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Administrator | Export Go</title>
    <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>

    @include('partials.admin.styling')
    @yield('third_party_stylesheets')
    @stack('page_css')
</head>

<body class="c-app">
    @include('partials.admin.sidebar')

    <div class="c-wrapper">
        <header class="c-header c-header-light c-header-fixed">
            @include('partials.admin.navbar')
        </header>

        <div class="c-body">
            <main class="c-main">
                @yield('content')
            </main>
        </div>

        @include('partials.admin.footer')
    </div>
</body>

@include('partials.admin.script')
@yield('third_party_scripts')
@stack('page_scripts')

</html>
