<!DOCTYPE html>
<html class="no-js">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title>{{{ $pageTitle }}} - {{{ Config::get('project.name.short', 'Project') }}}</title>
        <meta name="description" content="@yield('description')">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <link rel="stylesheet" href="{{ asset('css/bootstrap-3.0.2.min.css') }}">
        <link rel="stylesheet" href="{{ asset('css/bootstrap-theme.css') }}">
        <link rel="stylesheet" href="{{ asset('css/font-awesome-4.0.3.min.css') }}">
        <link rel="stylesheet" href="{{ asset('css/app.css') }}">

        <script src="{{ asset('js/vendor/modernizr-2.6.2.min.js') }}"></script>
    </head>
    <body>
        <?php
        echo Navbar::inverse(null, Navbar::FIX_TOP)
            ->with_brand(Config::get('project.name.short', 'Project'), url('/'))
            ->with_menus(Navigation::links(array(
                    array('Home', url('/'), null, null, null, 'home')
            )))
            ->collapsible();

        ?>

        @yield('content')

        <div class="container text-center">
            <hr>
            <footer class="small">
                <p>Copyright &copy; {{ date('Y') }} {{{ Config::get('project.copyrightHolder') }}}</p>
                <p>Sprout image by Bruno Maia, <a href="http://www.icontexto.com">IconTexto</a></p>
            </footer>
        </div>

        @section('scripts')
        <script src="{{ asset('js/vendor/jquery-2.0.3.min.js') }}"></script>
        <script src="{{ asset('js/vendor/bootstrap-3.0.2.min.js') }}"></script>
        <script src="{{ asset('js/app.js') }}"></script>
        @show
    </body>
</html>
