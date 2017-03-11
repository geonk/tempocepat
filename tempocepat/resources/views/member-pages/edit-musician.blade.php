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
            'url'     => 'musician/update',
            'files'    => true,
            'class'    => 'form',
            'id'     => 'form-add-post',
            'role'    => 'form'
        )) !!}
        <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
            {!! Form::label('name', 'Name', ['class'=>'col-md-4 control-label']) !!}
            <div class="col-md-6">
                {!! Form::text('name', $musician->name, ['class'=>'form-control']) !!}
                {!! $errors->first('name', '<p class="help-block error-text">:message</p>') !!}
            </div>
        </div>
        <div class="form-group{{ $errors->has('description') ? ' has-error' : '' }}">
            {!! Form::label('description', 'Description', ['class'=>'col-md-4 control-label']) !!}
            <div class="col-md-6">
                {!! Form::textarea('description', $musician->description, ['class'=>'form-control']) !!}
                {!! $errors->first('description', '<p class="help-block error-text">:message</p>') !!}
            </div>
        </div>
        <div class="form-group{{ $errors->has('image') ? ' has-error' : '' }}">
            {!! Form::label('image', 'Musician Image', ['class'=>'col-md-4 control-label']) !!}
            <br>
            <img src="{{URL::to('/')}}/assets/img/garage/musician/small/{{ $musician->image }}" alt="">
            <div class="col-md-6">
                {!! Form::file('image', null, ['class'=>'form-control']) !!}
                {!! $errors->first('image', '<p class="help-block error-text">:message</p>') !!}
            </div>
        </div>
        <div class="form-group{{ $errors->has('image_cover') ? ' has-error' : '' }}">
            {!! Form::label('image_cover', 'MUsician Cover Image', ['class'=>'col-md-4 control-label']) !!}
            <br>
            <img src="{{URL::to('/')}}/assets/img/garage/musician/small/{{ $musician->image }}" alt="">
            <div class="col-md-6">
                {!! Form::file('image_cover', null, ['class'=>'form-control']) !!}
                {!! $errors->first('image_cover', '<p class="help-block error-text">:message</p>') !!}
            </div>
        </div>
        {!! Form::hidden('musician_categories_id', 1, ['class'=>'form-control']) !!}
        {!! Form::hidden('filename', $musician->image, ['class'=>'form-control']) !!}
        {!! Form::hidden('id', $musician->id, ['class'=>'form-control']) !!}
        <div class="form-group">
            <div class="col-md-4 col-md-offset-2">
                {!! Form::submit('Create the Musician', ['class'=>'btn btn-primary']) !!}
            </div>
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