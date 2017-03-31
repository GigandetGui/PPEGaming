@extends('default')
@section('content')
     <div class="clearfix"></div>
     </div>
   </div>
</div>
<!-- banner -->
   <!-- Slider-starts-Here -->
   <script src="js/responsiveslides.min.js"></script>
   <script>
    $(function () {
      $("#slider").responsiveSlides({
      auto:true,
      nav: false,
      speed: 500,
      namespace: "callbacks",
      pager:true,
      });
    });
    
     </script>

   <div class="slider">
      <div class="callbacks_container">
        <ul class="rslides" id="slider">
        
          <div class="slid banner1">
              <div class="caption">
                <h3>Counter Strike Global Offensive</h3>
                <p>Sortie de la nouvelle map : Canal.
                Ainsi que de la nouvelle caisse de skins</p>
              </div>
          </div>
        
        
           <div class="slid banner2"> 
              <div class="caption">
                <h3>League of Legends</h3>
                <p>Arrivée de Camille</p>
              </div>
           </div>
        
        
          <div class="slid banner3">  
            <div class="caption">
              <h3>Overwatch</h3>
              <p>Nouveau patch 1.10 : Orisa, changements sur les maps Kings Row et Eichenwalde.
              Rework de Lucio et du système de contestation du point</p>
            </div>
          </div>
        
        </ul>
     </div>
   </div>

<!-- content -->
<div class="content">
   <div class="container">
     <div class="top-games">
       <h3>Top Jeux</h3>
       <span></span>
     </div>
     <div class="top-game-grids">
       <ul id="flexiselDemo1">
         <li>
           <div class="game-grid">
             <h4>Jeux d'actions</h4>
             <p>GRAND THEFT AUTO V</p>
             <img src="images/t1.jpg" class="img-responsive" alt=""/>
           </div> 
         </li>
         <li>
           <div class="game-grid">
             <h4>Jeux de courses</h4>
             <p>NEED FOR SPEED WORLD</p>
             <img src="images/t3.jpg" class="img-responsive" alt=""/>
           </div>
         </li>
         <li>
           <div class="game-grid">
             <h4>Jeux 3D</h4>
             <p>PIRANA 3D</p>
             <img src="images/t4.jpg" class="img-responsive" alt=""/>
           </div>
         </li>
         <li>
           <div class="game-grid">
             <h4>Jeux Arcades</h4>
             <p>SUBWAY SURFER</p>
             <img src="images/t2.jpg" class="img-responsive" alt=""/>
           </div> 
         </li>                  
       </ul>
       
       <script type="text/javascript">
       $(window).load(function() {      
        $("#flexiselDemo1").flexisel({
        visibleItems: 4,
        animationSpeed: 1000,
        autoPlay: true,
        autoPlaySpeed: 3000,        
        pauseOnHover:true,
        enableResponsiveBreakpoints: true,
        responsiveBreakpoints: { 
          portrait: { 
            changePoint:480,
            visibleItems: 1
          }, 
          landscape: { 
            changePoint:640,
            visibleItems: 2
          },
          tablet: { 
            changePoint:768,
            visibleItems: 3
          }
        }
      });
      });
      </script>
      <script type="text/javascript" src="js/jquery.flexisel.js"></script>  
     </div>
   </div>
</div>
<!-- latest -->
<div class="latest">
   <div class="container">
     <div class="latest-games">
       <h3>Dernières sorties</h3>
       <span></span>
     </div>
     <div class="latest-top">       
        <div class="col-md-5 trailer-text">
           <div class="sub-trailer">
               <div class="col-md-4 sub-img">
              <img src="images/v2.jpg" alt="img07"/>
             </div>
             <div class="col-md-8 sub-text">
                 <a href="#">Killzone: Shadow Fall for PlayStation 4 Reviews</a>
               <p>Lorem ipsum dolor sit amet, consectetur adipi…</p>
             </div>
              <div class="clearfix"> </div>
           </div>
            <div class="sub-trailer">
               <div class="col-md-4 sub-img">
              <img src="images/v1.jpg" alt="img07"/>
             </div>
             <div class="col-md-8 sub-text">
                 <a href="#"> Spiderman 2 Full Version PC Game</a>
               <p>Lorem ipsum dolor sit amet, consectetur adipi…</p>
             </div>
              <div class="clearfix"> </div>
           </div>
            <div class="sub-trailer">
               <div class="col-md-4 sub-img">
              <img src="images/v3.jpg" alt="img07"/>
             </div>
             <div class="col-md-8 sub-text">
                 <a href="#">Sega's: Jet Set for Andriod Play Store 4 Reviews</a>
               <p>Lorem ipsum dolor sit amet, consectetur adipi…</p>
             </div>
              <div class="clearfix"> </div>
           </div>
        </div>
        <div class="col-md-7 trailer">
         <iframe src="https://www.youtube.com/embed/V5-DyoVlNOg?list=PLiVunv1pnIs2c0ORVqY60K3n8XMO9CoGp" frameborder="0" allowfullscreen></iframe>
        </div>
         <div class="clearfix"> </div>
      </div>
   </div>
</div>
<!-- poster -->
<div class="poster">
   <div class="container">
     <div class="poster-info">
       <h3>Nunc cursus dui in metus efficitur, sit amet ullamcorper dolor viverra.</h3>
       <p>Proin ornare metus eros, quis mattis lorem venenatis eget. Curabitur eget dui euismod,
       varius nisl eu, pharetra lacus. Sed vehicula tempor leo. Aenean dictum suscipit magna vel
       tempus. Aliquam nec dui dolor. Quisque scelerisque aliquet est et dignissim. Morbi magna quam, molestie sed fermentum et, elementum at dolor</p>
        <a class="hvr-bounce-to-bottom" href="reviews.html">Read More</a>
     </div>
   </div>
</div>
<!-- x-box -->
<div class="x-box">
   <div class="container">  
     <div class="x-box_sec">
       <div class="col-md-7 x-box-left">
         <h2>XBOX 360</h2>
         <h3>Suspendisse ornare nisl et tellus convallis, non vehicula nibh convallis.</h3>
         <p>Proin ornare metus eros, quis mattis lorem venenatis eget. Curabitur eget dui
         euismod, varius nisl eu, pharetra lacus. Sed vehicula tempor leo. Aenean dictum suscipit magna vel tempus. 
         Aliquam nec dui dolor. Quisque scelerisque aliquet est et dignissim.</p>
         <a class="hvr-bounce-to-top" href="reviews.html">Read More</a>
       </div>
       <div class="col-md-5 x-box-right">
         <img src="images/xbox.jpg" class="img-responsive" alt=""/>
       </div>
       <div class="clearfix"></div>
     </div>
   </div>
</div>



@stop