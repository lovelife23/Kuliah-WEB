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
         <li class="current bt-icon"><a href="cv.php">CV</a></li>
         <li class="bt-icon"><a href="fav.php">Favorite</a></li>
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
<div align="center" >
	<img class="bw pic" src="education.png" width="350" height="371" alt="" >
</div>
<br>
<br>
<div class="textback">
	<table align="center" width="100%">
		<tbody>
			<tr>
				<td align="center" colspan="2">
					<h1z1 style="color:black; font-family:calibri" align="center"> Curriculum Vitae </h1z1>
					<hr class="title">
			<tr>
				<th align="center">	
					<h1z2 style="color:black; font-family:verdana"> <u> Riwayat Pendidikan</u> </h1z2>
				</td>
				<th align="center">
					<h1z2 style="color:black; font-family:verdana"> <u> Organisasi </u> </h1z2>
				</td>
			</tr>
			<tr>
				<td align="center">	
					<h4 style="color:black; font-family:verdana"> TK Al-Irsyad Tegal </h4>
				</td>
				<td align="center">
					<h4 style="color:black; font-family:verdana"> Peleton Upacara (2012-2014) </h4>
				</td>
			</tr>
						<tr>
				<td align="center">	
					<h4 style="color:black; font-family:verdana"> SDN MKK 1 Tegal </h4>
				</td>
				<td align="center">
					<h4 style="color:black; font-family:verdana"> Taruna Nusantara Tennis Club (2012-2014) </h4>
				</td>
			</tr>
						<tr>
				<td align="center">	
					<h4 style="color:black; font-family:verdana"> SMPN 1 Slawi </h4>
				</td>
				<td align="center">
					<h4 style="color:black; font-family:verdana"> Tarnus Nihongo Team (2012-2014) </h4>
				</td>
			</tr>
						<tr>
				<td align="center">	
					<h4 style="color:black; font-family:verdana"> SMA Taruna Nusantara </h4>
				</td>
				<td align="center">
					<h4 style="color:black; font-family:verdana"> Taruna Nusantara Robotic Club (2012-2013) </h4>
				</td>
			</tr>
						<tr>
				<td align="center">	
					<h4 style="color:black; font-family:verdana"> Instituk Teknologi Sepuluh Nopember </h4>
				</td>
				<td align="center">
					<h4 style="color:black; font-family:verdana"> Staff Departemen KWU HMTC (2015-2016) </h4>
				</td>
			</tr>
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