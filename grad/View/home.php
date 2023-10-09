<?php
// the default page when not purchasing
require_once('../Controller/degController.php');

//create a new inctance of functions and clotheCrontroller to call back on if needed
$degController = new degController();

//get all available items of clothing and shuffle trhem randomly

$degreesInFeilds = json_decode($degController->getAll());
//get selected id from url request



?>
<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
		integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
		integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
		</script>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>

	<script src="clickmenu.js"></script>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" href="style.css">

	<!--<link rel="stylesheet" type="text/css" href="view/style.css">-->
	<title>The First Attemp</title>

</head>

<body class="" style="">
	<div class="container-lg">
		<div id="myCarousel" class="carousel slide" data-ride="carousel">
			<!-- Indicators -->
			<ol class="carousel-indicators">
				<li data-target="#myCarousel" data-slide-to="0" class="active"></li>
				<li data-target="#myCarousel" data-slide-to="1"></li>
				<li data-target="#myCarousel" data-slide-to="2"></li>
			</ol>

			<!-- Wrapper for slides -->
			<div class="carousel-inner">
				<div class="carousel-item active">
					<div class="product-holder">
						<img src=".\Assets\images\enrol.jpg" alt="unigroup1" style="width:100%;">
						<img src="Assets\images\logo.PNG" alt="logo" class="logoTop" style="width:15%;">
						<button class="actionCall bgLogoBlue textGold ">Enrol Now</button>
					</div>
				</div>

				<div class="carousel-item">
					<div class="product-holder">
						<img src=".\Assets\images\unigroup1.jpg" alt="unigroup1" style="width:100%;">
						<img src=".\Assets\images\logo.PNG" alt="logo" class="logoTop" style="width:15%;">
						<button class="actionCall bgLogoBlue textGold ">Enrol Now</button>
					</div>
				</div>

				<div class="carousel-item">
					<div class="product-holder">
						<img src=".\Assets\images\unigroup2.jpg" alt="unigroup2" style="width:100%;">
						<img src=".\Assets\images\logo.PNG" alt="logo" class="logoTop" style="width:15%;">
						<button class="actionCall bgLogoBlue textGold ">Enrol Now</button>
					</div>
				</div>

			</div>
			<!-- Left and right controls -->
			<a class="carousel-control-prev" href="#myCarousel" role="button" data-slide="prev">
				<span class="carousel-control-prev-icon gold" aria-hidden="true"></span>
				<span class="sr-only">Previous</span>
			</a>
			<a class="carousel-control-next" href="#myCarousel" role="button" data-slide="next">
				<span class="carousel-control-next-icon gold" aria-hidden="true"></span>
				<span class="sr-only">Next</span>
			</a>

		</div>

		<div class="row mainContent">
			<div id="sideMenu" class="col-3 sideMenu bgLogoBlue d-none d-sm-none d-md-block ">
				<div class="sideNavMenu ">
					<div class="collapseSide">
						<a class="active pt-1 mt-3" href="#home">Selected </a></li>
						<a class="pt-1 mt-3" href="#Cat2">Category 2</a></li>
						<a class="pt-1 mt-3" href="#Cat3">Category 3</a></li>
						<a class="pt-1 mt-3" href="#Cat4">Category 4</a></li>
					</div>
				</div>

			</div>
			<div class="col-9 border rounded">
				<!-- "Hamburger menu" / "Bar icon" to toggle the navigation links  icon d-block d-sm-block d-md-none-->
				<a id="openOverlay" href="javascript:void(0);" class="icon d-block d-sm-block d-md-none logoBlue"
					onclick="openDegFields()">
					<i class="fa fa-bars"></i>
				</a>

				<div id="myNav" class="overlay">
					<a href="javascript:void(0)" class="closeOverlayBTN" onclick="closeDegFields()">&times;</a>
					<div class="overlay-content">
						<a class="active pt-1 mt-3" href="#home">Selected </a></li>
						<a class="pt-1 mt-3" href="#Cat2">Category 2</a></li>
						<a class="pt-1 mt-3" href="#Cat3">Category 3</a></li>
						<a class="pt-1 mt-3" href="#Cat4">Category 4</a></li>
					</div>
				</div>
				<ul class="breadcrumb">
					<li><a href="#">Home</a></li>
					<li><a href="#">Fields</a></li><!--Create a list of all fields as view -->
					<li>PlaceHolder</li>
				</ul>
				<h1 class="display-1 text-center ">PlaceHolder</h1>
				<div class="row pt-5">
					<div class="col-3 d-none d-sm-none d-md-block"></div>
					<div class="col-8 border rounded text-left">
						<?php for ($i = 0; $i < count($degreesInFeilds); $i++) { ?>

							<h3><u>
									<?= $degreesInFeilds[$i]->degrees->name ?>
								</u></h3>
							<?php
							echo "<a href='?p=degrees&selected_ID=" . $degreesInFeilds[$i]->degrees->id . "'>select</a>";
							?>

							<div class="degreeContent">
								<p> Atar Requirement
									<?= $degreesInFeilds[$i]->degrees->Score ?>
								</p>
								</p>
								<p> Course Length-
									<?= $degreesInFeilds[$i]->degrees->length ?>
								</p>
								<p><small> Brief description -<br>
										<?= $degreesInFeilds[$i]->degrees->descrip ?>
									</small></p>
							</div>


						<?php } ?>
					</div>
					<?php ?>

				</div>
			</div>

			<footer>
			</footer>
</body>

</html>