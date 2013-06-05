$('.loginButton').click(function()
{
	   FB.login(function(response) 
	{
		// stuff you want to happen after login goes here
		console.log(response);
 
	},{scope: 'publish_actions'}); //FB.login
				
});