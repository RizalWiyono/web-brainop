<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Signup</title>

	<!-- Favicon -->
	<link rel="icon" type="image/x-icon" href="../../src/images/favicon.png">

	<!-- Bootstrap -->
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

	<!-- Style -->
	<link rel="stylesheet" type="text/css" href="../../src/css/style.css">

</head>
<body style="overflow-x: hidden; width: 100%;">
	  <div class="row" style="display: flex;">
	    <div class="col">
	      	<div class="sect-left-login">
	      		<h1>Signup</h1>
		      	<p>You already have an account? <a href="login.php">Login</a></p>

		      	<form action="fetch/signup.php" method="post">
				  	<div class="mb-3 mt-3">
					    <label for="exampleInputEmail1" class="form-label">Email address</label>
					    <input type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
				  	</div>
				  	<div class="mb-3 mt-3">
					    <label for="exampleInputEmail1" class="form-label">Full Name</label>
					    <input type="text" name="name" class="form-control" id="exampleInputFullname" aria-describedby="emailHelp">
				  	</div>
				  	<div class="mb-3 mt-3">
					    <label for="exampleInputPassword1" class="form-label">Password</label>
					    <input type="password" name="password" class="form-control" id="exampleInputPassword1">
				  	</div>
				  	<button type="submit" class="btn btn-primary btn-cta w-100 mt-5">Signup</button>
				</form>
		      	</div>
	    </div>
	    <div class="col">
	      	<img class="img-login" src="../../src/images/login-image.png">
	    </div>
	  </div>
</body>
</html>
