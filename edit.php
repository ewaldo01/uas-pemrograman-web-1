<html>
	<head>
		<meta charset="UTF-8">
		<meta http-equiv="X-UA-Compatible" content="IE-edge">
		<meta name="viewport" content="width=device-width, intial-scale=1.0">
		
		<!-- Title Bar -->
		<title>Quopinion</title>
		<link rel="icon" href="Quora.png" alt="Q">
		
		<!-- Bootstrap -->
		<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
		
		<!-- CSS -->
		<link rel="stylesheet" href="css UTS PW3.css">
		
		<!-- Javascript -->
		<script src="js UTS PW3.js"></script>
		<script src="jquery UTS PW3.js"></script>
	</head>
	
	<body>
	
		<?php
			include('koneksi.php');
			$id = $_GET['id'];
			$show = mysqli_query($koneksi, "select * from opini where id = '$id'");
			
			if(mysqli_num_rows($show) == 0)
			{
				echo '<script>window.history.back()</script>';
			}
			else
			{
				$d = mysqli_fetch_assoc($show);
			}
		?>
		
		<h3>
			<a href="index.php">Go back</a>
			<br><br>
			<p>Edit your data here</p>
		</h3>
		
		<form action="edit_proses.php" method="POST">
			<div class="form-group row">
				<label for="satu" class="col-sm-2 col-form-label">ID</label>
				<div class="col-sm-10">
					<input type="text" readonly class="form-control-plaintext" name="id" id="satu" value="<?php echo $id; ?>">
				</div>
			</div>
			<div class="form-group row">
				<label for="dua" class="col-sm-2 col-form-label">Name</label>
				<div class="col-sm-3">
					<input type="text" class="form-control" name="nama" id="dua" maxlength="33" value="<?php echo $d['nama']; ?>" required>
					<small id="passwordHelpBlock" class="form-text text-muted">
						Make yourself known (Maximum : 33 characters)
					</small>
				</div>
			</div>
			<div class="form-group row">
				<label for="tiga" class="col-sm-2 col-form-label">Opinion</label>
				<div class="col-sm-10">
					<input type="text" class="form-control" name="pendapat" id="tiga" size="100" value="<?php echo $d['pendapat']; ?>" required>
					<small id="passwordHelpBlock" class="form-text text-muted">
						Feel free to express your opinion! (Maximum : 100 characters)
					</small>
				</div>
			</div>
			<div class="form-group row">
				<div class="col-sm-10">
					<button type="submit" class="btn btn-primary" name="save" value="save">Save Data</button>
				</div>
			</div>
		</form>
	
	</body>
</html>