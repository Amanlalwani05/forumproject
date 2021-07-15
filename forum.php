<?php

require("connectforum.php");
 ?>

 <!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">

    <title>Forum</title>
  </head>
  <body>

    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Forum</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavDropdown">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="forum.php">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="insertthread.php">Insert Thread</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Contact</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Categories
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">

          <?php 

              $sql = "SELECT title, SNo FROM `thread` ";
              $result = mysqli_query($conn, $sql);
              while($row = mysqli_fetch_assoc($result))
              {
                echo '<li><a class="dropdown-item" href="viewthread.php?sid='.$row['SNo'].'">'.$row['title'].'</a></li>';

              }


           ?>
          </ul>
        </li>
      </ul>
    </div>

    <?php

    session_start();
    {
 
    if(!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] != true )
    {



      echo '
    <form class="d-flex " action="signuplogin.php">
        <button type="submit" class="btn btn-primary mr-3" >Login/Signup</button>
    </form>';
  }                                     

  else
  {

      $name = $_SESSION['username'];
      $sql="SELECT * FROM signup where userid = '$name'";
      $resul = mysqli_query( $conn, $sql);
      while ($row = mysqli_fetch_assoc($resul))
     {


    echo '<img class="rounded-circle" width="80" height="40" src='.$row["Images"].' role="img" preserveAspectRatio="xMidYMid slice" focusable="false" style="margin-right: 0%; width: 4%;" ></img>'; 

    }

  
      echo '<div class="text-center ml-2" style="margin-right: 40%; width: 20%; color: white; "> Welcome '.$_SESSION['username'].'</div>';


      echo '
    <form class="d-flex " action="logout.php">
        <button type="submit" class="btn btn-primary mr-3" >Logout</button>
    </form>';

  


  }
    }
    


     ?> 
  </div>
</nav>

<div class="container flex-shrink-0">
<?php
  

  require("thread.php");

  ?>

  </div>


<div class ="footer bg-dark" style="position: fixed; top: 95%; width: 100%;">
      <div class="container">
        <p class="muted credit text-center" style="color: white;">Copyright.</p>
      </div>
    </div>

  



    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.min.js" integrity="sha384-Atwg2Pkwv9vp0ygtn1JAojH0nYbwNJLPhwyoVbhoPwBhjQPR5VtM2+xf0Uwh9KtT" crossorigin="anonymous"></script>
    -->
  </body>
</html>