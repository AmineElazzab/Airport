<script>
    function desactiver() {

        var radio = document.getElementById('inlineRadio2');
        var radio1 = document.getElementById('inlineRadio1');
      if(radio.checked){
        document.getElementById('search3').style.display="none";
       
      
      
      }
    else if (radio1.checked){
       document.getElementById('search3').style.display="block";  
      
     
      }

    }
</script>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta content="width=device-width, initial-scale=1" name="viewport">
	<title>Responsive Bootstrap Theme</title>
<!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" >
    <!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
	<link href="style.css" rel="stylesheet">
</head>
<body>
	<!--- Navigation -->
	<nav class="navbar navbar-dark bg-dark navbar-expand-md fixed-top">
		<div class="container-fluid">
			<a class="navbar-brand" href="index.php"><img src="img/IL MEGLIO.png"></a> 
            <!-- <button class="navbar-toggler" data-target="#navbarResponsive" data-toggle="collapse" type="button"><span class="navbar-toggler-icon"></span></button> -->
			<!-- <div class="collapse navbar-collapse" id="navbarResponsive">
				<ul class="navbar-nav ml-auto">
					<li class="nav-item">
						<a class="nav-link active" href="index.php">Home</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="portfolio.php">Portfolio</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="pricing.php">Pricing</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="team.php">Team</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="./views/includes/footer.php">Contact Us</a>
					</li>
				</ul>
			</div> -->
		</div>
	</nav>
	<!--- End Navigation -->

	<!--- Image Slider -->

	<div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
  <div class="carousel-indicators">
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
    <!-- <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="3" aria-label="Slide 4"></button> -->
  </div>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="img/bg.jpg" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="img/bg1.jpg" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="img/bg5.jpg" class="d-block w-100" alt="...">
    </div>
    <!-- <div class="carousel-item">
      <img src="img/bg5.jpg" class="d-block w-100" alt="...">
    </div> -->
  </div>

  <div class="carousel-caption justify-content-center bg-dark px-3  ">
                <form method="post" action="index/vols">
                <div>

<div class="form-check form-check-inline"> 
    <input class="form-check-input" type="radio" onclick="desactiver()" name="inlineRadioOptions1" id="inlineRadio1" value="option1">
    <label class="form-check-label" for="inlineRadio1">Aller-retour</Aller-retour></label>
</div>
<div class="form-check form-check-inline">
    <input class="form-check-input" onclick="desactiver()" type="radio" name="inlineRadioOptions1" id="inlineRadio2" value="option2">
    <label class="form-check-label" for="inlineRadio1">Aller-simple</label>
</div>

</div>
                    <div class="row py-2">
                        <div class="col"><input type="text" name="search" class="form-control" placeholder="ville-départ" aria-label="Username" aria-describedby="basic-addon1"></div>
                        <div class="col"><input type="text" name="search1" class="form-control" placeholder="ville-arrivée" aria-label="Username" aria-describedby="basic-addon1"></div>
                        <div class="col"><input type="date" name="search2" class="form-control" placeholder="date-départ" aria-label="Username" aria-describedby="basic-addon1"></div>
                        <div class="col"><input type="date" name="search3" id="search3" class="form-control" placeholder="date-retour" aria-label="Username" aria-describedby="basic-addon1"></div>
                        <div class="col"><button type="submit" name="find" class="btn btn-success" >Rechercher des vols</button></div>
                    </div>



                </form>
            </div>

  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>

	<!--- End Image Slider -->

	<!--- Complete Bootstrap Course -->
	<div class="container">
		<div class="row justify-content-center text-center">
			<div class="col-10 py-5">
				<h2>Voyagez en toute sécurité avec nous</h2>
				<p class="lead">Tout au long de la crise du COVID-19, vous pouvez compter sur nous pour voyager en toute sécurité.</p>
                <a class="btn btn-purple btn-lg" href="./views/client/client.php">Login | Signup</a>
			</div>
		</div>
	</div>
	<!--- Complete Bootstrap Course -->
	<div class="jumbotron">
		<div class="container">
			<h2 class="text-center pt-5 pb-3">Nos meilleures offres</h2>
			<div class="row justify-content-center text-center">
				<div class="col-10 col-md-4">
					<div class="feature">
                    <img src="img/B1.jpg" class="d-block w-100" alt="...img-fluid" alt="...">
                    <h3>Rajasthan</h3>
						<p>Rajasthan is a state in northern India. It covers 342,239 square kilometres or 10.4 percent of India's total geographical area. It is the largest Indian state by area and the seventh largest by population..</p>
					</div>
				</div>
				<div class="col-10 col-md-4">
					<div class="feature">
                    <img src="img/B4.jpeg" class="d-block w-100" alt="...img-fluid" alt="...">
						<h3>Marrakesh</h3>
						<p>Marrakesh, a former imperial city in western Morocco, is a major economic center and home to mosques, palaces and gardens. The medina is a densely packed, walled medieval city dating to the Berber Empire, with mazelike alleys where thriving souks (marketplaces) sell traditional textiles, pottery and jewelry. A symbol of the city, and visible for miles, is the Moorish minaret of 12th-century Koutoubia Mosque..</p>
					</div>
				</div>
				<div class="col-10 col-md-4">
					<div class="feature">
						<img src="img/B6.jpg" class="d-block w-100" alt="...img-fluid" alt="...">
						<h3>Cairo</h3>
						<p>Cairo, Egypt’s sprawling capital, is set on the Nile River. At its heart is Tahrir Square and the vast Egyptian Museum, a trove of antiquities including royal mummies and gilded King Tutankhamun artifacts. Nearby, Giza is the site of the iconic pyramids and Great Sphinx, dating to the 26th century BC. In Gezira Island’s leafy Zamalek district, 187m Cairo Tower affords panoramic city views.</p>
					</div>
				</div>
			</div><!--- End Row -->
		</div><!--- End Container -->
	</div>
	<!--- End Jumbotron -->

	<!--- Two Column Section -->
	<!-- <div class="container py-3">
		<div class="row justify-content-center py-5">
			<div class="col-lg-6">
				<h3 class="pb-4">Learn to build Bootstrap websites</h3>
				<p>The columns will automatically stack on top of each other when the screen is less than 992px wide.</p>
				<p>Resize the browser window to see the effect. Responsive web design has become more important as the amount of mobile traffic now accounts for more than half of total internet traffic.</p><a class="btn btn-purple btn-lg" href="#">Bootstrap Course</a>
			</div>
			<div class="col-lg-6"><img class="img-fluid" src="img/responsive.png"></div>
		</div>
	</div> -->
	<!--- End Two Column Section -->

<!--- Script Source Files -->
<script src="js/jquery-3.3.1.min.js"></script> 
<script src="bootstrap-4.3.1-dist/js/bootstrap.min.js"></script>
<!--- End of Script Source Files -->

</body>
</html>
