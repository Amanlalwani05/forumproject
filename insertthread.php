<?php
	

	require("connectforum.php");

  
    session_start();
    {

      

 
    if(!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] != true )
    {


        # code...
    }

    else 
    {

        $cnfirm = false;
  $failur = false;


  if(($_SERVER['REQUEST_METHOD']=='POST'))
  {
  $title = $_POST["title"];
  $desc = $_POST["description"];
  $sql="INSERT INTO `thread` ( `title`, `description`) VALUES ( '$title', '$desc')";
  $result = mysqli_query($conn, $sql);

  if($result)
  {
    $cnfirm = true;
      header("location:forum.php");


  }

  else
  {
    $failur = true;
      }


  }

  echo '
 <div class="center">
  <h1>Insert Thread</h1>
  <form  action="insertthread.php" method="POST" >
    <div class="inputbox">
      <input type="text" required="required" name="title">
      <span>Enter Title</span>
    </div>
    <div class="inputbox">
      <input type="text" required="required" name="description">
      <span>Enter Description</span>
    </div>
    <div class="inputbox">
      <input type="submit" value="submit">
    </div>
  </form>
</div>
   ';



    }

    }
  


  


?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">


    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <link rel="stylesheet" href="threadcss.css">

    <title>Hello, world!</title>

  </head>
  <body>	
<div style="position: absolute; top: 0%; width: 100%;">
  	<?php
  	if($cnfirm)
  		{

  	echo '<div class="alert alert-success	 alert-dismissible fade show" role="alert">
  <strong>Congrats!&nbsp</strong> Your thread inserted.
  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>';

  		}

  		if($failur)
  		{


  	echo '<div class="alert alert-success	 alert-dismissible fade show" role="alert">
  <strong>Oops!&nbsp</strong> Insertion failed.
  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>';


  		}
  		?>
  	</div>
 <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    -->
  </body>
</html>