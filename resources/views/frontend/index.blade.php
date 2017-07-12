<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>{{$configs->menu_title}}</title>
<meta name="description" content="">
<meta name="author" content="">
<meta name="csrf-token" content="{{ csrf_token() }}">

<!-- Favicons
    ================================================== -->
<link rel="shortcut icon" href="assets/frontend/img/favicon.ico" type="image/x-icon">
<link rel="apple-touch-icon" href="assets/frontend/img/apple-touch-icon.png">
<link rel="apple-touch-icon" sizes="72x72" href="assets/frontend/img/apple-touch-icon-72x72.png">
<link rel="apple-touch-icon" sizes="114x114" href="assets/frontend/img/apple-touch-icon-114x114.png">

<!-- Bootstrap -->
<link rel="stylesheet" type="text/css"  href="assets/frontend/css/bootstrap.css">
<link rel="stylesheet" type="text/css" href="assets/frontend/fonts/font-awesome/css/font-awesome.css">

<!-- Stylesheet
    ================================================== -->
<link rel="stylesheet" type="text/css"  href="assets/frontend/css/style.css">
<link href="https://fonts.googleapis.com/css?family=Raleway:300,400,500,600,700" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Rochester" rel="stylesheet">

<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
<!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body id="page-top" data-spy="scroll" data-target=".navbar-fixed-top">
<!-- Navigation
    ==========================================-->
<nav id="menu" class="navbar navbar-default navbar-fixed-top">
  <div class="container">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1"> <span class="sr-only">Toggle navigation</span> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
        <li><a href="#features" class="page-scroll">SPESİYAL</a></li>
        <li><a href="#about" class="page-scroll">HAKKIMIZDA</a></li>
        <li><a href="#restaurant-menu" class="page-scroll">MENÜ</a></li>
        <li><a href="#team" class="page-scroll">ŞEF</a></li>
        <li><a href="#contact" class="page-scroll">İLETİŞİM</a></li>
      </ul>
    </div>
    <!-- /.navbar-collapse -->
  </div>
</nav>
<!-- Header -->
<header id="header">
  <div class="intro">
    <div class="overlay">
      <div class="container">
        <div class="row">
          <div class="intro-text">
            <h1>{{$configs->menu_title}}</h1>
            <p>Rezervasyon: {{$configs->menu_phone}}</p>
          </div>
        </div>
      </div>
    </div>
  </div>
</header>
<!-- Features Section -->
<div id="features" class="text-center">
  <div class="container">
    <div class="section-title">
      <h2>Özel Spesiyaller</h2>
    </div>
    <div class="row">
      <div class="col-xs-12 col-sm-4">
        <div class="features-item">
          <h3>Lorem ipsum dolor</h3>
          <img src="assets/frontend/img/specials/1.jpg" class="img-responsive" alt="">
          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis sed dapibus leo nec ornare diam sed commodo.</p>
        </div>
      </div>
      <div class="col-xs-12 col-sm-4">
        <div class="features-item">
          <h3>Consectetur adipiscing</h3>
          <img src="assets/frontend/img/specials/2.jpg" class="img-responsive" alt="">
          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis sed dapibus leo nec ornare diam sed commodo.</p>
        </div>
      </div>
      <div class="col-xs-12 col-sm-4">
        <div class="features-item">
          <h3>Duis sed dapibus</h3>
          <img src="assets/frontend/img/specials/3.jpg" class="img-responsive" alt="">
          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis sed dapibus leo nec ornare diam sed commodo.</p>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- About Section -->
<div id="about">
  <div class="container-fluid">
    <div class="row">
      <div class="col-xs-12 col-md-6 about-img"> </div>
      <div class="col-xs-12 col-md-3 col-md-offset-1">
        <div class="about-text">
          <div class="section-title">
            <h2>Hakkımızda</h2>
          </div>
          {{$configs->about_page}}
        </div>
      </div>
    </div>
  </div>
</div>
<!-- Restaurant Menu Section -->
<div id="restaurant-menu">
  <div class="container">
    <div class="section-title text-center">
      <h2>Menuler</h2>
    </div>

    @foreach($menus as $i=>$menu)
    @if($i%2==1)<div class="row">@endif
          <div class="col-xs-12 col-sm-6">
            <div class="menu-section">
              <h2 class="menu-section-title">{{$menu->title}}</h2>
              @foreach($menu->details as $detail)
                <div class="menu-item">
                  <div class="menu-item-name">{{$detail->title}}</div>
                  <div class="menu-item-price">₺ {{$detail->price}} </div>
                  <div class="menu-item-description">{{$detail->content}}</div>
                  <a data-id="{{$detail->id}}" data-content="{{$detail->content}}" data-title="{{$detail->title}}" data-price="{{$detail->price}}" href="#siparisver" style="margin-top:15px;" class="addToCart page-scroll btn btn-danger btn-sm pull-left">Sipariş Ver</a>
                </div>
                <div class="clearfix"></div>
              @endforeach
            </div>
          </div>
      @if($i%2==1)</div>@endif
    @endforeach
  </div>
