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
              <li class="nav-item active">
                <a class="nav-link" href="admin.php">Panel Sterowania</a>
              </li>
            </ul>
        </div>
        
        
        
    </nav>
    </header>
	
	<main>
        <div class="container">
            <h1>Użytkownicy : </h1><br>
            <?php 
            $conn = mysqli_connect("localhost","id20912153_seiji6265","Hotel33@11","id20912153_hotel");
            $sql="Select login,mail,nrtel from users";
            $wynik = mysqli_query($conn,$sql);
            if(mysqli_num_rows($wynik)> 0) {
             while($row = mysqli_fetch_assoc($wynik)) {
             echo "Login : " .$row["login"]. " - Mail : ".$row["mail"]. " - Nr Telefonu : ".$row["nrtel"]." <br>";
            }

            }
            ?>
            <form action="admin.php" method="POST">
            <b>Usuń Użytkownika : </b> <input type="text" name="du" placeholder="Login"><input type="submit" name="d1" value="Usuń"><br>
            </form><br>
            <h1>Administratorzy : </h1><br>
            <?php 
            $conn = mysqli_connect("localhost","id20912153_seiji6265","Hotel33@11","id20912153_hotel");
            $sql3="Select login,pass from admins";
            $wynik = mysqli_query($conn,$sql3);
            if(mysqli_num_rows($wynik)> 0) {
             while($row = mysqli_fetch_assoc($wynik)) {
             echo "Login : " .$row["login"]. " - Hasło : ".$row["pass"]." <br>";
            }

            }
            ?>
            <h1>Rezerwacje : </h1>
            <p>Pokoje 1 osobowe : </p>
            <?php 
               $sql1="Select login,dni from p1os";
               $wynik = mysqli_query($conn,$sql1);
                if(mysqli_num_rows($wynik)> 0) {
                 while($row = mysqli_fetch_assoc($wynik)) {
                 echo "Login : " .$row["login"]. " - Ilość Dni : ".$row["dni"]. "<br>";
                }

            }
            ?>
            <br>
            <p>Pokoje 2 osobowe : </p>
            <?php 
               $sql1="Select * from p2os";
               $wynik = mysqli_query($conn,$sql1);
                if(mysqli_num_rows($wynik)> 0) {
                 while($row = mysqli_fetch_assoc($wynik)) {
                 echo "Login : " .$row["login"]. " - Ilość Dni : ".$row["dni"]. "<br>";
                }
                }
            ?>
            <br>
            <p>Pokoje 3 osobowe : </p>
            <?php 
               $sql1="Select * from p3os";
               $wynik = mysqli_query($conn,$sql1);
                if(mysqli_num_rows($wynik)> 0) {
                 while($row = mysqli_fetch_assoc($wynik)) {
                 echo "Login : " .$row["login"]. " - Ilość Dni : ".$row["dni"]. "<br>";
                }
                }
            ?>
            <br>
            <p>Pokoje 4 osobowe : </p>
            <?php 
               $sql1="Select * from p4os";
               $wynik = mysqli_query($conn,$sql1);
                if(mysqli_num_rows($wynik)> 0) {
                 while($row = mysqli_fetch_assoc($wynik)) {
                 echo "Login : " .$row["login"]. " - Ilość Dni : ".$row["dni"]. "<br>";
                }
                }
            ?>
            <br><form action="admin.php" method="POST">
            <b>Usuń rezerwacje w Pokoju 1 Osobowym</b> <input type="submit" name="de1" value="Usuń"><br>
            <b>Usuń rezerwacje w Pokoju 2 Osobowym</b> <input type="submit" name="de2" value="Usuń"><br>
            <b>Usuń rezerwacje w Pokoju 3 Osobowym</b> <input type="submit" name="de3" value="Usuń"><br>
            <b>Usuń rezerwacje w Pokoju 4 Osobowym</b> <input type="submit" name="de4" value="Usuń"><br>
            </form><br>
            <?php
                if(isset($_POST['d1']))
                {
                    $login = $_POST['du'];
                    $sql="Delete from users where login='".$login."'";
                    mysqli_query($conn,$sql);
                    echo '<script type="text/javascript">
                                window.location.href = "admin.php";
                          </script>';
                    exit;
                }
             if(isset($_POST['de1']))
                {
                    $sql="Delete from p1os";
                    mysqli_query($conn,$sql);
                    echo '<script type="text/javascript">
                                window.location.href = "admin.php";
                          </script>';
                    exit;
                }
            if(isset($_POST['de2']))
                {
                    $sql="Delete from p2os";
                    mysqli_query($conn,$sql);
                    echo '<script type="text/javascript">
                                window.location.href = "admin.php";
                          </script>';
                    exit;
                }
            if(isset($_POST['de3']))
                {
                    $sql="Delete from p3os";
                    mysqli_query($conn,$sql);
                    echo '<script type="text/javascript">
                                window.location.href = "admin.php";
                          </script>';
                    exit;
                }
            if(isset($_POST['de4']))
                {
                    $sql="Delete from p4os";
                    mysqli_query($conn,$sql);
                    echo '<script type="text/javascript">
                                window.location.href = "admin.php";
                          </script>';
                    exit;
                }
            ?>
        </div>
    </main>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
	
	<script src="js/bootstrap.min.js"></script>
    </body>
</html>