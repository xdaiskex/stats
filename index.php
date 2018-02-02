<?php
	include "connection.php";
	session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8"> 
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Stats</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
	<link href="https://use.fontawesome.com/releases/v5.0.6/css/all.css" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="css/animate.css">
	<link rel="stylesheet" type="text/css" href="css/styles.css">
</head>
<body>
	<div class="container">
		<div class="row">
			<div class="col box">
				<?php
					$select = "SELECT * FROM stats WHERE id='1'";
					$result = $mysqli->query($select);

					while($row = $result->fetch_array(MYSQLI_ASSOC)){
						$strength = trim($row['strength']);
						$health = trim($row['health']);
						$willpower = trim($row['willpower']);
						$intellect = trim($row['intellect']);
						$charisma = trim($row['charisma']);
						$exp = trim($row['exp']);
					}
				?>
				<table class="table table-bordered table-hover table-dark animated bounceInLeft">
					<tr>
						<td>Strength</td>
						<td id="strengthNum" class="numbers">
							<?php echo $strength; ?>
						</td>
						<td class="buttons">
							<button id="strengthAdd" class="btn btn-primary">
								<i class="fas fa-plus"></i>
							</button>
							<button id="strengthMinus"class="btn btn-danger">
								<i class="fas fa-minus"></i>
							</button>
						</td>
					</tr>
					<tr>
						<td>Health</td>
						<td id="healthNum" class="numbers">
							<?php echo $health; ?>
						</td>
						<td class="buttons">
							<button id="healthAdd" class="btn btn-primary">
								<i class="fas fa-plus"></i>
							</button>
							<button id="healthMinus" class="btn btn-danger">
								<i class="fas fa-minus"></i>
							</button>
						</td>
					</tr>
					<tr>
						<td>Willpower</td>
						<td id="willpowerNum" class="numbers">
							<?php echo $willpower; ?>
						</td>
						<td class="buttons">
							<button id="willpowerAdd" class="btn btn-primary">
								<i class="fas fa-plus"></i>
							</button>
							<button id="willpowerMinus" class="btn btn-danger">
								<i class="fas fa-minus"></i>
							</button>
						</td>
					</tr>
					<tr>
						<td>Intellect</td>
						<td id="intellectNum"class="numbers">
							<?php echo $intellect; ?>
						</td>
						<td class="buttons">
							<button id="intellectAdd" class="btn btn-primary">
								<i class="fas fa-plus"></i>
							</button>
							<button id="intellectMinus" class="btn btn-danger">
								<i class="fas fa-minus"></i>
							</button>
						</td>
					</tr>
					<tr>
						<td>Charisma</td>
						<td id="charismaNum" class="numbers">
							<?php echo $charisma; ?>
						</td>
						<td class="buttons">
							<button id="charismaAdd" class="btn btn-primary">
								<i class="fas fa-plus"></i>
							</button>
							<button id="charismaMinus" class="btn btn-danger">
								<i class="fas fa-minus"></i>
							</button>
						</td>
					</tr>
					<tr>
						<td colspan="3" class="center">
							<button id="submit" class="btn btn-lg btn-primary">
								Update stats
							</button>
						</td>
					</tr>
				</table>
				
				
			</div>

			<div class="col box animated bounceInRight" id="stats">
				
			</div>
		</div>
		<div class="col">
			<div class="progress">
			    <div class="progress-bar" role="progressbar" aria-valuenow="2" aria-valuemin="0" aria-valuemax="5" style="width: 0%">
			    	<?php echo $exp; ?>
			    </div>
			</div>
		</div>
	</div>

	<!-- Scripts -->
	<script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>

	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>

	<!-- Stat Pentagon -->
	<script src="js/stats.js"></script>
</body>
</html>