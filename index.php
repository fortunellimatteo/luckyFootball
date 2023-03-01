<!doctype html>
<html lang="en">
	<head>

		<!-- Required meta tags -->
		<meta charset="utf-8">
		<meta content="IE=edge,chrome=1" http-equiv="X-UA-Compatible">
		<meta name="viewport" content="width=device-width, initial-scale=1">

		<!--<script type="text/javascript" src="/luckyfootball/javascripts/script.js"></script>-->

		<!-- Bootstrap CSS
		<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
		
		 Bootstrap Bundle with Popper
		<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
 -->
		<link href="/luckyfootball/stylesheets/style.css" rel="stylesheet" type="text/css" />
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
		<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" 
		integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

		<title>Lucky football</title>

	</head>
  	<body>
		<h1><center>Lucky Football</center></h1>
		<!--<div class="field"></div>-->
		<form class="form" action="php/login.php" method="GET">

			<div id="autoSizeInputBox" class="form-group">
				<label for="exampleInputEmail1">Username</label>
				<input id="block" type="username" class="form-control" name="username" 
				required aria-describedby="usernameHelp" placeholder="Username">
			</div>
			<div id="autoSizeInputBox" class="form-group">
				<label for="exampleInputPassword1">Password</label>
				<input type="password" class="form-control" id="block2" 
				name="password" placeholder="Password" required>
			</div>

			<div id="buttonLogin">
				<center><button id="buttonL" style="margin-top:10px;" onclick="login()"
					 type="submit" class="btn btn-primary">Log in</button></center>
			</div>

		</form>
		<form class="formR" action="php/register.php" method="GET">

			<div id="checkbox" class="form-check">
				<input onclick="toRegister()" type="checkbox" class="form-check-input" id="check">
				<label class="form-check-label" for="exampleCheck1">To register</label>
			</div>

			<div id = "autoSizeInputBoxR" class="form-group">
				<label for="exampleInputEmail1">Username</label>
				<input id = "username" type="username" class="form-control" name="username"
				disabled  required aria-describedby="usernameHelp" placeholder="Username">
			</div>
			<div id = "autoSizeInputBoxR" class="form-group">
				<label for="exampleInputPassword1">Password</label>
				<input id="password" type="password" class="form-control" required name="password" placeholder="Password" disabled>
			</div>

			<div id = "autoSizeInputBoxR" class="form-group">
				<label for="exampleInputEmail">Email</label>
				<input id="email" type="email" class="form-control" required name="email" placeholder="Email" disabled>
			</div>

			<div id="buttonLogin">
				<center><button id="buttonRegister" onclick="register()" type="register" disabled
					class="btn btn-success" style="margin-top:10px;">Register</button></center>
			</div>
			
		</form>
		<script>
			function toRegister() {
				const btnRegisterId = document.getElementById("buttonRegister");
				const btnLoginId = document.getElementById("buttonL");
				const checkboxId = document.getElementById("check");
				const usernameId = document.getElementById("username");
				const passwordId = document.getElementById("password");
				const emailId = document.getElementById("email");
				const blockId = document.getElementById("block");
				const block2Id = document.getElementById("block2");

				checkboxId.addEventListener("change", (event) => {
					usernameId.disabled = !event.target.checked;
					passwordId.disabled = !event.target.checked;
					btnRegisterId.disabled = !event.target.checked;
					emailId.disabled = !event.target.checked;
					blockId.disabled = event.target.checked;
					block2Id.disabled = event.target.checked;
					btnLoginId.disabled = event.target.checked;
					blockId.value ="";
					block2Id.value ="";
					emailId.value = "";
					usernameId.value = "";
					passwordId.value = "";
				}, false);
			}
		</script>
  	</body>
</html>
