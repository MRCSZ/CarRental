<html>
    <head>
        <meta charset="utf-8"/>
        <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"/>

        <title>App Name - @yield('title', $applicationName)</title>
        <meta name="description" content=""/>

        <link rel="stylesheet" href="{{ mix('/css/app.css') }}">
    </head>
</head>
<body class="sb-nav-fixed">

    <nav class="sb-topnav navbar navbar-expand navbar-dark bg-dark">
        <a class="navbar-brand" href="{{ route('home.homePage') }}">{{ $applicationName }}</a>
 
    </nav>

    <div id="layoutSidenav">
        <div id="layoutSidenav_nav">
            <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
                @section('sidebar')
                    <div class="sb-sidenav-menu">
                        <div class="nav">
                            @include('shared.sidebar')
                        </div>
                    </div>
                    <div class="sb-sidenav-footer">
                        Sidenav Footer
                    </div>
                @show
            </nav>
        </div>
        <div id="layoutSidenav_content">
            <main>
                <div class="container-fluid">
                    @include('shared.messages')
                    @yield('content')
                </div>
            </main>

            <footer class="py-4 bg-light mt-auto">
                <div class="container-fluid">
                    <div class="d-flex align-items-center justify-content-between small">
                        <div class="text-muted">Fluid footer</div>
                        <div>
                        </div>
                    </div>
                </div>
            </footer>
        </div>
    </div>
    <script src="{{ mix('/js/app.js') }}"></script>
</body>
</html>
