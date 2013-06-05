$('.loginButton').click(function()
{
	   FB.login(function(response) 
	{
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

				
});