<!DOCTYPE html>
<html>
<head>
	<?php 
	require_once "functions/functions.php";
	$title="Coronavirus";
	require_once "blocks/head.php" ;
	?>
</head>
<body>
	<?php require_once "blocks/header.php" ?>

	<div id="wrapper">
		<div id="leftCol">
			<div class="row">
				<div class="column">
					<?php 
					include "databases.php";
					$res = mysqli_query($induction,"SELECT * FROM `reported_cases`");
					?>
					<h2>Расталған жағдай:<strong class="rc">
						<?php 
						echo $data1['sum'];
						?></strong>
					</h2><br><br>
					<?php 
					while ($rc=mysqli_fetch_assoc($res)) {
						echo $rc['city'];
						echo "-";
						echo $rc['people'];
						echo "<br>";
					}
					?>
				</div>

				<div class="column">
					<?php 
					include "databases.php";
					$res = mysqli_query($induction,"SELECT * FROM `recovered`");
					?>
					<h2>Жазылып<br>шыққандар: <strong class="r"><?php 
					echo $data2['sum'];
					?></strong>
				</h2><br>
				<?php 
				while ($rc=mysqli_fetch_assoc($res)) {
					echo $rc['city'];
					echo "-";
					echo $rc['people'];
					echo "<br>";
				}
				?>
			</div>

			<div class="column">
				<?php 
				include "databases.php";
				$res = mysqli_query($induction,"SELECT * FROM `lethal_cases`");
				?>
				<h2>Қайтыс болғандар:<strong class="lc">
					<?php 
					echo $data3['sum'];
					?></strong>
				</h2><br><br>
			</p>
			<?php 
			while ($rc=mysqli_fetch_assoc($res)) {
				echo $rc['city'];
				echo "-";
				echo $rc['people'];
				echo "<br>";
			}
			?>
		</div>
	</div>
</div>
<div id="rightCol">
	<a href="https://www.worldometers.info/coronavirus/" title="Әлемдік көрсеткіш" target="_blank"><div class="banner"> <img src="img/banner.png" alt="Banner 1" title="Әлемдік көрсеткіш"></div>
	</a>
	<a href="https://www.who.int/emergencies/diseases/novel-coronavirus-2019" title="ӘДСҰ" target="_blank"><div class="banner"> <img src="img/banner2.png" alt="Banner 2" title="ӘДСҰ"></div>
	</a>
	<a href="https://www.coronavirus2020.kz/kz" title="Қазақстан ресми сайты" target="_blank"><div class="banner"><img src="img/banner3.jpg" alt="Banner 3" title="Қазақстан ресми сайты"></div>
	</a>
</div>
</div>

<?php require_once "blocks/footer.php" ?>
</body>
</html>