</div>
<!-- Gallery Section -->
<div id="gallery">
  <div class="container-fluid">
    <div class="row">
      <div class="col-xs-6 col-md-3">
        <div class="gallery-item"> <img src="assets/frontend/img/gallery/01.jpg" class="img-responsive" alt=""></div>
      </div>
      <div class="col-xs-6 col-md-3">
        <div class="gallery-item"> <img src="assets/frontend/img/gallery/02.jpg" class="img-responsive" alt=""></div>
      </div>
      <div class="col-xs-6 col-md-3">
        <div class="gallery-item"> <img src="assets/frontend/img/gallery/03.jpg" class="img-responsive" alt=""></div>
      </div>
      <div class="col-xs-6 col-md-3">
        <div class="gallery-item"> <img src="assets/frontend/img/gallery/04.jpg" class="img-responsive" alt=""></div>
      </div>
    </div>
  </div>
</div>
<!-- Team Section -->
<div id="team">
  <div class="container">
    <div id="row">
      <div class="col-md-6">
        <div class="col-md-10 col-md-offset-1">
          <div class="section-title">
            <h2>ŞEF</h2>
          </div>
          {{$configs->chef_page}}
        </div>
      </div>
      <div class="col-md-6">
        <div class="team-img"><img src="assets/frontend/img/chef.jpg" alt="..."></div>
      </div>
    </div>
  </div>
</div>
<!-- Contact Section -->
<div id="contact" class="text-center">
  <div class="container text-center">
    <div class="col-md-4">
      <h3>Rezervasyon</h3>
      <div class="contact-item">
        <p>Bizi Arayın</p>
        <p>{{$configs->reservation_phone}}</p>
      </div>
    </div>
    <div class="col-md-4">
      <h3>Adresimiz</h3>
      <div class="contact-item">
        {{$configs->address}}
      </div>
    </div>
    <div class="col-md-4">
      <h3>Çalışma Saatlerimiz</h3>
      <div class="contact-item">
         {{$configs->working_hours}}
      </div>
    </div>
  </div>
  <div class="container">
    <div class="section-title text-center">
      <h3 id="siparisver">SİPARİŞ VER</h3>
    </div>
    <div class="col-md-8 col-md-offset-2">
      @include('flash::message')
      <form action="/siparis-ver" method="post">
         {{ csrf_field() }}
        <div class="row">
          <div class="col-md-6">
            <div class="form-group">
              <input type="hidden" name="menu_id">
              <input value="{{ old('menu_title') }}" type="text" name="menu_title" placeholder="Bir Menü Seçiniz" class="form-control" disabled>
            </div>
          </div>
          <div class="col-md-6">
            <div class="form-group">
              <input value="{{ old('menu_price') }}" type="text" name="menu_price" placeholder="Bir Menü Seçiniz" class="form-control" disabled>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-6">
            <div class="form-group">
              <input value="{{ old('full_name') }}" type="text" name="full_name" class="form-control" placeholder="Adınız Soyadınız" required="required">
            </div>
          </div>
          <div class="col-md-6">
            <div class="form-group">
              <input value="{{ old('phone') }}" type="text" name="phone" class="form-control" placeholder="Telefon Numaranız" required="required">
            </div>
          </div>
        </div>
        <div class="form-group">
          <textarea name="address" class="form-control" rows="4" placeholder="Adresiniz" required="required">{{ old('address') }}</textarea>
          <p class="help-block text-danger"></p>
        </div>
        <button type="submit" class="btn btn-custom btn-lg">Sipariş Ver</button>
      </form>
    </div>
  </div>
</div>
<div id="footer">
  <div class="container text-center">
    <div class="col-md-6">
      {{$configs->copyright}}
    </div>
    <div class="col-md-6">
      <div class="social">
        <ul>
          <li><a target="_blank" href="{{$configs->facebook}}"><i class="fa fa-facebook"></i></a></li>
          <li><a target="_blank" href="{{$configs->twitter}}"><i class="fa fa-twitter"></i></a></li>
          <li><a target="_blank" href="{{$configs->youtube}}"><i class="fa fa-youtube"></i></a></li>
        </ul>
      </div>
    </div>
  </div>
</div>
<script type="text/javascript" src="assets/frontend/js/jquery.1.11.1.js"></script>
<script type="text/javascript" src="assets/frontend/js/bootstrap.js"></script>
<script type="text/javascript" src="assets/frontend/js/SmoothScroll.js"></script>
<script type="text/javascript" src="assets/frontend/js/main.js"></script>
</body>
</html>
