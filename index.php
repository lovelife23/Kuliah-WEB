<!DOCTYPE html>
<html lang="en">
<head>
 <title>Rizal S</title>
 <meta charset="utf-8">
 <link rel="icon" href="images/favicon.ico">
 <link rel="shortcut icon" href="images/favicon.ico" />
 <link rel="stylesheet" href="css/style.css">
 <link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">

</head>
<body class="page1">

  <header> 
    <div class="container_12">
     <div class="grid_12"> 
      <div class="socials">
        <a href="#"></a>
        <a href="https://www.facebook.com/rizal.septiarakhman"></a>
        <a href="#" class="late"></a>
        <a href="#" class="last"></a>
      </div>
      <div class="menu_block">

        <nav id="bt-menu" class="bt-menu">
          <a href="#" class="bt-menu-trigger"><span>Menu</span></a>
          <ul>
            <li class="current bt-icon "><a href="index.php">Home</a></li>
            <li class="bt-icon"><a href="profile.php">Profile</a></li>
            <li class="bt-icon"><a href="cv.php">CV</a></li>
            <li class="bt-icon"><a href="fav.php">Favorite</a></li>
            <li class="bt-icon"><a href="videos.php">Video</a></li>
          </ul>
        </nav>

        <div class="clear"></div>
      </div>
      <div class="clear"></div>
    </div>
  </div>
</header>

<!--==============================Content=================================-->
<br>
<br>
<br>
<div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
  <!-- Indicators -->
  <ol class="carousel-indicators">
    <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
    <li data-target="#carousel-example-generic" data-slide-to="1"></li>
    <li data-target="#carousel-example-generic" data-slide-to="2"></li>
  </ol>


<div class="container-fluid">
  <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
      <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
      <li data-target="#carousel-example-generic" data-slide-to="1"></li>
      <li data-target="#carousel-example-generic" data-slide-to="2"></li>
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner" role="listbox">
      <div class="item ">
        <img src="http://www.wallpapereast.com/static/images/3D-Wallpaper-HD-35.jpg" alt="eyes">
        <div class="carousel-caption">
          <h1> EYES ON YOU </h1>
        </div>
      </div>
      <div class="item">
        <img src="http://bs1.imghost.nu/images/1/97791.jpg" alt="cars">
        <div class="carousel-caption">

        </div>
      </div>
      <div class="item active">
        <img src="http://www.wallpapereast.com/static/images/3d-wallpaper-hd_nB6k1Up.jpg" alt="pokeball">
        <div class="carousel-caption">

        </div>
      </div>
    </div>

    <!-- Controls -->
    <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>
</div>


<!--==============================footer=================================-->

<footer>    
  <div class="container_12">
    <div class="grid_6 prefix_3">
    </div>
  </div>
</footer>

<script src="js/jquery.js"></script>
<script src="js/jquery-migrate-1.1.1.js"></script>
<script src="js/jquery.equalheights.js"></script>
<script src="js/jquery.ui.totop.js"></script>
<script src="js/jquery.easing.1.3.js"></script>
<script type="text/javascript" src="bootstrap/js/bootstrap.min.js"></script>
<script>
  $('.carousel').carousel({
    interval: 2000
  });
  $(document).ready(function(){ 
   $(".bt-menu-trigger").toggle( 
    function(){
      $('.bt-menu').addClass('bt-menu-open'); 
    }, 
    function(){
      $('.bt-menu').removeClass('bt-menu-open'); 
    } 
    ); 
 }) 
</script>
<script>
  $(document).ready(function(){
    $( ".block1" ).mouseover(function() {
      $(this).addClass( "blur" );
    });
    $( ".block1" ).mouseout(function() {
      $(this).removeClass( "blur" );
    });
    $().UItoTop({ easingType: 'easeOutQuart' });
  }) 
</script>  
</body>
</html>