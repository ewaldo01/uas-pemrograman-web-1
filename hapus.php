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
	
	<?php
	
		if(isset($_GET['id']))
		{
			include('koneksi.php');
			$id  = $_GET['id'];
			$cek = mysqli_query($koneksi, "select id from opini where id = '$id'") or die(mysqli_error());
			
			if(mysqli_num_rows($cek) == 0)
			{
				echo "<script>window.history.back()</script>";
			}
			else
			{
				$del = mysqli_query($koneksi, "delete from opini where id = '$id'");
				if ($del)
				{
					echo "<script>window.location = 'index.php';</script>";
				}
				else
				{
					echo "<h2><center>Data erase failed.</center></h2><br>";
					echo "<a href = 'index.php'><center>Go back</center></a>";
				}
			}
		}
		else
		{
			echo "<script>window.history.back()</script>";
		}
	?>
	
	<body>
	
	</body>
</html>