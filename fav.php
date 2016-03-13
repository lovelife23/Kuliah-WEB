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
        <a href="https://www.facebook.com/rizal.septiarakhman"></a>
        <a href="http://steamcommunity.com/id/love-life" class="late"></a>
        <a href="http://www.kaskus.co.id/profile/aboutme/5440695" class="last"></a>
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
					<h1z1 style="color:black; font-family:calibri" align="center"> Favorite</h1z1>
					<hr class="title">
			</tr>
		</tbody>
	</table>
	<table align="center" width="100%">
		<tbody>
			<tr>
				<td colspan="2" align="center">	
					<h3 style="color:black; font-family:verdana"> Games</h3>
					<br>
				</td>
			</tr>
			<tr>
				<td align="center">
				<a href="http://blog.dota2.com/">
					<img src="images/dota2.gif" onmouseover="this.src='images/dota22.jpg'" onmouseout="this.src='images/dota2.gif'" height="300" width="400" alt="">
				</a>
				</td>
				<td align="center">
				<a href="http://www.kingdomhearts.com/">
					<img src="images/kingdomheart.gif" onmouseover="this.src='images/Kingdom.png'" onmouseout="this.src='images/kingdomheart.gif'" height="300" width="400" alt="">
				</a>
				</td>
			<tr>
				<td colspan="3"> <br> <hr class="title"> </td>
			</tr>
			</tr>			
		</tbody>

	</table>
	<table align="center" width="100%">
		<tbody>
			<tr>
				<td colspan="2" align="center">	
					<h3 style="color:black; font-family:verdana"> Movies</h3>
					<br>
				</td>
			</tr>
			<tr>
				<td align="center">
				<a href="http://www.nowyouseeme.movie/">
					<img src="images/nowyou.gif" onmouseover="this.src='images/nowyou.jpg'" onmouseout="this.src='images/nowyou.gif'" height="300" width="400" alt="">
				</a>
				</td>
				<td align="center">
				<a href="http://marvel.com/movies/movie/219/captain_america_civil_war">
					<img src="images/civilwar.gif" onmouseover="this.src='images/civilwar.png'" onmouseout="this.src='images/civilwar.gif'" height="300" width="400" alt="">
				</a>
				</td>
			<tr>
				<td colspan="3"> <br> <hr class="title"> </td>
			</tr>
			</tr>			
		</tbody>

	</table>
	<table align="center" width="100%">
		<tbody>
			<tr>
				<td colspan="3" align="center">	
					<h3 style="color:black; font-family:verdana"> Website</h3>
					<br>
				</td>
			</tr>
			<tr>
				<td align="center">
					<a href="http://www.kaskus.co.id/"><img src="images/kaskus.jpg" width="100px" height="100px" /></a>
				</td>
				<td align="center">
					<a href="http://malesbanget.com/"><img src="images/males-banget.png" width="100px" height="100px" /></a>
				</td>
				<td align="center">
					<a href="http://9gag.com/"><img src="images/9gag.png" width="100px" height="100px" /></a>
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