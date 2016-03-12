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
            <li class="current bt-icon"><a href="profile.php">Profile</a></li>
            <li class="bt-icon"><a href="cv.php">CV</a></li>
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
	<img class="bw pic" src="image.jpg" width="350" height="371" alt="" >
</div>
<br>
<br>
<div class="textback">
	<table align="center" width="100%">
		<tbody>
			<tr>
				<td align="center" colspan="2">
					<h1 style="color:black; font-family:calibri" align="center"> About ME ! </h2>
           <hr class="title">
           <tr>
            <td align="right">	
             <h3 style="color:black; font-family:verdana"> Name :</h3>
           </td>
           <td align="center">
             <h3 style="color:black; font-family:verdana"> Rizal Septiarakhman </h3>
           </td>
         </tr>
         <tr>
          <td align="right">	
           <h3 style="color:black; font-family:verdana"> NRP : </h3>
         </td>
         <td align="center">
           <h3 style="color:black; font-family:verdana"> 5114100180 </h3>
         </td>
       </tr>
       <tr>
        <td align="right">	
         <h3 style="color:black; font-family:verdana"> D.O.B : </h3>
       </td>
       <td align="center">
         <h3 style="color:black; font-family:verdana"> Tegal, 23 September 1996 </h3>
       </td>
     </tr>
     <tr>
      <td align="right">	
       <h3 style="color:black; font-family:verdana"> Bloodtype : </h3>
     </td>
     <td align="center">
       <h3 style="color:black; font-family:verdana"> A </h3>
     </td>
   </tr>
   <tr>
    <td align="right">	
     <h3 style="color:black; font-family:verdana"> Zodiac : </h3>
   </td>
   <td align="center">
     <h3 style="color:black; font-family:verdana"> Libra </h3>
   </td>
 </tr>
 <tr>
  <td align="right">	
   <h3 style="color:black; font-family:verdana"> Hobby : </h3>
 </td>
 <td align="center">
   <h3 style="color:black; font-family:verdana"> Traveling </h3>
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