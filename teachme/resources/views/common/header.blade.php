<header class="main-header">

    <!-- Logo -->
    <a href="/" class="logo">

        <!-- Logo mini -->
        <span class="logo-mini">

            {{-- <img src="{{ asset('imgs/logo.svg') }}"
                    alt="Brand Logo"
                    class="img-responsive"> --}}

        </span>

        <!-- Logo normal-->
        <span class="logo-lg">
            {{ config('app.name', 'Mejillones') }}
        </span>

    </a>

    <nav class="navbar navbar-static-top">

        <!-- Sidebar toggle button-->
        <a href="#" class="sidebar-toggle"
           data-toggle="push-menu"
           role="button">

            <span class="sr-only">Toggle navigation</span>

        </a>

        <div class="navbar-custom-menu">

            <ul class="nav navbar-nav">

                <li class="dropdown user user-menu">

                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">

                        <img src="{{ asset('img/default-avatar.svg') }}"
                             alt="Avatar"
                             class="user-image"
                        >

                        <span class="hidden-xs">

                            {{ Auth::user()->name }}

                            <span class="caret"></span>

                        </span>

                    </a>

                    <ul class="dropdown-menu">

                        <li class="user-body">

                            <div class="pull-right">

                                <a class="btn btn-default btn-flat dropdown-item"
                                   href="{{ route('logout') }}"
                                   onclick="event.preventDefault();
                                   document.getElementById('logout-form').submit();">

                                    Salir

                                </a>
                                <form id="logout-form"
                                      action="{{ route('logout') }}"
                                      method="POST" style="display: none;">
                                    {{ csrf_field() }}
                                </form>

                            </div>

                        </li>

                    </ul>

                </li>

            </ul>

        </div>

    </nav>

</header>