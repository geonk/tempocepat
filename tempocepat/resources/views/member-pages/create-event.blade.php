@extends('authors.member-layout')
@section('member-content')
<div class="" id="page-content-wrapper">
    <!-- -->
    <div class="box">
        <div class="box-header with-border">
            <h3 class="box-title">
                <i class="fa fa-edit">
                </i>
                Buat Event Baru
            </h3>
        </div>
        {!! Form::open(
        array (
            'url'     => 'event/post',
            'method'=> 'post',
            'files'    => true,
            'class'    => 'form',
            'id'     => 'form-add-post',
            'role'    => 'form'
        )) !!}
        <div class="box-body">
            <div class="form-group{{ $errors->has('title') ? ' has-error' : '' }}">
                {!! Form::label('title', 'Event Title', ['class'=>'']) !!}
                <div class="">
                    {!! Form::text('title', null, ['class'=>'form-control']) !!}
                {!! $errors->first('title', '
                    <p class="help-block error-text">
                        :message
                    </p>
                    ') !!}
                </div>
            </div>
            <div class="form-group{{ $errors->has('body_info') ? ' has-error' : '' }}">
                {!! Form::label('body_info', 'Body Info', ['class'=>'']) !!}
                <div class="">
                    {!! Form::textarea('body_info', null, ['class'=>'form-control']) !!}
                {!! $errors->first('body_info', '
                    <p class="help-block error-text">
                        :message
                    </p>
                    ') !!}
                </div>
            </div>
            <div class="form-group{{ $errors->has('image') ? ' has-error' : '' }}">
                {!! Form::label('image', 'Event Image', ['class'=>'']) !!}
                <div class="">
                    {!! Form::file('image', null, ['class'=>'form-control']) !!}
                {!! $errors->first('image', '
                    <p class="help-block error-text">
                        :message
                    </p>
                    ') !!}
                </div>
            </div>
            {!! Form::hidden('users_id', 1, ['class'=>'form-control']) !!}
            {!! Form::hidden('users_role_id', 1, ['class'=>'form-control']) !!}
        </div>
        <div class="box-footer">
            {!! Form::submit('Publish this Event', ['class'=>'btn btn-primary']) !!}
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