@extends('layouts.landpage')
@section('title', '.:Registro:.')

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

                <li class="active">Registro</li>

            </ol>

        </section>

        <section class="content">

            <div class="box">

                <div class="box-header with-border">

                    <h3 class="box-title">Registro</h3>

                    {{--<div class="box-tools pull-right">

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

                    </div>--}}
                </div>

                <div class="box-body">

                    <div class="row">

                        <div class="col-md-6 col-md-offset-3">

                            <form id="register-form"
                                  action="#"
                                  method="POST"
                                  class="form-horizontal" autocomplete="off">

                                {{ csrf_field() }}

                                <div class="box-solid">

                                    <div class="box-solid">

                                        <div class="box-body">

                                            <div class="form-group {{ $errors->has('username') ? ' has-error' : '' }}">

                                                <label for="username" class="col-sm-2 control-label">Usuario</label>

                                                <div class="col-sm-10">

                                                    <input type="text"
                                                           class="form-control"
                                                           id="username"
                                                           name="username"
                                                           value="{{ old('username') }}"
                                                           placeholder="Nombre De Usuario">

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
                                                           value="{{ old('password') }}"
                                                           placeholder="Contraseña">

                                                    @if ($errors->has('password'))

                                                        <span class="help-block">

                                                            <strong>{{ $errors->first('password') }}</strong>

                                                        </span>

                                                    @endif

                                                </div>

                                            </div>

                                            <div class="form-group {{ $errors->has('password') ? ' has-error' : '' }}">

                                                <label for="password_confirmation" class="col-sm-2 control-label">Repetir Contraseña</label>

                                                <div class="col-sm-10">

                                                    <input type="password"
                                                           class="form-control"
                                                           id="password_confirmation"
                                                           name="password_confirmation"
                                                           value="{{ old('password_confirmation') }}"
                                                           placeholder="Repita Contraseña">

                                                    {{--@if ($errors->has('password_confirmation'))

                                                        <span class="help-block">

                                                            <strong>{{ $errors->first('password_confirmation') }}</strong>

                                                        </span>

                                                    @endif--}}

                                                </div>

                                            </div>

                                            <div class="form-group {{ $errors->has('name') ? ' has-error' : '' }}">

                                                <label for="name" class="col-sm-2 control-label">Nombre</label>

                                                <div class="col-sm-10">

                                                    <input type="text"
                                                           class="form-control"
                                                           id="name"
                                                           name="name"
                                                           value="{{ old('name') }}"
                                                           placeholder="Nombre">

                                                    @if ($errors->has('name'))

                                                        <span class="help-block">

                                                            <strong>{{ $errors->first('name') }}</strong>

                                                        </span>

                                                    @endif

                                                </div>

                                            </div>

                                            <div class="form-group {{ $errors->has('lastname') ? ' has-error' : '' }}">

                                                <label for="lastname" class="col-sm-2 control-label">Apellidos</label>

                                                <div class="col-sm-10">

                                                    <input type="text"
                                                           class="form-control"
                                                           id="lastname"
                                                           name="lastname"
                                                           value="{{ old('lastname') }}"
                                                           placeholder="Apellido Paterno">

                                                    @if ($errors->has('lastname'))

                                                        <span class="help-block">

                                                            <strong>{{ $errors->first('lastname') }}</strong>

                                                        </span>

                                                    @endif

                                                </div>

                                            </div>

                                           {{-- <div class="form-group {{ $errors->has('maternal_lastname') ? ' has-error' : '' }}">

                                                <label for="maternal_lastname" class="col-sm-2 control-label">Apellido Materno</label>

                                                <div class="col-sm-10">

                                                    <input type="text"
                                                           class="form-control"
                                                           id="maternal_lastname"
                                                           name="maternal_lastname"
                                                           value="{{ old('maternal_lastname') }}"
                                                           placeholder="Apellido Materno">

                                                    @if ($errors->has('maternal_lastname'))

                                                        <span class="help-block">

                                                            <strong>{{ $errors->first('maternal_lastname') }}</strong>

                                                        </span>

                                                    @endif

                                                </div>

                                            </div>--}}

                                            <div class="form-group {{ $errors->has('ci') ? ' has-error' : '' }}">

                                                <label for="ci" class="col-sm-2 control-label">Carnet</label>

                                                <div class="col-sm-10">

                                                    <input type="text"
                                                           class="form-control"
                                                           id="ci"
                                                           name="ci"
                                                           value="{{ old('ci') }}"
                                                           placeholder="Cédula de Identidad">

                                                    @if ($errors->has('ci'))

                                                        <span class="help-block">

                                                            <strong>{{ $errors->first('ci') }}</strong>

                                                        </span>

                                                    @endif

                                                </div>

                                            </div>

                                            <div class="form-group {{ $errors->has('email') ? ' has-error' : '' }}">

                                                <label for="email" class="col-sm-2 control-label">Correo Electrónico</label>

                                                <div class="col-sm-10">

                                                    <input type="email"
                                                           class="form-control"
                                                           id="email"
                                                           name="email"
                                                           value="{{ old('email') }}"
                                                           placeholder="Correo Electrónico">

                                                    @if ($errors->has('email'))

                                                        <span class="help-block">

                                                            <strong>{{ $errors->first('email') }}</strong>

                                                        </span>

                                                    @endif

                                                </div>

                                            </div>

                                            <div class="form-group {{ $errors->has('phone') ? ' has-error' : '' }}">

                                                <label for="phone" class="col-sm-2 control-label">Telefono | Celular</label>

                                                <div class="col-sm-10">

                                                    <input type="text"
                                                           class="form-control"
                                                           id="phone"
                                                           name="phone"
                                                           value="{{ old('phone') }}"
                                                           placeholder="Telefono / Celular">

                                                    @if ($errors->has('phone'))

                                                        <span class="help-block">

                                                            <strong>{{ $errors->first('phone') }}</strong>

                                                        </span>

                                                    @endif

                                                </div>

                                            </div>

                                            <div class="form-group {{ $errors->has('type_subscription') ? ' has-error' : '' }}">


                                                <div class="col-sm-10">

                                                    <label for="type_subscription" class="col-sm-2 control-label">Role</label>
                                                    <div class="radio">
                                                        <label>
                                                            <input type="radio" name="type_subscription" id="type_subscription" value="3" checked>
                                                            ESTUDIANTE
                                                        </label>
                                                        <label>
                                                            <input type="radio" name="type_subscription" id="type_subscription" value="2">
                                                            DOCENTE
                                                        </label>
                                                    </div>

                                                </div>

                                            </div>

                                            <div class="form-group {{ $errors->has('fecha') ? ' has-error' : '' }}">
                                                    <label for="date" class="col-sm-2 control-label">Fecha de Nacimiento</label>

                                                    <div class="col-sm-10">
                                                        <input type="date" class="form-control pull-right" id="date">
                                                    </div>
                                                    <!-- /.input group -->

                                            </div>

                                        </div>

                                    </div>

                                    <div class="box-footer text-center">

                                        <div class="row">

                                            <div class="col-md-6 col-xs-6">

                                                <button type="submit"
                                                        id="Submit"
                                                        disabled="disabled"
                                                        class="btn btn-info btn-block">

                                                    Registrarse

                                                </button>

                                            </div>

                                            <div class="col-md-6 col-xs-6">

                                                <a href="/" class="btn btn-default btn-block">

                                                    Cancelar

                                                </a>

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
    <script>
        (function() {
            $('#register-form input').on('keyup change', function() {

                var toIterate = [];
                var empty = false;
                $('#register-form input').each(function() {
                    if ($(this).val() == '') {
                        empty = true;
                    }
                });

                if (empty) {
                    $('#Submit').prop('disabled', true);
                } else {
                    $('#Submit').prop('disabled', false);
                }
            });

            $('#register-form input:eq(0)').keyup(); // run the check
        })()
    </script>


@stop