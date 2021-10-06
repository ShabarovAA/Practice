<!DOCTYPE html>
<html lang="en">
<html>
	<head>
		<meta charset=UTF-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<title>Оценка своих знаний</title>
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
			<h1>  Знание материала </h1>
				<div class="knowledge">
                    <p>Проверка материала</p><br>  				
                    
                    <p>                                       
                    <?php
                        $null = 0;
                        $knowledgePercent = 100;
                        $final = $null + $knowledgePercent;
                        echo 'Ваша оценка - ', $final , '%.';
                    ?>
					</p><br> 
                    <?php include 'knowledgePlus.php' ?>
					<p>  
					<?php
                        echo $d;
                    ?> 
					</p><br>

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

