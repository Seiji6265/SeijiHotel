<?php 
    session_start();
    $is_login = $_SESSION['zalogowany'] ?? false;
    $is_admin = $_SESSION['admin'] ?? false;
    $is_user = $_SESSION['user'] ?? false;
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
              <li class="nav-item active">
                <a class="nav-link" href="index.php">Start</a>
              </li>
              <?php 
                if(!$is_admin) :
                ?>
              <li class="nav-item">
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
              <?php elseif($is_admin) :
                ?>
              <li class="nav-item">
                <a class="nav-link" href="admin.php">Panel Sterowania</a>
              </li>
            <?php endif; ?>
            </ul>
         
        </div>
        
        
        
    </nav>
    </header>
	
	<main>
        <div class="container">
        <section class="start">
            <h1>Witaj na stronie naszego Hotelu SeijiHotel.pl !</h1>
                <?php if ($is_user): ?>
            <p>Zalogowano jako Użytkownik</p>
                <?php elseif ($is_admin): ?>
            <p>Zalogowano jako Administrator</p>
                        <?php endif; ?>
                <?php if (!$is_login): ?>
               <form method="POST" action="index.php">
                    <b>Login:</b> <input type="text" name="login"><br>
                    <b>Hasło:</b> <input type="password" name="haslo"><br>
                    <input type="submit" value="Zaloguj" name="loguj"><br>
               </form>
                
            <p>
            <?php
                
                $conn2 = mysqli_connect("localhost","id20912153_seiji6265","Hotel33@11","id20912153_hotel");
                if (isset($_POST['loguj']))
                {
                    $login = $_POST['login'];
                    $haslo = $_POST['haslo'];
                    $sql3 = "SELECT login, haslo FROM users WHERE login = '".$login."' AND haslo = '".$haslo."'";
                    $sql4 = "SELECT login, pass FROM admins WHERE login = '".$login."' AND pass = '".$haslo."'";
                    $r1 = mysqli_query($conn2,$sql3);
                    $r2 = mysqli_query($conn2,$sql4);
                    if (mysqli_num_rows($r1) > 0)
                    {
                        $_SESSION['zalogowany'] = true;
                        $_SESSION['user'] = true;
                        $_SESSION['login'] = $login;
                        echo '<script type="text/javascript">
                                  window.location.href = "index.php";
                              </script>';
                        exit;
                    }
                        else if(mysqli_num_rows($r2) > 0)
                            {
                                $_SESSION['zalogowany'] = true;
                                $_SESSION['admin'] = true;
                                $_SESSION['login'] = $login;
                                echo '<script type="text/javascript">
                                          window.location.href = "index.php";
                                      </script>';
                                exit;
                            }
                            else echo "Wpisano złe dane.";
                }
            ?>
            </p>
            <?php else: ?>
                
                <form action="index.php" method="POST">
                    <input type="submit" value="Wyloguj" name="wyloguj"><br>
                </form>
            <?php endif; ?>
            <?php
            if (isset($_POST['wyloguj'])) {
              $_SESSION['zalogowany'] = false;
              $_SESSION['user'] = false;
              $_SESSION['admin'] = false;
              echo '<script type="text/javascript">
                        window.location.href = "index.php";
                    </script>';
              exit;
          }
            ?>
            <?php if (!$is_login): ?>
             <p><a href="rejestracja.php">Nie masz konta ? Zarejestruj się</a></p>
            <?php endif; ?>
                <br>
                <img class="fixed-ratio-resize col-sm-6 col-md-5" src="img/hotel1.png">

        </section>
        </div>
    </main>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
	
	<script src="js/bootstrap.min.js"></script>
    </body>
</html>