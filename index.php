<?php
	session_start();
	include "koneksi.php";
	if (!isset($_SESSION['username'])){
		header ("location:form_login.php");
	}
	if (isset($_SESSION['username'])){
		$username = $_SESSION['username'];
		echo '<script>alert("Welcome to Quopinion!")</script>';
	}
?>

<!doctype html>
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
	
	<!-- Show/Hide (jQuery) -->
	<script>
		$(document).ready(function(){
			$("#judul").click(function(){
				$("#teks").slideToggle();
			});
		});
	</script>
	
	<body>
	
		<!-- Navigation Bar (Bootstrap) -->
		<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
			<a class="navbar-brand" href="#"><img src="Quora.png" height="25px" width="25px" alt="Q"><b>uopinion</b></a>
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
			</button>

			<div class="collapse navbar-collapse" id="navbarSupportedContent">
				<ul class="navbar-nav mr-auto">
					<li class="nav-item dropdown">
						<a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
							Personal Info
						</a>
						
						
						
						<div class="dropdown-menu" aria-labelledby="navbarDropdown">
							<a class="dropdown-item" href="#">Name : Ewaldo</a>
							<div class="dropdown-divider"></div>
							<a class="dropdown-item" href="#">NIM  : 201401048</a>
							<div class="dropdown-divider"></div>
							<a class="dropdown-item" href="#">Kom  : B</a>
						</div>
						
						
					</li>
					<li class="nav-item">
						<a class="nav-link" href="logout.php">Logout</a>
					</li>
				</ul>
			</div>
		</nav>
		
		<!-- Carousel (Bootstrap) -->
		<div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
			<div class="carousel-inner">
				<div class="carousel-item active">
					<img src="Slide1.jpg" class="d-block w-100" alt="Respect">
					<div class="carousel-caption d-none d-md-block">
						<h5 style>Should you respect people who are disrespectful to us?</h5>
						<br>
						<p class="explanation">No. You should not respect nor trust and keep your distance. 
						Say the minimum you have to say if you have to interact with them, e.g., if they are in the workplace. 
						A disrespectful person will always try to abuse you so you need to distance yourself from them if you can 
						and if you can’t then say as little as possible.</p>
					</div>
				</div>
				<div class="carousel-item">
					<img src="Slide2.jpg" class="d-block w-100" alt="Lonely">
					<div class="carousel-caption d-none d-md-block">
						<h5>What do you do when you realize that nobody truly cares about you?</h5>
						<br>
						<p class="explanation">If you truly realize that nobody cares about you, you are now 100% free.
						You now realize what the smallest sector of society sees. You are now free to live your life exactly the way you want.</p>
					</div>
				</div>
				<div class="carousel-item">
					<img src="Slide3.jpg" class="d-block w-100" alt="Forgive">
					<div class="carousel-caption d-none d-md-block">
						<h5>Should we forgive everyone?</h5>
						<br>
						<p class="explanation">You are not required to forgive people, you don't have to.
						Don't leave a door open for someone for them to come in and walk all over you again like a doormat because you are not a doormat!</p>
					</div>
				</div>
				<div class="carousel-item">
					<img src="Slide4.jpg" class="d-block w-100" alt="Polite">
					<div class="carousel-caption d-none d-md-block">
						<h5>Why are people rude?</h5>
						<br>
						<p class="explanation">Manners are meant to make interaction easier, more pleasant, less uncomfortable. Politeness has as its chief concern 
						not to give offense. But there exists a difficulty. There’s really only one way to teach a child manners: explain “we don’t do that, we do this,” 
						and explain why. Unfortunately (very unfortunately) even though this really is the only way to teach a child manners, very often the important part	
						is left out. The child is taught only “we don’t do this, we do that.” Obey. If you don’t, you are rude, that’s all there is to it. 
						The child is not taught why.</p>
					</div>
				</div>
			</div>
			
			<a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
				<span class="carousel-control-prev-icon" aria-hidden="true"></span>
				<span class="sr-only">Previous</span>
			</a>
			<a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
				<span class="carousel-control-next-icon" aria-hidden="true"></span>
				<span class="sr-only">Next</span>
			</a>
				
		</div>
		
		<br><br>
		
		<!-- Text Below Carousel -->
		<div id="judul">
		<center><h2><b>About Quora</b></h2></center>
		</div>
		
		<div id="teks">
		<br>
		<p id="paragraph" onClick="textchange()"><b>Why Quora?</b>
		<br><br>
		1. There is absolutely no shortage of topics on Quora.
		You can explore questions and answers based on your selected
		topics and see them in your feed. There are topics like science,
		math, philosophy, movies, photography, mobile apps, baking,
		creative writing and lots more.
		<br><br>
		2. Quora is interesting, fun and engaging. It is a knowledge hub
		where people share their thoughts, insights as well as secrets!
		That’s right - controversial questions get some really controversial
		answers as well. That’s not all – even famous people have verified
		accounts on Quora. Barack Obama, Ashton Kutcher, Irrfan Khan all
		have answered questions on this platform. It’s a treat to read
		experiences of people from different walks of life.
		</p>
		</div>
		
		<br>
		<a href="tambah.php"><center><h4>Add Opinions</h4></center></a>
		<br>
		
		<table class="table table-striped table-dark">
			<thead>
				<tr>
					<th scope="col">ID</th>
					<th scope="col">Name</th>
					<th scope="col">Opinion</th>
					<th scope="col">Options</th>
				</tr>
			</thead>
			
			<!-- Output Data -->
						
			<?php
				include_once 'koneksi.php';
				$data=mysqli_query($koneksi, "select * from opini");
				
				while ($d=mysqli_fetch_array($data))
				{
				?>
					<tr>
						<th scope="row"><?php echo $d['id']; ?></th>
						<td><?php echo $d['nama']; ?></td>
						<td><?php echo $d['pendapat']; ?></td>
						<td>
							<a href="edit.php  ?id=<?php echo $d['id']; ?>"><img alt="Edit" src="edit.png" width=20" height="20"></a>
							<a href="hapus.php ?id=<?php echo $d['id']; ?>" onclick="return confirm('Are you sure you want to remove the corresponding data?')"><img alt="Delete" src="delete.png" width=20" height="20"></a>
						</td>
					</tr>				
				<?php
				}			
			?>
							
			<!-- Output Data -->
			
		</table>
		<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>
		
	</body>
</html>