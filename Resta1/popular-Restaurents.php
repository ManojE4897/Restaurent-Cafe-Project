<?php
// Start the session
session_start();
?>
<!DOCTYPE html>
<html>
<head>
<title>Popular Restaurents</title>
<link href="css/bootstrap.css" rel='stylesheet' type='text/css' />
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="js/jquery.min.js"></script>
<!-- Custom Theme files -->
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
<!-- Custom Theme files -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!--webfont-->
<link href='http://fonts.googleapis.com/css?family=Source+Sans+Pro:200,300,400,600,700,900,200italic,300italic,400italic,600italic,700italic,900italic' rel='stylesheet' type='text/css'>
<link href='http://fonts.googleapis.com/css?family=Lobster+Two:400,400italic,700,700italic' rel='stylesheet' type='text/css'>
<!--Animation-->
<script src="js/wow.min.js"></script>
<link href="css/animate.css" rel='stylesheet' type='text/css' />
<script>
	new WOW().init();
</script>
<script type="text/javascript" src="js/move-top.js"></script>
<script type="text/javascript" src="js/easing.js"></script>
<script type="text/javascript">
			jQuery(document).ready(function($) {
				$(".scroll").click(function(event){		
					event.preventDefault();
					$('html,body').animate({scrollTop:$(this.hash).offset().top},1200);
				});
			});
		</script>		
<script src="js/simpleCart.min.js"> </script>	

	<style type="text/css">
		.Popular-Restaurants-content{
			background-image: linear-gradient( #c4e0e5, #faaca8);
			background-repeat:repeat;
		}

		img:hover{
			opacity: 0.8;
		}
		input#submit{
  background:none;
  border:none;
}
	</style>
</head>
<body>
    <!-- header-section-starts -->
	<div class="header">
		<div class="container">
			<div class="top-header">
				<div class="logo">
                <a href="index.php"><Strong><h3><b><i>YOUR's</i></b> ----- The Food Rush </h3></strong></a>
            </div>
            <!--<div class="queries">
                <p>Questions? Call us !<span>24 2425 250 </span><label>(11AM to 11PM)</label></p>
            </div> -->
				
				<div class="clearfix"></div>
			</div>
		</div>
			
			<div class="menu-bar">
				<div class="content">
			<div class="container">
				<div class="top-menu">
					<ul>
						<li><a href="index.php">Home</a></li>|
						<li class="active"><a href="popular-restaurents.php">Popular Restaurants</a></li>|
						
						<li><a href="contact.php">contact</a></li>
						<div class="clearfix"></div>
					</ul>
				</div>
				<div class="login-section">
					<ul>
						<li><a href="admin.php">Admin</a>  </li> |
						<li><a href="sign-up.php">Sign-Up</a> </li> |
						
						<div class="clearfix"></div>
					</ul>
				</div>
				<div class="clearfix"></div>
			</div>
			</div>		
			</div>
			</div>


	<!-- header-section-ends -->
	<!-- content-section-starts -->
	<div class="Popular-Restaurants-content">
		<div class="Popular-Restaurants-grids">
			<div class="container">
				
				
				<?php
    				

    				include("conn.php");
    				$sql = "SELECT * FROM restaurents";
    				$result = mysqli_query($conn, $sql);

   							 // output data of each row
   					 
   					while($row = mysqli_fetch_assoc($result)) 
    				{
        


							echo '<div class="Popular-Restaurants-grid wow fadeInLeft" data-wow-delay="0.4s" >';
								
							echo	'<div class="col-md-3 restaurent-logo">';
									
							echo "<img src='uploads/". $row['file_name'] . "'". " class='img-responsive' alt='Image'  />";
								
							echo	 '</div>';

							echo	 ' <div class="col-md-2 restaurent-title"> ' ;

							echo	 '<div class="logo-title logo-title-5">';

							echo	 '<h4><a href="#">' .$row["restaurent_name"] .'</a></h4>';

							echo     '</div>';

							
							//$_SESSION['$username'] = $row["username"];

								
							echo	'</div>';

							echo	'<div class="col-md-7 buy">';

								echo '<form action="items2.php" method="POST">';
							echo	'<a class="morebtn hvr-rectangle-in" ><input type="submit" value="Check It" id="submit" name="' .$row["username"]. '"/></a>';

								echo '</form>';

							echo	'</div>';

							echo	'<div class="clearfix"></div>';

							echo '</div>';
							

					}
						
				?>	


			</div>
		</div>
	</div>









	<!-- footer-section-starts -->
	<div class="footer">
		<div class="container">
			<p><center>&copy; 2018  All rights  Reserved | Grepthor<a href="" target="target_blank">&nbsp; Intern</a></center></p>
		</div>
	</div>
	<!-- footer-section-ends -->
	  <script type="text/javascript">
						$(document).ready(function() {
							/*
							var defaults = {
					  			containerID: 'toTop', // fading element id
								containerHoverID: 'toTopHover', // fading element hover id
								scrollSpeed: 1200,
								easingType: 'linear' 
					 		};
							*/
							
							$().UItoTop({ easingType: 'easeOutQuart' });
							
						});
					</script>
				<a href="#" id="toTop" style="display: block;"> <span id="toTopHover" style="opacity: 1;"> </span></a>

</body>
</html>