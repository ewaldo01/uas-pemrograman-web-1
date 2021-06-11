<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Login</title>
</head>

<script>
	function visible() {
		var x = document.getElementById("toggle");
		if (x.type === "password") {
			x.type = "text";
		} else {
			x.type = "password";
		}
	}
</script>

<body style="background-image: linear-gradient(to right, red,orange,yellow,green,blue,indigo,violet);">
	<main>
		<center><b style="font-size : 60px;"><u>Login</u></b></center>
		<br><br><br><br>
		<section>
				<form action="login.php" method="post" style="text-align: center;">
					<div class="form-group row">
						<label for="nampak" class="col-sm-2 col-form-label"><b style="font-size : 40px;">Username</b></label>
						<div class="col-sm-10">
							<input type="text" class="form-control" name="username" id="nampak" required>
						</div>
					</div>
					<br>
					<div class="form-group row">
						<label for="toggle" class="col-sm-2 col-form-label"><b style="font-size : 40px;">Password</b></label>
						<div class="col-sm-10">
							<input type="password" class="form-control" name="password" id="toggle" required>
						</div>
					</div>
					<br>
					<input type="checkbox" onclick="visible()">Show Password
					<br><Br>
					<div class="form-group row">
						<div class="col-sm-10">
							<button type="submit" class="btn btn-primary" name="submit" value="Submit">Log in</button>
						</div>
					</div>
				</form>
			</div>
		</section>
	</main>
</body>

</html>