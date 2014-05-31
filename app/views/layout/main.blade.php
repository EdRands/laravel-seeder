<!DOCTYPE html>
<html class="no-js">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title>{{{ $pageTitle }}} - {{{ Config::get('project.name.short', 'Project') }}}</title>
        <meta name="description" content="@yield('description')">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <link rel="stylesheet" href="{{ asset('css/bootstrap-3.1.1.min.css') }}">
        <link rel="stylesheet" href="{{ asset('css/bootstrap-theme.css') }}">
        <link rel="stylesheet" href="{{ asset('css/font-awesome-4.1.0.min.css') }}">
        <link rel="stylesheet" href="{{ asset('css/app.css') }}">

        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!--[if lt IE 9]>
          <script src="//cdn.jsdelivr.net/html5shiv/3.7/html5shiv.min.js"></script>
          <script src="//cdn.jsdelivr.net/respond/1.4/respond.min.js"></script>
        <![endif]-->
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
        <script src="{{ asset('js/vendor/jquery-2.1.1.min.js') }}"></script>
        <script src="{{ asset('js/vendor/bootstrap-3.1.1.min.js') }}"></script>
        <script src="{{ asset('js/app.js') }}"></script>
        @show
    </body>
</html>
