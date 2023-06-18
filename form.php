<?php 
    session_start();
    $is_login = $_SESSION['zalogowany'];
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
	<link rel="stylesheet" href="form.css">
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
              <li >
                <a class="nav-link" href="index.php">Start</a>
              </li>
              <li>
                <a class="nav-link" href="pokoje.php">Pokoje</a>
              </li>
              <li class="nav-item active">
                <a class="nav-link" href="form.php">Zarezerwuj</a>
              </li>
              <li>
                <a class="nav-link" href="4.php">Kontakt</a>
              </li>
            </ul>
        </div>
        
        
        
    </nav>
    </header>
	
	<main>
        <section class="container">
        <section class="fornut">
            <h1>Witaj w formularzu rezerwacyjnym</h1>
            <br>
            <form action="form.php" method="POST">
                <b>1 noc w pokoju 1 osobowym - 150 zł</b> <input type="text" name="p1" placeholder="Ilość nocy"><input type="submit" name="pk1" value="Zarezerwuj"><input type="submit" name="d1" value="Usuń"><br>
                <b>1 noc w pokoju 2 osobowym - 250 zł</b> <input type="text" name="p2" placeholder="Ilość nocy"><input type="submit" name="pk2" value="Zarezerwuj"><input type="submit" name="d2" value="Usuń"><br>
                <b>1 noc w pokoju 3 osobowym - 330 zł</b> <input type="text" name="p3" placeholder="Ilość nocy"><input type="submit" name="pk3" value="Zarezerwuj"><input type="submit" name="d3" value="Usuń"><br>
                <b>1 noc w pokoju 4 osobowym - 400 zł</b> <input type="text" name="p4" placeholder="Ilość nocy"><input type="submit" name="pk4" value="Zarezerwuj"><input type="submit" name="d4" value="Usuń"><br>
            </form><br>
        
            
        
        <?php
            $conn3 = mysqli_connect("localhost","id20912153_seiji6265","Hotel33@11","id20912153_hotel");
            $loginform = $_SESSION['login'];
            if(isset($_POST['pk1']))
            {    
                $p1 = $_POST['p1'];
                $sql10 = "Insert into p1os values('".$loginform."', '".$p1."')";
                $sql = "Select * from p1os";
                $rezultat=mysqli_query($conn3, $sql);
                if (mysqli_num_rows($rezultat) < 3) 
                {
                    if($p1 > 0)
                    {
                    mysqli_query($conn3,$sql10);
                    }
                    else echo "Nie można zarezerwować 0 dni";
                }
                else echo "Nie ma miejsc w tych pokojach";
            }
            if(isset($_POST['pk2']))
            {    
                $p1 = $_POST['p2'];
                $sql10 = "Insert into p2os values('".$loginform."', '".$p1."')";
                $sql = "Select * from p2os";
                $rezultat=mysqli_query($conn3, $sql);
                if (mysqli_num_rows($rezultat) < 3) 
                {
                    if($p1 > 0)
                    {
                    mysqli_query($conn3,$sql10);
                    }
                    else echo "Nie można zarezerwować 0 dni";
                }
                else echo "Nie ma miejsc w tych pokojach";
            }
            if(isset($_POST['pk3']))
            {    
                $p1 = $_POST['p3'];
                $sql10 = "Insert into p3os values('".$loginform."', '".$p1."')";
                $sql = "Select * from p3os";
                $rezultat=mysqli_query($conn3, $sql);
                if (mysqli_num_rows($rezultat) < 3) 
                {
                    if($p1 > 0)
                    {
                    mysqli_query($conn3,$sql10);
                    }
                    else echo "Nie można zarezerwować 0 dni";
                }
                else echo "Nie ma miejsc w tych pokojach";
            }
            if(isset($_POST['pk4']))
            {    
                $p1 = $_POST['p4'];
                $sql10 = "Insert into p4os values('".$loginform."', '".$p1."')";
                $sql = "Select * from p4os";
                $rezultat=mysqli_query($conn3, $sql);
                if (mysqli_num_rows($rezultat) < 3) 
                {
                    if($p1 > 0)
                    {
                    mysqli_query($conn3,$sql10);
                    }
                    else echo "Nie można zarezerwować 0 dni";
                }
                else echo "Nie ma miejsc w tych pokojach";
            }
            if(isset($_POST['d1']))
            {
                $sql="Delete from p1os where login='".$loginform."'";
                mysqli_query($conn3,$sql);
                echo "Usunięto";
            }
            if(isset($_POST['d2']))
            {
                $sql="Delete from p2os where login='".$loginform."'";
                mysqli_query($conn3,$sql);
                echo "Usunięto";
            }
            if(isset($_POST['d3']))
            {
                $sql="Delete from p3os where login='".$loginform."'";
                mysqli_query($conn3,$sql);
                echo "Usunięto";
            }
            if(isset($_POST['d4']))
            {
                $sql="Delete from p4os where login='".$loginform."'";
                mysqli_query($conn3,$sql);
                echo "Usunięto";
            }
            
        ?>
            <p>Twoje Rezerwacje :</p>
            <p>Pokoje 1 osobowe : </p>
            <?php 
            $sql="Select login,dni from p1os where login='".$loginform."'";
            $wynik = mysqli_query($conn3,$sql);
                if(mysqli_num_rows($wynik)> 0) {
                while($row = mysqli_fetch_assoc($wynik)) {
                echo "Login : " .$row["login"]. " - Ilość Dni : ".$row["dni"]. "<br>";
                }

            }
            ?>
            <br>
            <p>Pokoje 2 osobowe : </p>
            <?php 
            $sql="Select * from p2os where login='".$loginform."'";
            $wynik = mysqli_query($conn3,$sql);
                if(mysqli_num_rows($wynik)> 0) {
                while($row = mysqli_fetch_assoc($wynik)) {
                echo "Login : " .$row["login"]. " - Ilość Dni : ".$row["dni"]. "<br>";
                }
                }
            ?>
            <br>
            <p>Pokoje 3 osobowe : </p>
            <?php 
            $sql="Select * from p3os where login='".$loginform."'";
            $wynik = mysqli_query($conn3,$sql);
                if(mysqli_num_rows($wynik)> 0) {
                while($row = mysqli_fetch_assoc($wynik)) {
                echo "Login : " .$row["login"]. " - Ilość Dni : ".$row["dni"]. "<br>";
                }
                }
            ?>
            <br>
            <p>Pokoje 4 osobowe : </p>
            <?php 
            $sql="Select * from p4os where login='".$loginform."'";
            $wynik = mysqli_query($conn3,$sql);
                if(mysqli_num_rows($wynik)> 0) {
                while($row = mysqli_fetch_assoc($wynik)) {
                echo "Login : " .$row["login"]. " - Ilość Dni : ".$row["dni"]. "<br>";
                }
                }
            ?>
        </section>
        </section>
    </main>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
	
	<script src="js/bootstrap.min.js"></script>
    </body>
</html>