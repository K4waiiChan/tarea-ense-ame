@extends(Auth::user() ? 'layouts.master': 'layouts.landpage')
@section('title', '.:Home:.')

@section('content')

    <div class="content-wrapper">

        <section class="content">

            <div class="box">

                <div class="box-header with-border">

                    <h3 class="box-title">Teach-Me</h3>

                </div>

                <div class="box-body">

                   Bienvenido al sistema

                </div>

            </div>

        </section>

    </div>

@endsection
