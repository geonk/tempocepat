@extends('layouts.default')
{{--@if(Session::has(''))--}}
@section('content')
@include('layouts.header')
<div class="container">
    <h1>buat lookbook baru</h1>
    {!! Form::open(
        array (
            'url'     => '',
            'files'    => true,
            'class'    => 'form',
            'id'     => 'form-add-post',
            'role'    => 'form'
        )) !!}
        <div class="form-group{{ $errors->has('title') ? ' has-error' : '' }}">
            {!! Form::label('title', 'Lookbook Title', ['class'=>'col-md-4 control-label']) !!}
            <div class="col-md-6">
                {!! Form::text('title', null, ['class'=>'form-control']) !!}
                {!! $errors->first('title', '<p class="help-block error-text">:message</p>') !!}
            </div>
        </div>
        <div class="form-group{{ $errors->has('stores_id') ? ' has-error' : '' }}">
            {!! Form::label('stores_id', 'Store ID', ['class'=>'col-md-4 control-label']) !!}
            <div class="col-md-6">
                {!! Form::text('stores_id', null, ['class'=>'form-control']) !!}
                {!! $errors->first('stores_id', '<p class="help-block error-text">:message</p>') !!}
            </div>
        </div>
        <div class="form-group">
            <div class="col-md-4 col-md-offset-2">
                {!! Form::submit('Create the Lookbook', ['class'=>'btn btn-primary']) !!}
            </div>
        </div>
    {!! Form::close() !!}
</div>
@include('layouts.footer')
@stop
{{--@endif--}}