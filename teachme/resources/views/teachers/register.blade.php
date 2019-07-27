@extends('layouts.master')
@section('title', '.:Registrar Docente:.')

@section('content')

    <div class="content-wrapper">

        <section class="content">

            <div class="box">

                <div class="box-header with-border">

                    <h3 class="box-title">Registro</h3>

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

                            <form id="register-form"
                                  action="{{ route('register') }}"
                                  method="POST"
                                  class="form-horizontal" autocomplete="off">

                                {{ csrf_field() }}

                                <div class="box-solid">

                                    <div class="box-solid">

                                        <div class="box-body">

                                            <div class="form-group {{ $errors->has('ci') ? ' has-error' : '' }}">

                                                <label for="ci" class="col-sm-2 control-label">Cédula de Identidad</label>

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

                                            <div class="form-group {{ $errors->has('type_subscription') ? ' has-error' : '' }}">

                                                <label for="type_subscription" class="col-sm-2 control-label">Tipo</label>

                                                <div class="col-sm-10">

                                                    <select class="form-control" name="type_subscription" id="type_subscription">

                                                        @foreach(['regular', 'traspaso', 'reincorporacion'] as $key => $type)

                                                            <option value="{{ $key }}"
                                                                    @if(old('type_subscription', '') == $key) selected @endif>

                                                                {{ $type }}

                                                            </option>

                                                        @endforeach

                                                    </select>

                                                    @if ($errors->has('type_subscription'))

                                                        <span class="help-block">

                                                            <strong>{{ $errors->first('type_subscription') }}</strong>

                                                        </span>

                                                    @endif

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

                                            <div class="form-group {{ $errors->has('paternal_lastname') ? ' has-error' : '' }}">

                                                <label for="paternal_lastname" class="col-sm-2 control-label">Apellido Paterno</label>

                                                <div class="col-sm-10">

                                                    <input type="text"
                                                           class="form-control"
                                                           id="paternal_lastname"
                                                           name="paternal_lastname"
                                                           value="{{ old('paternal_lastname') }}"
                                                           placeholder="Apellido Paterno">

                                                    @if ($errors->has('paternal_lastname'))

                                                        <span class="help-block">

                                                            <strong>{{ $errors->first('paternal_lastname') }}</strong>

                                                        </span>

                                                    @endif

                                                </div>

                                            </div>

                                            <div class="form-group {{ $errors->has('maternal_lastname') ? ' has-error' : '' }}">

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

                                        </div>

                                    </div>

                                    <div class="box-footer text-center">

                                        <div class="row">

                                            <div class="col-md-6 col-xs-6">

                                                <button type="submit" class="btn btn-info btn-block">

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

@endsection
