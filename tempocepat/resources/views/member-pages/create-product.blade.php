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
            'url'     => 'product/post',
            'files'    => true,
            'class'    => 'form',
            'id'     => 'form-add-post',
            'role'    => 'form'
        )) !!}
        <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
            {!! Form::label('name', 'Product Name', ['class'=>'col-md-4 control-label']) !!}
            <div class="col-md-6">
                {!! Form::text('name', null, ['class'=>'form-control']) !!}
                {!! $errors->first('name', '<p class="help-block error-text">:message</p>') !!}
            </div>
        </div>
        <div class="form-group{{ $errors->has('product_image_1') ? ' has-error' : '' }}">
            {!! Form::label('product_image_1', 'Product Image - 1', ['class'=>'col-md-4 control-label']) !!}
            <div class="col-md-6">
                {!! Form::file('product_image_1', null, ['class'=>'form-control', 'id'=>'product_image_1']) !!}
                {!! $errors->first('product_image_1', '<p class="help-block error-text">:message</p>') !!}
            </div>
        </div>
        <div class="form-group{{ $errors->has('image') ? ' has-error' : '' }}">
            {!! Form::label('product_image_2', 'Product Image - 2', ['class'=>'col-md-4 control-label']) !!}
            <div class="col-md-6">
                {!! Form::file('product_image_2', null, ['class'=>'form-control', 'id'=>'product_image_2']) !!}
                {!! $errors->first('product_image_2', '<p class="help-block error-text">:message</p>') !!}
            </div>
        </div>
        <div class="form-group{{ $errors->has('product_image_3') ? ' has-error' : '' }}">
            {!! Form::label('product_image_3', 'Product Image - 3', ['class'=>'col-md-4 control-label']) !!}
            <div class="col-md-6">
                {!! Form::file('product_image_3', null, ['class'=>'form-control', 'id'=>'product_image_3']) !!}
                {!! $errors->first('product_image_3', '<p class="help-block error-text">:message</p>') !!}
            </div>
        </div>
        <div class="form-group{{ $errors->has('price') ? ' has-error' : '' }}">
            {!! Form::label('price', 'Price', ['class'=>'col-md-4 control-label']) !!}
            <div class="col-md-6">
                {!! Form::text('price', null, ['class'=>'form-control']) !!}
                {!! $errors->first('price', '<p class="help-block error-text">:message</p>') !!}
            </div>
        </div>
        <div class="form-group{{ $errors->has('sale') ? ' has-error' : '' }}">
            {!! Form::label('sale', 'Sale', ['class'=>'col-md-4 control-label']) !!}
            <div class="col-md-6">
                {!! Form::text('sale', null, ['class'=>'form-control']) !!}
                {!! $errors->first('sale', '<p class="help-block error-text">:message</p>') !!}
            </div>
        </div>
        {!! Form::hidden('stores_id', 1, ['class'=>'form-control']) !!}
        {!! Form::hidden('product_categories_id', 1, ['class'=>'form-control']) !!}
        <div class="form-group">
            <div class="col-md-4 col-md-offset-2">
                {!! Form::submit('Release this Product', ['class'=>'btn btn-primary']) !!}
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
@section('additional')
<script>
$(document).ready(function() {
$('#product_image_1').prop('disabled', false);
$('#product_image_2').prop('disabled', true);
$('#product_image_3').prop('disabled', true);
$('#product_image_1').bind('click', function(e){
if( $('product_image_1').val() != ""){
// file selected
$('#product_image_2').prop('disabled', false);
$('#product_image_2').bind('click', function(e){
if( $('product_image_2').val() != ""){
$('#product_image_3').prop('disabled', false);
}
});
}
else{
// no file selected
}
});
});
</script>
@append