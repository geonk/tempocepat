@extends('layouts.default')
{{--@if(Session::has(''))--}}
@section('content')
@include('layouts.header')
<div class="container">
    <h1>buat product category baru</h1>
    {!! Form::open(
        array (
            'url'     => '',
            'files'    => true,
            'class'    => 'form',
            'id'     => 'form-add-post',
            'role'    => 'form'
        )) !!}
        <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
            {!! Form::label('name', 'Store Name', ['class'=>'col-md-4 control-label']) !!}
            <div class="col-md-6">
                {!! Form::text('name', null, ['class'=>'form-control']) !!}
                {!! $errors->first('name', '<p class="help-block error-text">:message</p>') !!}
            </div>
        </div>
        <div class="form-group{{ $errors->has('initial') ? ' has-error' : '' }}">
            {!! Form::label('initial', 'Initial', ['class'=>'col-md-4 control-label']) !!}
            <div class="col-md-6">
                {!! Form::text('initial', null, ['class'=>'form-control']) !!}
                {!! $errors->first('initial', '<p class="help-block error-text">:message</p>') !!}
            </div>
        </div>
        <div class="form-group{{ $errors->has('parent_id') ? ' has-error' : '' }}">
            {!! Form::label('parent_id', 'Parent ID', ['class'=>'col-md-4 control-label']) !!}
            <div class="col-md-6">
                {!! Form::text('parent_id', null, ['class'=>'form-control']) !!}
                {!! $errors->first('parent_id', '<p class="help-block error-text">:message</p>') !!}
            </div>
        </div>
        <div class="form-group">
            <div class="col-md-4 col-md-offset-2">
                {!! Form::submit('Create the Product Category', ['class'=>'btn btn-primary']) !!}
            </div>
        </div>
    {!! Form::close() !!}
</div>
@include('layouts.footer')
@stop
{{--@endif--}}