@extends('admin.layouts.app')
@section('content')
    {!! Form::open(['url' => route('productCreate',app()->getLocale()),'method' =>'post','files'=>true]) !!}

    <div class="content-box">
        <div class="row">
            <div class="col-lg-6">
                <div class="element-wrapper">
                    <h6 class="element-header">
                        @lang('admin.create_products')
                    </h6>
                    <div class="element-box">
                        <div class="row">
                            <div class="col-6">
                                <div
                                    class="form-group {{ $errors->has('title') ? ' has-error' : '' }}">
                                    {{ Form::label('title', __('product.title'), []) }}
                                    {{ Form::text('title', '', ['class' => 'form-control', 'no','placeholder'=>'Enter Title']) }}
                                    @if ($errors->has('title'))
                                        <span class="help-block">
                                    {{ $errors->first('title') }}
                                </span>
                                    @endif
                                </div>
                            </div>
                            <div class="col-6">
                                <div
                                    class="form-group {{ $errors->has('position') ? ' has-error' : '' }}">
                                    {{ Form::label('position', __('product.position'), []) }}
                                    {{ Form::text('position', '', ['class' => 'form-control', 'no','placeholder'=>'Enter Position']) }}
                                    @if ($errors->has('position'))
                                        <span class="help-block">
                                            {{ $errors->first('position') }}
                                        </span>
                                    @endif
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-6">
                                <div
                                    class="form-group {{ $errors->has('slug') ? ' has-error' : '' }}">
                                    {{ Form::label('slug', __('product.slug'), []) }}
                                    {{ Form::text('slug', '', ['class' => 'form-control', 'no','placeholder'=>'Enter Slug']) }}
                                    @if ($errors->has('slug'))
                                        <span class="help-block">
                                    {{ $errors->first('slug') }}
                                </span>
                                    @endif
                                </div>
                            </div>
                            <div class="col-6">
                                <div
                                    class="form-group {{ $errors->has('price') ? ' has-error' : '' }}">
                                    {{ Form::label('price', __('product.price'), []) }}
                                    {{ Form::text('price', '', ['class' => 'form-control', 'no','placeholder'=>'Enter Price']) }}
                                    @if ($errors->has('price'))
                                        <span class="help-block">
                                            {{ $errors->first('price') }}
                                        </span>
                                    @endif
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-6">
                                <div
                                    class="form-group {{ $errors->has('description') ? ' has-error' : '' }}">
                                    {{ Form::label('description', __('product.description'), []) }}
                                    {{ Form::textarea('description', '', ['class' => 'form-control', 'no','placeholder'=>'Enter Description']) }}
                                    @if ($errors->has('description'))
                                        <span class="help-block">
                                    {{ $errors->first('description') }}
                                </span>
                                    @endif
                                </div>
                            </div>
                            <div class="col-6">
                                <div
                                    class="form-group {{ $errors->has('content') ? ' has-error' : '' }}">
                                    {{ Form::label('content', __('product.content'), []) }}
                                    {{ Form::textarea('content', '', ['class' => 'form-control', 'no','placeholder'=>'Enter Content']) }}
                                    @if ($errors->has('content'))
                                        <span class="help-block">
                                            {{ $errors->first('content') }}
                                        </span>
                                    @endif
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-6">
                                <div class="form-check">
                                    <label class="form-check-label"><input class="form-check-input" name="status"
                                                                           type="checkbox">@lang('product.status')</label>
                                </div>
                            </div>
                            <div class="col-6">
                                <div
                                    class="form-group {{ $errors->has('release_date') ? ' has-error' : '' }}">
                                    {{ Form::label('release_date', __('product.date'), []) }}
                                    <div class="date-input">
                                        {{ Form::text('release_date', '', ['class' => 'form-control single-daterange', 'no','placeholder'=>'Release date']) }}
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="form-buttons-w">
                            <button class="btn btn-primary" type="submit"> @lang('product.create')</button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="element-wrapper">
                    <h6 class="element-header" style="padding-top: 16px;">
                    </h6>
                    <div class="element-box">
                        @if(count($features) > 0)
                            @foreach($features as $feature)
                                @if(count($feature->answer) > 0)
                                {{ Form::label('featurs',(count($feature->availableLanguage) > 0) ? $feature->availableLanguage[0]->title :$feature->language[0]->title , []) }}
                                <select name="features[{{$feature->id}}][]" class="form-control select2" multiple="true">
                                    @foreach($feature->answer as $answer)
                                        <option value="{{$answer->id}}">{{(count($answer->availableLanguage) > 0) ? $answer->availableLanguage[0]->title : $answer->language[0]->title }}</option>
                                    @endforeach
                                </select>
                                @endif
                            @endforeach
                        @endif
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
