<!DOCTYPE HTML>
<html>
<head>
<title>The MultiGaming Room</title>
<link href="{{ asset('css/bootstrap.css') }}" rel='stylesheet' type='text/css' />
<!-- jQuery (necessary JavaScript plugins) -->
<script src="js/bootstrap.js"></script>
<!-- Custom Theme files -->
<link href="{{ asset('css/style.css') }}" rel='stylesheet' type='text/css' />
<link href="{{ asset('css/custom.css') }}" rel='stylesheet' type='text/css' />
<!-- Custom Theme files -->
<!--//theme-style-->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Game Box  Responsive web template, Bootstrap Web Templates, Flat Web Templates, Andriod Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyErricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>

<script src="{{ asset('js/jquery.min.js') }}"></script>

</head>

<!-- header -->

   <!--banner-info--> 

      <div class="container">
<nav class="navbar navbar-inverse navbar-fixed-top">
       <div class="top-menu">
       <span class="menu"></span>
          <ul class="nav1">
          <div style="float:left"><li><a href="{{url('/')}}">The Multigaming Room</a></li></div>
             <li class="{{ Request::is('/') ? 'active' : ' ' }}"><a href="{{url('/')}}">Accueil</a></li>
             <li class="{{ Request::is('jeu/show') ? 'active' : ' ' }}"><a href="{{url('jeu/show')}}">Jeux</a></li>
             <li><a href="#">Recherche</a></li>
             <li><a href="#">Forum</a></li>
             <li class="{{ Request::is('/') ? 'active' : ' ' }}"><a href="{{url('/messagerie')}}">Messagerie</a></li>
              @if (Auth::check())<li><a href="#">Administration</a></li>@endif
             @if (Auth::guest())<div style="float:right"><li><a href="{{ url('/register') }}">S'enregistrer</a></li>@endif|
              @if (Auth::guest())<li><a id="connectButton" href="#">Se connecter</a></li></div>
              @else (Auth::check())<li><a href="{{ url('/logout') }}">Déconnexion</a></li></div>@endif
          </ul>

       </div> 

       <div id="connect">

<form class="form-inline" action="{{ url('/login') }}">
  <div class="form-group">
    <input type="email" class="form-control" id="exampleInputName2" placeholder="Email">
  </div>
  <div class="form-group">
    <input type="password" class="form-control" id="exampleInputEmail2" placeholder="Mot de passe">
  </div>
  <button type="submit" class="btn btn-default">Connexion</button>
</form>

      </div>
      <div class="borderConnect"></div>
</nav>

</div>
<body>

      <div id="body">   
       @yield('content')
       </div>
  <!-- footer -->
<div class="copywrite">
         <div class="social" style="padding-left:15px">             
            <a href="#"><i class="facebook"></i></a>
</div>
   <div class="container">
     <p> © 2017 The Multigaming Room. Tout droits réservés |<a href="#">Contacter un administrateur</a></p>
   </div>
</div>
<!---->
</body>
</html>

   <!-- script-for-menu -->
            <script>
               $( "span.menu" ).click(function() {
              $( "ul.nav1" ).slideToggle( 300, function() {
              // Animation complete.
                });
                });


               $("#connectButton").click(function(){

                if ($('#connect').css('display') == 'block') {
                 $('#connect').slideUp(1000);
                }else{
                  $('#connect').slideDown(1000);
               
                }

               });

            </script>
          <!-- /script-for-menu -->