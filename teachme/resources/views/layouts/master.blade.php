<!DOCTYPE html>
<html>

    <head>

        @include('common.head')

        @yield('styles')

    </head>

    <body class="hold-transition skin-blue sidebar-collapse sidebar-mini">

        <div class="wrapper">

            @include('common.header')

            @include('common.sidebar')

            @yield('content')

            @include('common.footer')

        </div>

        <script src="{{ asset('js/mejillones.js') }}"></script>

        @yield('scripts')

    </body>

</html>