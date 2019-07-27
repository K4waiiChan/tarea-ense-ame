@extends('layouts.landpage')
@section('title', '.:Acceder:.')

@section('content')
    <div class="content-wrapper">

        <section class="content-header">

            <h1>

                &nbsp;

            </h1>

            <ol class="breadcrumb">

                <li>

                    <a href="{{ url('/') }}"><i class="fa fa-dashboard"></i>Inicio</a>

                </li>

                <li class="active">Ingresar</li>

            </ol>

        </section>

        <section class="content">

            <div class="box">

                <div class="box-header with-border">

                    <h3 class="box-title">Acceder</h3>

                    <div class="box-tools pull-right">

                        <button type="button"
                                class="btn btn-box-tool"
                                data-widget="collapse"
                                data-toggle="tooltip"
                                title="Collapse">

                            <i class="fa fa-minus"></i>

                        </button>

                        <button type="button"
                                class="btn btn-box-tool"
                                data-widget="remove"
                                data-toggle="tooltip"
                                title="Remove">

                            <i class="fa fa-times"></i>

                        </button>

                    </div>

                </div>

                <div class="box-body">

                    <div class="row">

                        <div class="col-md-6 col-md-offset-3">

                            <form id="login-form"
                                  action="{{ route('login') }}"
                                  method="POST"
                                  class="form-horizontal"
                                  autocomplete="off">

                                {{ csrf_field() }}

                                <div class="box-solid">

                                    <div class="box-body">

                                        <div class="form-group {{ $errors->has('username') ? ' has-error' : '' }}">

                                            <label for="text" class="col-sm-2 control-label">Usuario</label>

                                            <div class="col-sm-10">

                                                <input type="username"
                                                       class="form-control"
                                                       id="username"
                                                       name="username"
                                                       value="{{ old('username') }}"
                                                       placeholder="nombre de usuario"
                                                       required autofocus>

                                                @if ($errors->has('username'))

                                                    <span class="help-block">

                                                        <strong>{{ $errors->first('username') }}</strong>

                                                    </span>

                                                @endif

                                            </div>

                                        </div>

                                        <div class="form-group {{ $errors->has('password') ? ' has-error' : '' }}">

                                            <label for="password" class="col-sm-2 control-label">Contraseña</label>

                                            <div class="col-sm-10">

                                                <input type="password"
                                                       class="form-control"
                                                       id="password"
                                                       name="password"
                                                       placeholder="Contraseña">

                                                @if ($errors->has('password'))

                                                    <span class="help-block">

                                                        <strong>{{ $errors->first('password') }}</strong>

                                                    </span>
                                             {{--   @else

                                                    <span class="help-block">

                                                        <strong>Su contraseña es el CI. </strong>

                                                    </span>--}}

                                                @endif

                                            </div>

                                        </div>

                                    </div>

                                    <div class="box-footer text-center">

                                        <div class="row">

                                            <div class="col-md-6 col-xs-6">

                                                <button type="submit" class="btn btn-info btn-block">

                                                    Ingresar

                                                </button>

                                            </div>

                                            <div class="col-md-6 col-xs-6">

                                                <a href="/" class="btn btn-default btn-block">Cancelar</a>

                                            </div>

                                        </div>

                                    </div>

                                </div>

                            </form>

                        </div>

                    </div>

                </div>

            </div>

        </section>

    </div>

@endsection