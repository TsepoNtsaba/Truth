<!DOCTYPE html> 
<html>
<head>
<title>Truth</title>
<style type="text/css">
#left-div
{
  width:300px;
  border:1px solid grey;
  display: inline-block;
  /* IE 7 hack */
  *zoom:1;
  *display: inline;
  vertical-align: middle;
}
</style>
</head>

<body style="background-color:#371C1C" style="background-attachment:fixed">

<div id="fb-root"></div>
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
			  
			  facebook login()
			  {
				FB.login
			  }

			  // Here we run a very simple test of the Graph API after login is successful. 
			  // This testAPI() function is only called in those cases. 
			  function testAPI() {
			    console.log('Welcome!  Fetching your information.... ');
			    FB.api('/me', function(response) {
			      console.log('Good to see you, ' + response.name + '.');
			    });
			  }
			</script>
			 <script src="//connect.facebook.net/en_US/all.js"></script>
			<!--
			  Below we include the Login Button social plugin. This button uses the JavaScript SDK to
			  present a graphical Login button that triggers the FB.login() function when clicked.

			  Learn more about options for the login button plugin:
			  /docs/reference/plugins/login/ -->

			<fb:login-button show-faces="true" width="200" max-rows="1"></fb:login-button>
		

</body>

</html>