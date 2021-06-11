<?php

	if(isset($_POST['add']))
	{
		include_once 'koneksi.php';
		$id       = $_POST['id'];
		$nama     = addslashes($_POST['nama']);
		$pendapat = addslashes($_POST['pendapat']);
		
		$input    = mysqli_query($koneksi, "insert into opini values
		('$id', '$nama', '$pendapat')");
		
		if($input)
		{
			echo '<script>alert("Data has been added successfully!")</script>';
			echo "<script>window.location='index.php'</script>";
		}
		else
		{
			echo "<h2><center>Data addition failed.</center></h2><br>";
			echo "<a href = 'tambah.php'><center>Go back</center></a>";
		}
	}
	else
	{
		echo "<script>window.history.back()</script>";
	}
?>