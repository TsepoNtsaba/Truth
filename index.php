<!DOCTYPE html> 
<html>
	<head>
		<title>Truth</title>
		<link rel="stylesheet" type="text/css" href="css/style.css" />	
	</head>
	
	<body  background="images/vintage.jpg" style="background-attachment:fixed">
		
		<!-- Script for facebook login -->
		<div id="fb-root"></div>
		<script>
		  // Additional JS functions here
		  window.fbAsyncInit = function() {
		    FB.init({
		      appId      : '161773847335673', // App ID
		      channelUrl : 'https://thetruth.herokuapp.com/', // Channel File
		      status     : true, // check login status
		      cookie     : true, // enable cookies to allow the server to access the session
		      xfbml      : true  // parse XFBML
		    });

		    // facebook login
			// Here we subscribe to the auth.authResponseChange JavaScript event. This event is fired
		  // for any authentication related change, such as login, logout or session refresh. This means that
		  // whenever someone who was previously logged out tries to log in again, the correct case below 
		  // will be handled. 
		  FB.Event.subscribe('auth.authResponseChange', function(response) {
		    // Here we specify what we do with the response anytime this event occurs. 
		    if (response.status === 'connected') {
		      // The response object is returned with a status field that lets the app know the current
		      // login status of the person. In this case, we're handling the situation where they 
		      // have logged in to the app.
		      testAPI();
		    } else if (response.status === 'not_authorized') {
		      // In this case, the person is logged into Facebook, but not into the app, so we call
		      // FB.login() to prompt them to do so. 
		      // In real-life usage, you wouldn't want to immediately prompt someone to login 
		      // like this, for two reasons:
		      // (1) JavaScript created popup windows are blocked by most browsers unless they 
		      // result from direct interaction from people using the app (such as a mouse click)
		      // (2) it is a bad experience to be continually prompted to login upon page load.
		      FB.login();
		    } else {
		      // In this case, the person is not logged into Facebook, so we call the login() 
		      // function to prompt them to do so. Note that at this stage there is no indication
		      // of whether they are logged into the app. If they aren't then they'll see the Login
		      // dialog right after they log in to Facebook. 
		      // The same caveats as above apply to the FB.login() call here.
		      FB.login();
		    }
		  });
		  };

		  };

		  // Load the SDK asynchronously
		  (function(d){
		     var js, id = 'facebook-jssdk', ref = d.getElementsByTagName('script')[0];
		     if (d.getElementById(id)) {return;}
		     js = d.createElement('script'); js.id = id; js.async = true;
		     js.src = "//connect.facebook.net/en_US/all.js";
		     ref.parentNode.insertBefore(js, ref);
		   }(document));
		</script>
		<script src="//connect.facebook.net/en_US/all.js"></script>
		
		<!-- menu bar -->
		<div id="container" style="width:1200px">
		
		<div id="header">
		
		<ul>
			<li><b><a href="Home.php" target="content">Truth</a></b></li>
			<li><a href="closet.php" target="content">Closet</a></li>
			<li><a href="Open_up.php" target="content">Open up</a> </li>
			<li><form id="cse-search-box" action="http://google.com/cse">
			<input type="hidden" name="cx" value="YOUR SEARCH ENGINE ID goes here" />
			<input type="hidden" name="ie" value="UTF-8" />
			<input type="text" name="q" size="31" /></form></li>
			<li><a href="html/help.html" target="content">Help</a></li>
			<li><a href="html/about.html" target="content">About us</a></li>
			<!--<li><form method="post" action="">
					<label for="name">Username</label>
					<input type="text" name="username"/>
					<label for="pwd">Password</label>
					<input type="password" name="pwd" />
					<input type="submit" id="submit" value="Login" name="submit"/>
				</form></li>-->
		</ul>
		
		</div>
		
		</div>
		
		<iframe src="https://www.facebook.com/plugins/like.php?href=YOUR_URL"
			scrolling="no" frameborder="0"
			style="border:none; width:450px; height:80px"></iframe>
		<iframe name="content" src="index.php" height="700" width="1200" style="align:center">
		<div id="footer" style="height:50px;clear:both;text-align:center;"> Copyright © Truth 2013</div>
		
	<fb:login-button show-faces="true" width="200" max-rows="1"></fb:login-button>
	</body>
</html>