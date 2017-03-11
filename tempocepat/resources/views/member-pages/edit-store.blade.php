@extends('authors.member-layout')
@section('member-content')
<div class="" id="page-content-wrapper">
    <!-- -->
    <div class="box">
        <div class="box-header with-border">
            <h3 class="box-title">
                <i class="fa fa-edit">
                </i>
                Buat store Baru
            </h3>
        </div>
    {!! Form::open(
        array (
            'url'     => 'store/update',
            'files'    => true,
            'class'    => 'form',
            'id'     => 'form-add-post',
            'role'    => 'form'
        )) !!}
        <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
            {!! Form::label('name', 'Store Name', ['class'=>'col-md-4 control-label']) !!}
            <div class="col-md-6">
                {!! Form::text('name', $store->name, ['class'=>'form-control']) !!}
                {!! $errors->first('name', '<p class="help-block error-text">:message</p>') !!}
            </div>
        </div>
        <div class="form-group{{ $errors->has('slogan') ? ' has-error' : '' }}">
            {!! Form::label('slogan', 'Store Slogan', ['class'=>'col-md-4 control-label']) !!}
            <div class="col-md-6">
                {!! Form::text('slogan', $store->slogan, ['class'=>'form-control']) !!}
                {!! $errors->first('slogan', '<p class="help-block error-text">:message</p>') !!}
            </div>
        </div>
        <div class="form-group{{ $errors->has('description') ? ' has-error' : '' }}">
            {!! Form::label('description', 'Description', ['class'=>'col-md-4 control-label']) !!}
            <div class="col-md-6">
                {!! Form::textarea('description', $store->description, ['class'=>'form-control']) !!}
                {!! $errors->first('description', '<p class="help-block error-text">:message</p>') !!}
            </div>
        </div>
        <div class="form-group{{ $errors->has('image') ? ' has-error' : '' }}">
            {!! Form::label('image', 'Store Image', ['class'=>'col-md-4 control-label']) !!}
            <br>
            <img src="{{URL::to('/')}}/assets/img/market/store/small/{{ $store->image }}" alt="">
            <div class="col-md-6">
                {!! Form::file('image', null, ['class'=>'form-control']) !!}
                {!! $errors->first('image', '<p class="help-block error-text">:message</p>') !!}
            </div>
        </div>
        <div class="form-group{{ $errors->has('image_cover') ? ' has-error' : '' }}">
            {!! Form::label('image_cover', 'Store Cover Image', ['class'=>'col-md-4 control-label']) !!}
            <br>
            <img src="{{URL::to('/')}}/assets/img/market/store/small/{{ $store->image_cover }}" alt="">
            <div class="col-md-6">
                {!! Form::file('image_cover', null, ['class'=>'form-control']) !!}
                {!! $errors->first('image_cover', '<p class="help-block error-text">:message</p>') !!}
            </div>
        </div>
        {!! Form::hidden('filename', $store->image, ['class'=>'form-control']) !!}
        {!! Form::hidden('id', $store->id, ['class'=>'form-control']) !!}
        <div class="form-group">
            <div class="col-md-4 col-md-offset-2">
                {!! Form::submit('Update the Store', ['class'=>'btn btn-primary']) !!}
            </div>
        </div>
    {!! Form::close() !!}

    <div class="box-footer">
        {!! Form::open(array('url'=>
                                     'store/deleteinside', 'method'=>
                                     'POST', 'style'=>
                                     'display:inline;')) !!}
                                     <div class="form-group" style="margin:0;">
                                         {!! Form::hidden('filename', $store->image) !!}
                                         {!! Form::token() !!}
                                         {!! Form::hidden('id', $store->id, array('class'=>
                                         'form-control')) !!}
                                         {!! Form::submit('Hapus Store Ini', array('class'=>
                                         'btn btn-danger delete-confirm', 'style'=>'color:white;')) !!}
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