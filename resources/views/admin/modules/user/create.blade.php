@extends('admin.layouts.app')
@section('content')
    {!! Form::open(['url' => route('userCreate',app()->getLocale()),'method' =>'post','files'=>true]) !!}

    <div class="content-box">
        <div class="row">
            <div class="col-lg-6">
                <div class="element-wrapper">
                    <h6 class="element-header">
                        @lang('admin.create_user')
                    </h6>
                    <div class="element-box">
                        <div class="row">
                            <div class="col-6">
                                <div
                                    class="form-group {{ $errors->has('first_name') ? ' has-error' : '' }}">
                                    {{ Form::label('first_name', __('user.first_name'), []) }}
                                    {{ Form::text('first_name', '', ['class' => 'form-control', 'no','placeholder'=>'Enter First Name']) }}
                                    @if ($errors->has('first_name'))
                                        <span class="help-block">
                                    {{ $errors->first('first_name') }}
                                </span>
                                    @endif
                                </div>
                            </div>
                            <div class="col-6">
                                <div
                                    class="form-group {{ $errors->has('last_name') ? ' has-error' : '' }}">
                                    {{ Form::label('last_name', __('user.last_name'), []) }}
                                    {{ Form::text('last_name', '', ['class' => 'form-control', 'no','placeholder'=>'Enter Last Name']) }}
                                    @if ($errors->has('last_name'))
                                        <span class="help-block">
                                            {{ $errors->first('last_name') }}
                                        </span>
                                    @endif
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-6">
                                <div
                                    class="form-group {{ $errors->has('phone') ? ' has-error' : '' }}">
                                    {{ Form::label('phone', __('user.phone'), []) }}
                                    {{ Form::text('phone', '', ['class' => 'form-control', 'no','placeholder'=>'Enter Phone']) }}
                                    @if ($errors->has('phone'))
                                        <span class="help-block">
                                    {{ $errors->first('phone') }}
                                </span>
                                    @endif
                                </div>
                            </div>
                            <div class="col-6">
                                <div
                                    class="form-group {{ $errors->has('id_number') ? ' has-error' : '' }}">
                                    {{ Form::label('id_number', __('user.p_id'), []) }}
                                    {{ Form::text('id_number', '', ['class' => 'form-control', 'no','placeholder'=>'Enter Personal ID']) }}
                                    @if ($errors->has('id_number'))
                                        <span class="help-block">
                                            {{ $errors->first('id_number') }}
                                        </span>
                                    @endif
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-6">
                                <div
                                    class="form-group {{ $errors->has('address') ? ' has-error' : '' }}">
                                    {{ Form::label('address', __('user.address'), []) }}
                                    {{ Form::text('address', '', ['class' => 'form-control', 'no','placeholder'=>'Enter Address']) }}
                                    @if ($errors->has('address'))
                                        <span class="help-block">
                                            {{ $errors->first('address') }}
                                        </span>
                                    @endif
                                </div>
                            </div>
                            <div class="col-6">
                                <div
                                        class="form-group {{ $errors->has('role') ? ' has-error' : '' }}">
                                    {{ Form::label('role', __('user.role'), []) }}
                                    {{ Form::select('role',(count($rolesArray) > 0) ? $rolesArray : [],'',  ['class' => 'form-control', 'no']) }}
                                    @if ($errors->has('role'))
                                        <span class="help-block">
                                            {{ $errors->first('role') }}
                                        </span>
                                    @endif
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-6">
                                <div
                                        class="form-group {{ $errors->has('email') ? ' has-error' : '' }}">
                                    {{ Form::label('email', __('user.mail'), []) }}
                                    {{ Form::email('email', '', ['class' => 'form-control', 'no','placeholder'=>'Enter Email']) }}
                                    @if ($errors->has('email'))
                                        <span class="help-block">
                                    {{ $errors->first('email') }}
                                </span>
                                    @endif
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-6">
                                <div
                                    class="form-group {{ $errors->has('password') ? ' has-error' : '' }}">
                                    {{ Form::label('password', __('user.password'), []) }}
                                    {{ Form::password('password', ['class' => 'form-control', 'no','autocomplete' => 'off']) }}
                                    @if ($errors->has('password'))
                                        <span class="help-block">
                                    {{ $errors->first('password') }}
                                </span>
                                    @endif
                                </div>
                            </div>
                            <div class="col-6">
                                <div
                                    class="form-group {{ $errors->has('password_confirmation') ? ' has-error' : '' }}">
                                    {{ Form::label('password_confirmation', __('user.re_password'), []) }}
                                    {{ Form::password('password_confirmation', ['class' => 'form-control', 'no','autocomplete' => 'off']) }}
                                    @if ($errors->has('password_confirmation'))
                                        <span class="help-block">
                                            {{ $errors->first('password_confirmation') }}
                                        </span>
                                    @endif
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-6">
                                <div class="form-check">
                                    <label class="form-check-label"><input class="form-check-input" name="status"
                                                                           type="checkbox">@lang('user.status')</label>
                                </div>
                            </div>
                        </div>

                        <div class="form-buttons-w">
                            <button class="btn btn-primary" type="submit"> @lang('user.create')</button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="element-wrapper">
                    <h6 class="element-header" style="padding-top: 16px;">
                    </h6>
                    <div class="element-box">
                        <div class="form-group">
                            <div class="input-images"></div>
                            @if ($errors->has('images'))
                                <span class="help-block">
                                            {{ $errors->first('images') }}
                                        </span>
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    {!! Form::close() !!}
@endsection
