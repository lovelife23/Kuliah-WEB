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
        <a href="#"></a>
        <a href="#" class="late"></a>
        <a href="#" class="last"></a>
      </div>
      <div class="menu_block">


       
        <nav id="bt-menu" class="bt-menu">
          <a href="#" class="bt-menu-trigger"><span>Menu</span></a>
          <ul>
            <li class="bt-icon "><a href="index.php">Home</a></li>
            <li class="bt-icon"><a href="profile.php">Profile</a></li>
            <li class="bt-icon"><a href="cv.php">CV</a></li>
            <li class="current bt-icon"><a href="fav.php">Favorite</a></li>
            <li class="bt-icon"><a href="videos.php">Video</a></li>
            <li class="bt-icon"><a href="login.php">Login</a></li>
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