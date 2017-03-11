@extends('authors.member-layout')
@section('member-content')
<div class="" id="page-content-wrapper">
    <!-- -->
    <div class="box">
        <div class="box-header with-border">
            <h3 class="box-title">
                <i class="fa fa-edit">
                </i>
                Buat musician Baru
            </h3>
        </div>
    {!! Form::open(
        array (
            'url'     => 'musician/post',
            'files'    => true,
            'class'    => 'form',
            'id'     => 'form-add-post',
            'role'    => 'form'
        )) !!}
        <div class="box-body">
        <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
            {!! Form::label('name', 'Name', ['class'=>'control-label']) !!}
            <div class="">
                {!! Form::text('name', null, ['class'=>'form-control']) !!}
                {!! $errors->first('name', '<p class="help-block error-text">:message</p>') !!}
            </div>
        </div>
        <div class="form-group{{ $errors->has('description') ? ' has-error' : '' }}">
            {!! Form::label('description', 'Description', ['class'=>'control-label']) !!}
            <div class="">
                {!! Form::textarea('description', null, ['class'=>'form-control']) !!}
                {!! $errors->first('description', '<p class="help-block error-text">:message</p>') !!}
            </div>
        </div>
        <div class="form-group{{ $errors->has('genre') ? ' has-error' : '' }}">
            {!! Form::label('genre', 'Genre', ['class'=>'control-label']) !!}
            <div class="">
                {!! Form::text('genre', null, ['class'=>'form-control']) !!}
                {!! $errors->first('genre', '<p class="help-block error-text">:message</p>') !!}
            </div>
        </div>
        <div class="form-group{{ $errors->has('image') ? ' has-error' : '' }}">
            {!! Form::label('image', 'Musician Image', ['class'=>'control-label']) !!}
            <div class="">
                {!! Form::file('image', null, ['class'=>'form-control']) !!}
                {!! $errors->first('image', '<p class="help-block error-text">:message</p>') !!}
            </div>
        </div>
        <div class="form-group{{ $errors->has('image_cover') ? ' has-error' : '' }}">
            {!! Form::label('image_cover', 'Musician Cover Image', ['class'=>'control-label']) !!}
            <div class="">
                {!! Form::file('image_cover', null, ['class'=>'form-control']) !!}
                {!! $errors->first('image_cover', '<p class="help-block error-text">:message</p>') !!}
            </div>
        </div>
        {!! Form::hidden('musician_categories_id', 1, ['class'=>'form-control']) !!}
        </div>
        <div class="box-footer">
                {!! Form::submit('Create the Musician', ['class'=>'btn btn-primary']) !!}
        </div>
    {!! Form::close() !!}
    </div>
    <!-- -->
</div>
<div class="" id="ads-wrapper">
    <img alt="" src="../../assets/img/ads6.jpg">
    </img>
</div>
@endsection