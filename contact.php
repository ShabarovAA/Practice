<!DOCTYPE html>
<html lang="en">
<html>
	<head>
		<meta charset=UTF-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<title>Контакты</title>
		<link rel="stylesheet" type="text/css" href="style.css" />
		<?php include 'index.php' ?>
	</head>
<body> 
	<div id="page1">
	<img src="images/face.jpg" alt="" /></a>
		<header>
			<body>
			<span class="load1"></span>
			<span class="load2"></span>

				<div class="nav">            
					<?php include 'menuPlus.php' ?>	   
				</div>
			</body>
			<div class="header_img">
			</div>
		
		</header>
	
	<body>
		<section id="content">
			<div id="content1">
				<div class="content">
                    <h1> Контакты </h1> 
                    <p>
					<?php echo 'Адрес: ' , $home, '<br>';?>
					</p>
					<p>
					<?php echo 'Телеофн: ', $phone, '<br>';?>
					</p>
					<p>
					<?php echo 'E-mail: ', $email;?>
					</p>
					<br>
				</div>
				<center><div>
                    <?php  echo '<img src="/images/fotoContact.png" width="300px" '; ?>                    
                </div></center>
		</section>
	</div>
	</body>
	</div>
<footer>
	<?php include 'footerPlus.php' ?>
</footer>
</body>
</html>

