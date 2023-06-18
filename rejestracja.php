
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
	
	<!--[if lt IE 9]>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.min.js"></script>
	<![endif]-->

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
              <li class="nav-item active">
                <a class="nav-link" href="index.php">Wróć na stronę główną</a>
              </li>
            </ul>
        </div>
        
        
        
    </nav>
    </header>
	
<main>
        <div class="container">
        <section class="start">
           
           
           
             <form method="POST" action="rejestracja.php">
                <input type="text" name="login" placeholder="Podaj login" required><br>
                <input type="password" name="haslo" placeholder="Podaj haslo" required><br>
                <input type="email" name="mail" placeholder="Podaj email" required><br>
                <input type="tel" name="nrtel" placeholder="Podaj numer telefonu" required><br>
                <input type="submit" name="rejestruj" value="Utwórz">
            </form>
            
       	<?php
            $conn = mysqli_connect("localhost","id20912153_seiji6265","Hotel33@11","id20912153_hotel");

            if(isset($_POST['rejestruj']))
            {
                $login = $_POST['login'];
                $haslo = $_POST['haslo'];
                $mail = $_POST['mail'];
                $nrtel = $_POST['nrtel'];
                $sql = "SELECT login FROM users WHERE login = '".$login."'";
                $sql2 = "INSERT INTO users VALUES('".$login."', '".$haslo."', '".$mail."', '".$nrtel."')";
                $rezultat = mysqli_query($conn, $sql);
                if (mysqli_num_rows($rezultat) == 0)
                {
                        mysqli_query($conn,$sql2);

                        echo "Konto zostało utworzone!";
                }
                else echo "Podany login jest już zajęty.";
            }
        ?> 
           
           

        </section>
        </div>
    </main>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
	
	<script src="js/bootstrap.min.js"></script>
    </body>
</html>