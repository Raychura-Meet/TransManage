<!DOCTYPE html>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title') || {{ config('app.name') }}</title>

    @include('layouts.include')
    @yield('css')
</head>

<body>
    <div id="app">
        @include('layouts.sidebar')

        <div id="main" class='layout-navbar'>
            @include('layouts.topbar')
            <div id="main-content">
                <div class="page-heading">

                    @yield('page-title')
                    @yield('content')
                </div>


                 {{-- footer --}}
                @include('layouts.footer')
            </div>

        </div>
    </div>
    @include('layouts.footer_script')
    @yield('js')
    @yield('script')
</body>

</html>
