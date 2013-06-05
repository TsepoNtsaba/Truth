<!DOCTYPE html> 
<html>
	<head>
		<title>Truth</title>
		<link rel="stylesheet" type="text/css" href="css/style.css" />	
	</head>
	
	<body  background="images/vintage.jpg" style="background-attachment:fixed">
		<div id="fb-root"></div>
		<script src="//connect.facebook.net/en_US/all.js"></script>
			 <script src="hello.js"></script>
			<script>
			  window.fbAsyncInit = function() {
			  FB.init({
			    appId      : '161773847335673', // App ID
			    channelUrl : '//WWW.YOUR_DOMAIN.COM/channel.html', // Channel File
			    status     : true, // check login status
			    cookie     : true, // enable cookies to allow the server to access the session
			    xfbml      : true  // parse XFBML
			  });

			  FB.Event.subscribe('auth.authResponseChange', function(response) {
			    // Here we specify what we do with the response anytime this event occurs. 
			    if (response.status === 'connected') 
			    {
				testAPI();
			    } 
			    else if (response.status === 'not_authorized') 
			    {
			      FB.login();//not authorized
			    } 
			    else 
			    {
			      FB.login();//not logged in
			    }
			  });
			  };

			  // Load the SDK asynchronously
			  (function(d){
			   var js, id = 'facebook-jssdk', ref = d.getElementsByTagName('script')[0];
			   if (d.getElementById(id)) {return;}
			   js = d.createElement('script'); js.id = id; js.async = true;
			   js.src = "//connect.facebook.net/en_US/all.js";
			   ref.parentNode.insertBefore(js, ref);
			  }(document));
			  
			   FB.login(function(response) {
				// stuff you want to happen after login goes here
				console.log(response);
 
				}); //FB.login
				
				 FB.api('/me', function(response) {
				// stuff you want to happen after getting data goes here
				alert(response.name);
				console.log(response);
 
				}); 
				
				 FB.api('/me/friends', function(response) {
				//stuff you want to happen after getting data goes here
				console.log(response);
				alert(response.data[0].name);
 
				}); //FB.api

			  // Here we run a very simple test of the Graph API after login is successful. 
			  // This testAPI() function is only called in those cases. 
			  function testAPI() {
			    console.log('Welcome!  Fetching your information.... ');
			    FB.api('/me', function(response) {
			      console.log('Good to see you, ' + response.name + '.');
			    });
			  }
			</script>
			<!--
			  Below we include the Login Button social plugin. This button uses the JavaScript SDK to
			  present a graphical Login button that triggers the FB.login() function when clicked.

			  Learn more about options for the login button plugin:
			  /docs/reference/plugins/login/ -->
			  
		<!-- menu bar -->
		<div id="container" style="width:1200px">
		
		<div id="header">
		
		<ul>
			<li><b><a href="Home.php" target="content">Truth</a></b></li>
			<li><button class="loginButton">Login</button><li>
		</ul>
		
		</div>
		
		</div>

		
		<div id="footer" style="height:50px;clear:both;text-align:center;"> Copyright © Truth 2013</div>
		
	
	</body>
</html>