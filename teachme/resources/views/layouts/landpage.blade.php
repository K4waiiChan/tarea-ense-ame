<!DOCTYPE html>
<html>

    <head>

        @include('common.head')

        @yield('styles')

    </head>

    <body class="hold-transition skin-blue layout-top-nav">

        <div class="wrapper">

            <header class="main-header">

                <nav class="navbar navbar-static-top">

                    <div class="container">

                        <div class="navbar-header">

                            <a href="/" class="navbar-brand"><b>{{ config('app.name') }}</b></a>

                            <button type="button"
                                    class="navbar-toggle collapsed"
                                    data-toggle="collapse"
                                    data-target="#navbar-collapse">

                                <i class="fa fa-bars"></i>

                            </button>

                        </div>

                        <div class="collapse navbar-collapse" id="navbar-collapse">

                            <ul class="nav navbar-nav"></ul>

                            <ul class="nav navbar-nav navbar-right">

                                <li class="{{ request()->is('register') ? 'active' : '' }}">

                                    <a href="{{ route('register') }}">

                                        Registrarse <span class="sr-only">(current)</span>

                                    </a>

                                </li>

                                <li class="{{ request()->is('login') ? 'active' : '' }}">

                                    <a href="{{ route('login') }}">

                                        Acceder

                                    </a>

                                </li>

                            </ul>

                        </div>

                    </div>

                </nav>

            </header>

            <div class="content-wrapper">

                <div class="container">

                    @yield('content')

                </div>

            </div>

        </div>

    </body>

</html>