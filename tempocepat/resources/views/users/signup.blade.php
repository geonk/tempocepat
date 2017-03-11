@extends('layouts.default')
{{--@if(Session::has(''))--}}
@section('content')

    <link rel="stylesheet" type="text/css" href="{{URL::asset('assets/stylesheets/signup.css')}}">
    <link rel="stylesheet" type="text/css" href="{{URL::asset('assets/stylesheets/signup-large.css')}}">
    <link rel="stylesheet" type="text/css" href="{{URL::asset('assets/stylesheets/signup-medium.css')}}" media="only screen and (min-width:768px) and (max-width:980px)">
    <link rel="stylesheet" type="text/css" href="{{URL::asset('assets/stylesheets/signup-small.css')}}" media="only screen and (min-width:600px) and (max-width:767px)">
    <link rel="stylesheet" type="text/css" href="{{URL::asset('assets/stylesheets/signup-extrasmall.css')}}" media="only screen and (min-width:300px) and (max-width:599px)">
  
    {{-- <link rel="stylesheet" type="text/css" href="{{URL::asset('assets/stylesheets/signup.css')}}"> --}}

<div id="full-image-bg">
  <div class="container">
    <div class="before-signup-form-wrapper">
      <div class="before-signup-form">
        <div class="logo-wrapper"><a href="/"><span class="logo"></span></a></div>
        <h1>Keep Join Us!</h1>
        <h2>Be a Part of Indonesian Music Community</h2>
        <p>We are TempoCepat, lorem ipsum dolor sit amet. Des Dolores inup siamat di opel norema. lorem ipsum dolor sit amet. Des Dolores inup siamat di opel norema. lorem ipsum dolor sit amet. Des Dolores inup siamat di opel norema. lorem ipsum dolor sit amet.</p>
        <div class="icons-wrapper">
          <div class="icon-item"><span class="icon-area">
              <div id="events-area" class="icon-core"></div></span><span class="icon-text">music event information</span></div>
          <div class="icon-item"><span class="icon-area">
              <div id="market-area" class="icon-core"></div></span><span class="icon-text">merchandise market</span></div>
          <div class="icon-item"><span class="icon-area">
              <div id="garage-area" class="icon-core"></div></span><span class="icon-text">indie music garage</span></div>
        </div>
      </div>
    </div>
    <div class="signup-form-wrapper">
      <div class="signup-form">
        <div class="signup-form-header">register</div>
        <div class="signup-form-all">
          <div id="signup-form-social-media" class="signup-form-item"><span class="desc-text">Sign up using social media.</span><a id="signup-g-plus" class="btn" onclick="displayalertmessage()">google+</a><a id="signup-facebook" class="btn" onclick="displayalertmessage()">facebook</a></div>
          <div class="signup-form-item"><span class="desc-text">Sign up using our official authentification system.</span>

             {!! Form::open(array ('url' =>
            'user/store','files'=>
            true,'class'=>
            'form', 'id' =>
            'form-add-post', 'role'=>
            'form')) !!}
                <!-- { !! Form::token() !!} -->
                <span class="line-input">
                  <label>Full Name</label>
                  <input name="fullname"></span>
                  @if($errors->has())
                      {!! $errors->
                      first('fullname', '
                      <span class="error-text">
                          :message
                      </span>
                      ') !!}
                  @endif
                  <span id="sex" class="line-input">
                  <label>Sex Type</label>
                  <select name="sex_type">
                    <option value="male">Male</option>
                    <option value="female">Female</option>
                  </select></span>
                  <span id="birthday" class="line-input">
                  <label>Birthday</label>
                  <select name="birthday_day" id="day">
                    <option value="1">1</option>
                    <option value="2">2</option>
                  </select>
                  <select name="birthday_month" id="month">
                    <option value="1">January</option>
                    <option value="2">February</option>
                  </select>
                  <input type="text" placeholder="year" name="birthday_year"></span>
                  <span id="address" class="line-input">
                  <label>Address</label>
                  <textarea name="address"></textarea></span>
                  <span class="line-input">
                  <label>Email</label>
                  <input name="email"></span>
                  @if($errors->has())
                      {!! $errors->
                      first('email', '
                      <span class="error-text">
                          :message
                      </span>
                      ') !!}
                  @endif
                  <span class="line-input">
                  <label>Username</label>
                  <input name="name"></span>
                  @if($errors->has())
                      {!! $errors->
                      first('name', '
                      <span class="error-text">
                          :message
                      </span>
                      ') !!}
                  @endif
                  <span class="line-input">
                  <label>Password</label>
                  <input name="password" type="password"></span>
                  @if($errors->has())
                      {!! $errors->
                      first('password', '
                      <span class="error-text">
                          :message
                      </span>
                      ') !!}
                  @endif
                  <span class="line-input">
                  <label>Confirm. Password</label>
                  <input name="password_confirmation" type="password"></span>
                  @if($errors->has())
                      {!! $errors->
                      first('password_confirmation', '
                      <span class="error-text">
                          :message
                      </span>
                      ') !!}
                  @endif
                  <input name="role_id" type="hidden" value="1" />
                <button type="submit" class="btn">register</button>
              {!!Form::close() !!}

          </div>
        </div>
        <div class="signup-foot"><span class="signup-foot-text">Any question? Please go to <a href="/info/faq">F.A.Q</a></span></div>
      </div>
    </div>
  </div>
</div>

@stop
{{--@endif--}}
