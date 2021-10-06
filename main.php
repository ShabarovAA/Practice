<!DOCTYPE html>
<html lang="en">
<html>
	<head>
		<meta charset=UTF-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<title>Визитка студента :)</title>
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
					<?php include 'menuPlus.php'; ?>					
				</div>
			</body>
			<div class="header_img">
			</div>
		
		</header>
	
	<body>
		<section id="content">
			<div id="content1">
			<h1>  <?php  echo $hello  ?> </h1>
				<div class="content">
				
					<div>
                    <p> Меня зовут 
                    <?php echo $surname, ' ', $name, ' ', $patronymic. '<br>'; ?>
                    </p> 
					<p>
					<?php echo'город', ' ', $city; ?>                                      
                    </p> 
					</div>
                    <p> Мне <?php  echo $age;   ?> года </p>
					<p> Чему мы научились: </p>
                    <p> 1. Определили понятие PHP </p>
					<p> 2. Выучили переменные языка PHP </p>
                    <p> 3. Научились пользоваться инструментами разработчика </p>
					<p> 4. Настроен локальный веб-сервер </p>
    
					<center><img src="images\fotoMain.png" alt="" / align="middle"  width="300px" style="margin: 10px 10px 10px 0px " text="middle"></center>
				</div>
		</section>
	</div>
	</body>
	</div>
<footer>
	<?php include 'footerPlus.php' ?>
</footer>
</body>
</html>

