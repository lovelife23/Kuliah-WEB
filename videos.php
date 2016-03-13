<!DOCTYPE html>
<html lang="en">
     <head>
     <title>Rizal S</title>
     <meta charset="utf-8">
     <link rel="icon" href="images/favicon.ico">
     <link rel="shortcut icon" href="images/favicon.ico" />
     <link rel="stylesheet" href="css/style.css">
     <script src="js/jquery.js"></script>
     <script src="js/jquery-migrate-1.1.1.js"></script>
     <script src="js/jquery.equalheights.js"></script>
     <script src="js/jquery.ui.totop.js"></script>
     <script src="js/jquery.easing.1.3.js"></script>
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
     </head>
     <body class="page1">

<header> 
  <div class="container_12">
   <div class="grid_12"> 
    <div class="socials">
      <a href="#"></a>
      <a href="#"></a>
      <a href="#" class="last"></a>
      <a href="#" class="last"></a>
    </div>
    <div class="menu_block">


	
    <nav id="bt-menu" class="bt-menu">
        <a href="#" class="bt-menu-trigger"><span>Menu</span></a>
        <ul>
          <li class="bt-icon "><a href="index.php">Home</a></li>
         <li class="bt-icon"><a href="profile.php">Profile</a></li>
         <li class="bt-icon"><a href="cv.php">CV</a></li>
         <li class="bt-icon"><a href="fav.php">Favorite</a></li>
         <li class="current bt-icon"><a href="videos.php">Video</a></li>
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
<div class="textback">
	<table align="center" width="100%">
		<tbody>
			<tr>
				<td align="center" colspan="2">
					<h1z1 style="color:black; font-family:calibri" align="center"> Video</h1z1>
					<hr class="title">
			</tr>
			<tr>
				<td align="center">	
					<h3 style="color:black; font-family:verdana"> Makoto Shinkai Production</h3>
					<br>
				</td>
			</tr>
			<tr>
				<td align="center">
					<iframe width="560" height="315" src="https://www.youtube.com/embed/TjMiUIi6sp0" frameborder="0" allowfullscreen></iframe>
				</td>
			</tr>
			<tr>
				<td align="center">	
					<br>
					<hr class="title">
					<h3 style="color:black; font-family:verdana"> Free to Play</h3>
					<br>
				</td>
			</tr>
			<tr>
				<td align="center">
					<iframe width="560" height="315" src="https://www.youtube.com/embed/R-RKqGaNq-Y" frameborder="0" allowfullscreen></iframe>
				</td>
			</tr>	
			<tr>
				<td align="center">	
					<br>
					<hr class="title">
					<h3 style="color:black; font-family:verdana"> Digimon :3</h3>
					<br>
				</td>
			</tr>
			<tr>
				<td align="center">
					<iframe width="560" height="315" src="https://www.youtube.com/embed/7cSB1IZU_8U" frameborder="0" allowfullscreen></iframe>
				</td>
			</tr>			
		</tbody>

	</table>
</div>


<!--==============================footer=================================-->

<footer>    
  <div class="container_12">
    <div class="grid_6 prefix_3">
    </div>
  </div>
</footer>
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
</body>
</html>