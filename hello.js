$('.loginButton').click(function()
{
	   FB.login(function(response) 
	{
				// stuff you want to happen after login goes here
		console.log(response);
 
	}); //FB.login
				
});