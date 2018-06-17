<!DOCTYPE html>
<html>
<head>
<title>Admin</title>
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
 

.content{

   			background: linear-gradient(103deg, #4da38d, #e6ec91, #8ff39b, #e9a8f7, #f7935a, #f987a4, #aeaae8, #505048);
			background-size: 1600% 1600%;

			animation: AnimationName 30s ease infinite;

		}
	input[type="text"],[type="password"]
	{
		color:black;
		font-weight: bold;
	}

	@keyframes AnimationName 
	{
    	0%{background-position:0% 97%}
    	50%{background-position:100% 4%}
    	100%{background-position:0% 97%}
	}
	.login-right input[type="password"]{
	border: 1px solid #EEE;
	outline-color:#fb4d01;
	width: 96%;
	font-size:0.8125em;
	padding: 0.5em;

}
</style>


</head>
<body>
    <!-- header-section-starts -->

	<div class="header">
    <div class="container">
        <div class="top-header">
            <div class="logo">
                <a href="index.php"><Strong><h3><b><i>YOUR's</i></b> ----- The Food Rush</h3></h3></strong></a>
            </div>
            <!--<div class="queries">
                <p>Questions? Call us !<span>41 535 520 </span><label>(11AM to 11PM)</label></p>
            </div> -->
            <div class="header-right">

            </div>
            <div class="clearfix"></div>
        </div>
    </div>
    <div class="menu-bar">
        <div class="container">
            <div class="top-menu">
                <ul>
                    <li><a href="index.php">Home</a></li>|
                    <li><a href="popular-restaurents.php">Popular Restaurants</a></li>|
                    <li><a href="contact.php">contact</a></li>
                    <div class="clearfix"></div>
                </ul>
            </div>
            <div class="login-section">
                <ul>
                    <li class="active"><a href="admin.php">Admin</a>  </li> |
                    <li><a href="sign-up.php">Sign-Up</a> </li> |
                   
                    <div class="clearfix"></div>
                </ul>
            </div>
            <div class="clearfix"></div>
        </div>
    </div>
	<!-- header-section-ends -->
	<!-- content-section-starts -->
	<div class="content">
	<div class="container">
		<div class="login-page">
			    <div class="dreamcrub">
			   	 <ul class="breadcrumbs">
                    <li class="home">
                       <a href="index.php" title="Go to Home Page">Home</a>&nbsp;
                       <span>&gt;</span>
                    </li>
                    <li class="women">
                       Admin
                    </li>
                </ul>
                <ul class="previous">
                	<li><a href="index.php" style="color: black;font-weight: bold">Back to Previous Page</a></li>
                </ul>
                <div class="clearfix"></div>
			   </div>
			   <div class="account_grid">
			   <div class="col-md-6 login-left wow fadeInLeft" data-wow-delay="0.4s">
			  	 <h3 style="color: white">NEW CUSTOMERS</h3>
				
				 <a class="acount-btn" href="sign-up.php">Sign-Up</a>
			   </div>
			   <div class="col-md-6 login-right wow fadeInRight" data-wow-delay="0.4s">
			  	<h3 style="color: white">ADMIN only</h3>
				<p>Admin, Please log in here</p>

				<form method="POST" action="admin_insertoperation.php" >
				 
				  <div>
					<span>User Name / Mobile<label>*</label></span>
					<input type="text" required="required" autofocus="on"> 
				  </div>

				  <div>
					<span>Password<label>*</label></span>
					<input type="password" required="required" name="password"> 
				  </div>
				 
				  <input type="submit" value="Login">

			    </form>
			   </div>	
			   <div class="clearfix"> </div>
			 </div>
		   </div>
</div>


	<!-- content-section-ends -->
	<!-- footer-section-starts -->
		<div class="footer">
		<div class="container">
			<p><center>&copy; 2018  All rights  Reserved | Grepthor <a href="index.php" target="target_blank"> &nbsp;Intern</a></center></p>
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