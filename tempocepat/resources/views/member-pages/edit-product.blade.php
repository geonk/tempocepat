@extends('authors.member-layout')
@section('member-content')
<div class="" id="page-content-wrapper">
    <!-- -->
    <div class="box">
        <div class="box-header with-border">
            <h3 class="box-title">
                <i class="fa fa-edit">
                </i>
                Buat product Baru
            </h3>
        </div>
    {!! Form::open(
        array (
            'url'     => 'product/update',
            'files'    => true,
            'class'    => 'form',
            'id'     => 'form-add-post',
            'role'    => 'form'
        )) !!}
        <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
            {!! Form::label('name', 'Product Name', ['class'=>'col-md-4 control-label']) !!}
            <div class="col-md-6">
                {!! Form::text('name', $product->name , ['class'=>'form-control']) !!}
                {!! $errors->first('name', '<p class="help-block error-text">:message</p>') !!}
            </div>
        </div>
        <div class="form-group{{ $errors->has('image') ? ' has-error' : '' }}">
            {!! Form::label('image', 'Product Image', ['class'=>'col-md-4 control-label']) !!}
            <br>
            <img src="{{URL::to('/')}}/assets/img/market/product/medium/{{ $product->image }}" alt="">
            <div class="col-md-6">
                {!! Form::file('image', null, ['class'=>'form-control']) !!}
                {!! $errors->first('image', '<p class="help-block error-text">:message</p>') !!}
            </div>
        </div>
        <div class="form-group{{ $errors->has('price') ? ' has-error' : '' }}">
            {!! Form::label('price', 'Price', ['class'=>'col-md-4 control-label']) !!}
            <div class="col-md-6">
                {!! Form::text('price', $product->price , ['class'=>'form-control']) !!}
                {!! $errors->first('price', '<p class="help-block error-text">:message</p>') !!}
            </div>
        </div>
        <div class="form-group{{ $errors->has('sale') ? ' has-error' : '' }}">
            {!! Form::label('sale', 'Sale', ['class'=>'col-md-4 control-label']) !!}
            <div class="col-md-6">
                {!! Form::text('sale', $product->sale, ['class'=>'form-control']) !!}
                {!! $errors->first('sale', '<p class="help-block error-text">:message</p>') !!}
            </div>
        </div>
        {!! Form::hidden('filename', $product->image, ['class'=>'form-control']) !!}
        {!! Form::hidden('stores_id', 1, ['class'=>'form-control']) !!}
        {!! Form::hidden('product_categories_id', 1, ['class'=>'form-control']) !!}
        {!! Form::hidden('id', $product->id, ['class'=>'form-control']) !!}
        <div class="form-group">
            <div class="col-md-4 col-md-offset-2">
                {!! Form::submit('Release this Product', ['class'=>'btn btn-primary']) !!}
            </div>
        </div>
    {!!Form::close() !!}

    <div class="box-footer">
        {!! Form::open(array('url'=>
                                     'product/deleteinside', 'method'=>
                                     'POST', 'style'=>
                                     'display:inline;')) !!}
                                     <div class="form-group" style="margin:0;">
                                         {!! Form::hidden('filename', $product->image) !!}
                                         {!! Form::token() !!}
                                         {!! Form::hidden('id', $product->id, array('class'=>
                                         'form-control')) !!}
                                         {!! Form::submit('Hapus Product Ini', array('class'=>
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