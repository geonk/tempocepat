<div id="login-popup" class="popup white-popup mfp-with-anim mfp-hide">
  <div class="popup-header">login</div>
  <div class="popup-form-wrapper">
    <div id="popup-form-social-media" class="popup-form"><span class="desc-text">Login using social media.</span><a id="login-g-plus" class="btn" onclick="displayalertmessage()">login google+</a><a id="login-facebook" class="btn" onclick="displayalertmessage()">login facebook</a></div>
    <div class="popup-form"><span class="desc-text">Login using our official authentification system.</span>
      <form role="form" method="POST" action="{{ url('/login') }}">
        <input type="hidden" name="_token" value="{{ csrf_token() }}">
        <input placeholder="Email" type="email" class="form-control" name="email" value="{{ old('email') }}">
        <input placeholder="Password" type="password" class="form-control" name="password">
        <button type="submit" class="btn">login</button>
      </form>
    </div>
  </div>
  <div class="popup-foot"><span class="popup-foot-text">Not have account yet? <a href="/signup">sign up now</a></span></div>
</div>
<header>
  <div class="container">
    <div class="logo"><a href="/"><img src="{{URL::asset('assets/images/logo-dark.png')}}"></a></div>
    <li class="list-main-menu"><a href="/"><span>home</span></a></li>
    <li class="list-main-menu"><a href="/events"><span>event info.</span></a></li>
    <li class="list-main-menu"><a href="/market"><span>merch market</span></a></li>
    <li class="list-main-menu"><a href="/garage"><span>indie garage</span></a></li>
    <li class="list-main-menu"><a href="/blog"><span>blog</span></a></li>
    @if (Auth::guest())
    <li id="li-login"><a href="#login-popup" data-effect="mfp-zoom-in" class="btn open-popup-link"><span>login</span></a></li>
    @else
    <li id="li-user"><a href="/dashboard"><span>{!! Auth::user()->name !!}</span><span class="circle-img-small"><img src="{{URL::to('/')}}/img/profiles/{{ Auth::user()->image }}"></span></a></li>
    @endif
    <li id="burger"><a href="#" class="menu-toggle">
        <div class="burger-icon">
          <div class="burger-bar"></div>
          <div class="burger-bar"></div>
          <div id="burger-half" class="burger-bar"></div>
        </div></a>
      <nav class="menu-side">
        <li class="list-main-menu-side"><a href="/"><span>home</span></a></li>
        <li class="list-main-menu-side"><a href="/events"><span>event info.</span></a></li>
        <li class="list-main-menu-side"><a href="/market"><span>merch market</span></a></li>
        <li class="list-main-menu-side"><a href="/garage"><span>indie garage</span></a></li>
        <li class="list-main-menu-side"><a href="/blog"><span>blog</span></a></li>
        <li id="li-login-side"><a href="#" class="btn"><span>login</span></a></li>
      </nav>
    </li>
  </div>
</header>