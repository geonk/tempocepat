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
            'url'     => 'store/post',
            'files'    => true,
            'class'    => 'form',
            'id'     => 'form-add-post',
            'role'    => 'form'
        )) !!}
        <div class="box-body">
        <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
            {!! Form::label('name', 'Store Name', ['class'=>'control-label']) !!}
            <div class="">
                {!! Form::text('name', null, ['class'=>'form-control']) !!}
                {!! $errors->first('name', '<p class="help-block error-text">:message</p>') !!}
            </div>
        </div>
        <div class="form-group{{ $errors->has('slogan') ? ' has-error' : '' }}">
            {!! Form::label('slogan', 'Store Slogan', ['class'=>'control-label']) !!}
            <div class="">
                {!! Form::text('slogan', null, ['class'=>'form-control']) !!}
                {!! $errors->first('slogan', '<p class="help-block error-text">:message</p>') !!}
            </div>
        </div>
        <div class="form-group{{ $errors->has('description') ? ' has-error' : '' }}">
            {!! Form::label('description', 'Description', ['class'=>'control-label']) !!}
            <div class="">
                {!! Form::textarea('description', null, ['class'=>'form-control']) !!}
                {!! $errors->first('description', '<p class="help-block error-text">:message</p>') !!}
            </div>
        </div>
        <div class="form-group{{ $errors->has('image') ? ' has-error' : '' }}">
            {!! Form::label('image', 'Store Image', ['class'=>'control-label']) !!}
            <div class="">
                {!! Form::file('image', null, ['class'=>'form-control']) !!}
                {!! $errors->first('image', '<p class="help-block error-text">:message</p>') !!}
            </div>
        </div>

        <div id="crop_wrapper">
          <img src="{{URL::to('/')}}/tempocepat/public/assets/img/oI750JKz_product_image.jpg">
          <div id="crop_div">
          </div>
        </div>

        <form method="post" action="/store/do_crop" onsubmit="return crop();">
            {!! Form::token() !!}
            {{-- <input type="hidden" name="store_id" value="{{ e($store->id) }}"> --}}
            <input type="hidden" value="" id="top" name="top">
            <input type="hidden" value="" id="left" name="left">
            <input type="hidden" value="" id="right" name="right">
            <input type="hidden" value="" id="bottom" name="bottom">
            <input type="submit" name="crop_image">
        </form>

        <div class="form-group{{ $errors->has('image_cover') ? ' has-error' : '' }}">
            {!! Form::label('image_cover', 'Store Cover Image', ['class'=>'control-label']) !!}
            <div class="">
                {!! Form::file('image_cover', null, ['class'=>'form-control']) !!}
                {!! $errors->first('image_cover', '<p class="help-block error-text">:message</p>') !!}
            </div>
        </div>
        </div>
        <div class="box-footer">
                {!! Form::submit('Create the Store', ['class'=>'btn btn-primary']) !!}
        </div>
    {!! Form::close() !!}
    </div>
    <!-- -->
</div>
<div class="" id="ads-wrapper">
    <img alt="" src="../../assets/img/ads6.jpg">
    </img>
</div>

<link rel="stylesheet" type="text/css" href="{{URL::asset('assets/stylesheets/crop_style.css')}}">
<script src="{{URL::asset('assets/scripts/jquery-ui.js')}}"></script>
<script type="text/javascript">

    $(function() {
      $( "#crop_div" ).draggable({ containment: "parent" });
    });
   
    function crop()
    {
      var posi = document.getElementById('crop_div');
      document.getElementById("top").value=posi.offsetTop;
      document.getElementById("left").value=posi.offsetLeft;
      document.getElementById("right").value=posi.offsetWidth;
      document.getElementById("bottom").value=posi.offsetHeight;
      return true;
    }

  </script>

@endsection