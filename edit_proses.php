<?php

	if(isset($_POST['save']))
	{
		include('koneksi.php');
		$id       = $_POST['id'];
		$nama     = addslashes($_POST['nama']);
		$pendapat = addslashes($_POST['pendapat']);
		$update   = mysqli_query($koneksi, "update opini set
		
		nama     = '$nama',
		pendapat = '$pendapat'
		
		where id = '$id'")
		
		or die(mysqli_error());
		
		if($update)
		{
			echo '<script>alert("Data successfully updated!")</script>';
			echo "<script>window.location = 'index.php'</script>";
		}
		else
		{
			echo "<h2><center>Data update failed.</center></h2><br>";
			echo "<a href = 'edit.php ?nim = ".$nim."'><center>Go back</center></a>";
		}
	}

	else
	{
		echo "<script>window.history.back()</script>";
	}

?>