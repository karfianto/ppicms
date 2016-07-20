@extends('layouts.account')
@section('title')
    {{ trans('user::auth.register') }} | @parent
@stop

@section('content')
    <div class="register-logo">
        <a href="{{ url('/') }}">{{ setting('core::site-name') }}</a>
    </div>

    <div class="register-box-body">
        <p class="login-box-msg">{{ trans('user::auth.register') }}</p>
        @include('flash::message')

        {!! Form::open(['route' => 'register.post']) !!}
            <div class="form-group has-feedback ">

                <input type="password" name="key" class="form-control" placeholder="Invitation code">
                <span class="glyphicon glyphicon-barcode form-control-feedback"></span>

            </div>
            <div class="form-group has-feedback {{ $errors->has('first_name') ? ' has-error has-feedback' : '' }}">
                <input type="first_name" name="first_name" class="form-control"
                       placeholder="First name" value="{{ old('first_name') }}">
                <span class="glyphicon glyphicon-font form-control-feedback"></span>
                {!! $errors->first('first_name', '<span class="help-block">:message</span>') !!}
            </div>
            <div class="form-group has-feedback {{ $errors->has('last_name') ? ' has-error has-feedback' : '' }}">
                <input type="last_name" name="last_name" class="form-control"
                       placeholder="Last name" value="{{ old('last_name') }}">
                <span class="glyphicon glyphicon-font form-control-feedback"></span>
                {!! $errors->first('last_name', '<span class="help-block">:message</span>') !!}
            </div>
            <div class="form-group has-feedback {{ $errors->has('email') ? ' has-error has-feedback' : '' }}">
                <input type="email" name="email" class="form-control"
                       placeholder="{{ trans('user::auth.email') }}" value="{{ old('email') }}">
                <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
                {!! $errors->first('email', '<span class="help-block">:message</span>') !!}
            </div>
            <div class="form-group has-feedback {{ $errors->has('password') ? ' has-error has-feedback' : '' }}">
                <input type="password" name="password" class="form-control" placeholder="{{ trans('user::auth.password') }}">
                <span class="glyphicon glyphicon-lock form-control-feedback"></span>
                {!! $errors->first('password', '<span class="help-block">:message</span>') !!}
            </div>
            <div class="form-group has-feedback {{ $errors->has('password_confirmation') ? ' has-error has-feedback' : '' }}">
                <input type="password" name="password_confirmation" class="form-control" placeholder="{{ trans('user::auth.password confirmation') }}">
                <span class="glyphicon glyphicon-log-in form-control-feedback"></span>
                {!! $errors->first('password_confirmation', '<span class="help-block">:message</span>') !!}
            </div>
            <div class="row">
                <div class="col-xs-12">
                    {!! app('captcha')->display(); !!}
                </div>
            </div><div class="row">
                <div class="col-xs-12">
                    <button type="submit" class="btn btn-primary btn-block btn-flat">{{ trans('user::auth.register me') }}</button>
                </div>
            </div>
        {!! Form::close() !!}

        <a href="{{ route('login') }}" class="text-center">{{ trans('user::auth.I already have a membership') }}</a>
    </div>
@stop
