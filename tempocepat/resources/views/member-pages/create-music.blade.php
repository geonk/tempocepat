@extends('authors.member-layout')
@section('member-content')
<div class="" id="page-content-wrapper">
    <!-- -->
    <div class="box">
        <div class="box-header with-border">
            <h3 class="box-title">
                <i class="fa fa-edit">
                </i>
                Buat music Baru
            </h3>
        </div>
    {!! Form::open(
        array (
            'url'     => 'music/post',
            'files'    => true,
            'class'    => 'form',
            'id'     => 'form-add-post',
            'role'    => 'form'
        )) !!}
        <div class="form-group{{ $errors->has('title') ? ' has-error' : '' }}">
            {!! Form::label('title', 'Title', ['class'=>'col-md-4 control-label']) !!}
            <div class="col-md-6">
                {!! Form::text('title', null, ['class'=>'form-control']) !!}
                {!! $errors->first('title', '<p class="help-block error-text">:message</p>') !!}
            </div>
        </div>
        <div class="form-group{{ $errors->has('description') ? ' has-error' : '' }}">
            {!! Form::label('description', 'Description', ['class'=>'col-md-4 control-label']) !!}
            <div class="col-md-6">
                {!! Form::textarea('description', null, ['class'=>'form-control']) !!}
                {!! $errors->first('description', '<p class="help-block error-text">:message</p>') !!}
            </div>
        </div>
        {!! Form::hidden('musician_id', 1, ['class'=>'form-control']) !!}
        {!! Form::hidden('music_categories_id', 1, ['class'=>'form-control']) !!}
        {!! Form::hidden('users_id', 1, ['class'=>'form-control']) !!}
        {!! Form::hidden('users_role_id', 1, ['class'=>'form-control']) !!}
        <div class="form-group">
            <div class="col-md-4 col-md-offset-2">
                {!! Form::submit('Launch this Music', ['class'=>'btn btn-primary']) !!}
            </div>
        </div>
    {!!Form::close() !!}
    </div>
    <!-- -->
</div>
<div class="" id="ads-wrapper">
    <img alt="" src="../../assets/img/ads6.jpg">
    </img>
</div>
@endsection