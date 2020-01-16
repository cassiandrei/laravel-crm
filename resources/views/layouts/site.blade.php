<!DOCTYPE html>
<html>
<head>
    <title>@yield('title')</title>
    <!--Import Google Icon Font-->
    <link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

    <!-- Compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">

    <!--Let browser know website is optimized for mobile-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
</head>
<body>
<header>
    <nav>
        <div class="nav-wrappe deep-orange">
            <a href="#!" class="brand-logo">CRM</a>
            <a href="#" data-target="mobile-demo" class="sidenav-trigger"><i class="material-icons">menu</i></a>
            <ul class="right hide-on-med-and-down">
                <li><a href="/">Home</a></li>
                <li><a href="{{route('empresas.index')}}">Empresas</a></li>
                <li><a href="{{route('empregados.index')}}">Funcionários</a></li>
                <li><a href="{{ route('logout') }}"
                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                        Logout
                    </a>
                </li>
            </ul>
        </div>
    </nav>

    <ul class="sidenav" id="mobile-demo">
        <li><a href="/">Home</a></li>
        <li><a href="{{route('empresas.index')}}">Empresas</a></li>
        <li><a href="{{route('empregados.index')}}">Funcionários</a></li>
        <li><a href="{{ route('logout') }}"
               onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                Logout
            </a>
        </li>
    </ul>

    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
        {{ csrf_field() }}
    </form>
</header>

@yield('content')

<!--Import jQuery before materialize.js-->
<script type="text/javascript" src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
<!-- Compiled and minified JavaScript -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
<script type="text/javascript">
    $(document).ready(function () {
        M.AutoInit();
        $(".button-collapse").sidenav();
    });
</script>
</body>
</html>

