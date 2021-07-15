<?php


if(isset($_POST['login']))
{
		require("connectforum.php");

	$user = $_POST["user"];
	$pass = $_POST["passw"];
	$sql = "SELECT * FROM signup WHERE userid = '$user' ";
    $result = mysqli_query($conn, $sql);
    $num = mysqli_num_rows($result);
    if ($num==1) {
    $row = mysqli_fetch_assoc($result);
    $ps = "".$row['password']."";
    if (password_verify($pass, $ps)) {
        # code...
    session_start();

    $_SESSION['loggedin'] = true;
    $_SESSION['username'] = $user;
    header("Location:forum.php");

    }

    else
    {
        echo '
          <div class="alert alert-danger alert-dismissible fade show" role="alert">
        <strong>Wrong Password!&nbsp</strong>Enter correct password.
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
      </div>';
    }
    }

    else
    {   
    	echo'
          <div class="alert alert-danger alert-dismissible fade show" role="alert">
        <strong>Error!&nbsp</strong> Username not exist.
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
      </div>';
      }
  }


?>

