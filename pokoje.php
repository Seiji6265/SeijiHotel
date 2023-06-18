<?php 
    session_start();
    $is_login = $_SESSION['zalogowany'] ?? false;
?>
<!DOCTYPE html>
<html lang="pl">
<head>

	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	
	<title>SeijiHotel</title>
	
	<meta name="keywords" content="SebSob">
	<meta name="author" content="Jan Kowalski">
	<meta http-equiv="X-Ua-Compatible" content="IE=edge">
    <link rel="icon" href="img/logo.png">
	
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="main.css">
	<link href="https://fonts.googleapis.com/css?family=Open+Sans:400,700&amp;subset=latin-ext" rel="stylesheet">
	
</head>

<body>
    <header>
    <nav class="navbar navbar-dark bg-primary navbar-expand-md">
        
     <a class="navbar-brand" href="#"><img src="img/logo.png" width="30" height="30" class="d-inline-block mr-l align-bottom" alt="">SeijiHotel.pl</a>
        
     <button class="navbar-toggler order-first" type="button" data-toggle="collapse"     data-target="#mainmenu" aria-controls="mainmenu" aria-expanded="false" aria-label="navswitch">
         <span class="navbar-toggler-icon"></span>
     </button>
        <div class="collapse navbar-collapse" id="mainmenu">
            <ul class="navbar-nav mr-auto">
              <li>
                <a class="nav-link" href="index.php">Start</a>
              </li>
              <li class="nav-item active">
                <a class="nav-link" href="pokoje.php">Pokoje</a>
              </li>
              <?php 
                if($is_login) :
                ?>
              <li class="nav-item">
                <a class="nav-link" href="form.php">Zarezerwuj</a>
              </li>
              <?php endif; ?>
              <li class="nav-item">
                <a class="nav-link" href="4.php">Kontakt</a>
              </li>
            </ul>
        </div>
        
        
        
    </nav>
    </header>
	
	<main>
        <section class="jumpers">
		
			<div class="container">
				
				<header>
					
					<h1>Pokoje</h1>
					<p>Tu przedstawiamy wygląd pokoi w naszym hotelu</p>
						
				</header>
				
				<div class="row">
					
					<div class="col-sm-12 col-md-12 offset-md-12">
					
						<figure>
							<a href="#"><img src="img/pokoj1os.png" alt="1os"></a>
							<figcaption>Pokój 1 osobowy</figcaption>
						</figure>
					
					</div>
					
					<div class="col-sm-12 col-md-12">
					
						<figure>
							<a href="#"><img src="img/pokoj2os.png" alt="2os"></a>
							<figcaption>Pokoj 2 osobowy</figcaption>
						</figure>
					
					</div>

					<div class="col-sm-12 col-md-12">
					
						<figure>
							<a href="#"><img src="img/pokoj3os.png" alt="Meruem"></a>
							<figcaption>Pokoj 3 osobowy</figcaption>
						</figure>
					
					</div>

					<div class="col-sm-12 col-md-12">
					
						<figure>
							<a href="#"><img src="img/pokoj4os.png" alt="Tendou"></a>
							<figcaption>Pokoj 4 osobowy</figcaption>
						</figure>
					
					</div>

					
				
			</div>	
            </div>
		</section>
    </main>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
	
	<script src="js/bootstrap.min.js"></script>
    </body>
</html>