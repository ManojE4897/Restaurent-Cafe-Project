<!DOCTYPE html>
<html>
<head>
<title>Sign-Up</title>
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
	input[type="text"]
	{
		color:black;
		font-weight: bold;
	}

	.register-but  input[type="submit"] {
    background: #52a1ee;
    color: #FFF;
    font-size: 1.2em;
    padding: 0.2em 1em;
    transition: 0.5s all;
    -webkit-transition: 0.5s all;
    -moz-transition: 0.5s all;
    -o-transition: 0.5s all;
    display: inline-block;
    text-transform: uppercase;
    border: none;
    outline: none;
}
.content{
	background: linear-gradient(265deg, #e6ec91, #8ff39b, #e9a8f7, #f7935a, #aeaae8,#fd5c53);
	background-size: 1000% 1000%;
	animation: AnimationName 40s ease infinite;
}

@keyframes AnimationName 
{
    0%{background-position:0% 45%}
    50%{background-position:100% 56%}
    100%{background-position:0% 45%}
}

</style>
</head>



<body>
    <!-- header-section-starts -->
	<div class="header">
    <div class="container">
        <div class="top-header">
            <div class="logo">
                <a href="index.php"><Strong><h3><b><i>YOUR's</i></b> ----- The Food Rush</h3></strong></a>
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
                    <li ><a href="index.php">Home</a></li>|
                    <li><a href="popular-restaurents.php">Popular Restaurants</a></li>|
                    <li><a href="contact.php">contact</a></li>
                    <div class="clearfix"></div>
                </ul>
            </div>

            <div class="login-section">
                <ul>
                    <li><a href="admin.php">Admin</a>  </li> |
                    <li class="active"><a href="sign-up.php">Sign-Up</a> </li> |
                   
                    <div class="clearfix"></div>
                </ul>
            </div>
            <div class="clearfix"></div>
        </div>
    </div>
	<!-- header-section-ends -->
	<!-- content-section-starts -->
	
	<div class="main">
	
	   <div class="container">
		  <div class="register">
		  	  <form method="POST" action="#"> 
				 <div class="register-top-grid">
					<h3>PERSONAL INFORMATION</h3>

					 <div class="wow fadeInLeft" data-wow-delay="0.4s">
						<span> Name<label>*</label></span>
						<input type="text" required="required" autofocus="on"> 
					 </div>

					 <div class="wow fadeInRight" data-wow-delay="0.4s">
						<span>Mobile Number<label>*</label></span>
						<input type="text" required="required"> 
					 </div>

					 <div class="wow fadeInRight" data-wow-delay="0.4s">
						 <span>&nbsp;Generate OTP<label>*</label></span>

						 
							 <div class="register-but">
						 		<input type="submit" value="Get OTP" name="otp"> 
						 	</div>
						 
						 <div class="clearfix"> </div>

					 </div>

							<div class="wow fadeInLeft" data-wow-delay="0.4s">
								<span>Enter OTP<label>*</label></span>
								<input type="text" required="required">
							 </div>
							 

					 <div class="clearfix"> </div>
					  
					 </div>

				     <div class="register-bottom-grid"></div>
						   
							 
				 
				</form>
				<div class="clearfix"> </div>
				<div class="register-but">
				   <form>
					   <input type="submit" value="submit">
					   <div class="clearfix"> </div>
				   </form>
				</div>
		   </div>
	     </div>
	    </div>
	    </div>
<div class="special-offers-section">
			
				 <script type="text/javascript">
					$(window).load(function() {
						
						$("#flexiselDemo3").flexisel({
							visibleItems: 3,
							animationSpeed: 1000,
							autoPlay: true,
							autoPlaySpeed: 3000,    		
							pauseOnHover: true,
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
		</div>
<div class="clearfix"></div>
		
	<!-- content-section-ends -->
	<!-- footer-section-starts -->
		<div class="footer">
		<div class="container">
			<p><center>&copy; 2018  All rights  Reserved | Grepthor <a href="" target="target_blank">&nbsp; Intern</a></center></p>
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