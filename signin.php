<!DOCTYPE html>
<html>
<head>
	<title></title>
	  <meta name="google-signin-client_id" content="YOUR_CLIENT_ID.apps.googleusercontent.com">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
<meta name="google-signin-client_id" content="486054648659-icfqrlbf84gvjimjtvmp8tv8ffhpesh4.apps.googleusercontent.com">
<script src="https://apis.google.com/js/platform.js" async defer></script>

</script>
<div id="fb-root"></div>
<script async defer crossorigin="anonymous" src="https://connect.facebook.net/en_GB/sdk.js#xfbml=1&version=v9.0&appId=833250754100610&autoLogAppEvents=1" nonce="j0pfZl6d"></script>
<script type="text/javascript">
	function goto(){
var a = document.createElement('a'); 
                var link = document.createTextNode("This is link");               
                a.appendChild(link);                               
               a.title = "This is Link";                                   
                a.href = "home.php";                          
                document.body.appendChild(a);
	}
</script>
<style type="text/css">
	.form-control{
		width: 80%;
		border: 2px solid black;
		padding-left: 10px;
	}
	.forms{
		border: 2px solid black;
		padding-left: 10px;

		
	}
	body{
		padding-left: 20px;
		padding-right: 50%;
		padding-top: 20px;
	}

.g-signin2{
	padding-left: 490px;
}

.p1{
	text-align: center;
}
.p3{
	font-size:20px;
padding-left: : 50%;
    text-align: center;
    text-decoration: none;
    
}

body{
	background: #00F260;  /* fallback for old browsers */
background: -webkit-linear-gradient(to right, #0575E6, #00F260);  /* Chrome 10-25, Safari 5.1-6 */
background: linear-gradient(to right, #0575E6, #00F260); /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */


}


</style>
</head>
<body class="container">
	<div id="fb-root"></div>
<script async defer crossorigin="anonymous" src="https://connect.facebook.net/en_GB/sdk.js#xfbml=1&version=v8.0" nonce="gOA84o7e"></script>
	<form class="forms"class="container">
  <div class="form-group" >
    <label for="exampleInputEmail1" class="fa fa-envelope" > Email address</label>
    <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Email">
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1" class="fa fa-lock"> Password</label>
    <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
    <input class="btn btn-info" type="submit" value="Submit">
  </div>
  <p class="p1"><strong>------------Signin using--------------</strong></p>
  <div class="p3">
  	<span class="p3">
  		<div class="fb-login-button" data-size="large" data-button-type="continue_with" data-layout="default" data-auto-logout-link="false" data-use-continue-as="false" data-width="" onclick="goto()"></div>
	


 <div style="padding-left: 39.3%" id="my-signin2"></div>
  <script>
    function onSuccess(googleUser) {
      console.log('Logged in as: ' + googleUser.getBasicProfile().getName());
    }
    function onFailure(error) {
      console.log(error);
    }
    function renderButton() {
      gapi.signin2.render('my-signin2', {
        'scope': 'profile email',
        'width': 240,
        'height': 50,
        'longtitle': true,
        'theme': 'dark',
        'onsuccess': onSuccess,
        'onfailure': onFailure
      });
    }
  </script>
</span>
</div>
  	</form>
  <script src="https://apis.google.com/js/platform.js?onload=renderButton" async defer></script>

</body>
</html>