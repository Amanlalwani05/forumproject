<?php
	
	require("connectforum.php");	
	$id = $_GET['sid'];

	session_start();
    {
    
    if(!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] != true )
    {


        # code...
    }

    else 
    {


      $name = $_SESSION['username'];
      $sql="SELECT * FROM signup where userid = '$name'";
      $resul = mysqli_query( $conn, $sql);
      while ($row = mysqli_fetch_assoc($resul)) {

        $userid = $row['sno'];
        $in = true;
        $userimg = $row['Images'];
      # code...
    }

    }
  }




$ins = false;
$fail= false;


if(isset($_POST['submit']))
{
  	

	$problem = $_POST["comment"];
	

	$sql = "INSERT INTO `comment` ( `comment`, `tid`, `uid`  ) VALUES (  '$problem', '$id', '$userid')";
	$resul = mysqli_query( $conn, $sql);

	if ($resul) 
	{

		$ins = true;
		# code...
	}

	else
	{
		$fail = true;
	}

  if($ins) {

  	echo '
          <div class="alert alert-success alert-dismissible fade show" role="alert">
        <strong>Congrats!&nbsp</strong> Comment inserted successfully.
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
      </div>';
  	# code...
  }

  if($fail)
	{
		echo '
          <div class="alert alert-danger alert-dismissible fade show" role="alert">
        <strong>Failed!&nbsp</strong> Comment not inserted.
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
      </div>';
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

        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">


    <title>Hello, world!</title>
  </head>
  <body>
    

<?php 


	
    $no = true;
    

    $sql = " SELECT * FROM `threadlist` WHERE sno=$id";
    $result = mysqli_query($conn, $sql);


while ($row = mysqli_fetch_assoc($result))
{

	$no = false;
	$threadid = $row['tid'];
   echo '

<div class="container jumbotron mt-4">
  <h1 class="display-4">'.$row['title'].'</h1>
  <p class="lead">'.$row['description'].'</p>
  <hr class="my-4">
  <p>It uses utility classes for typography and spacing to space content out within the larger container.</p>
  <p class="text-justify">Written by 
    '.$_SESSION['username'].' at '.$row['date'].'</p>
  <p class="lead">
    <a class="btn btn-primary btn-lg" href="#" role="button">Learn more</a>
  </p>
</div>
';}


?>


    <div class=" row-cols-1 row-cols-md-1 g-1 ml-0 " style="margin-top: 10%;">
<figure class=" mt-4">
  <blockquote class=" text-center display-6">
    <p>Insert Comments</p>
  </blockquote>
</figure>
</div >
  <?php

  if ($in) {
    # code...
  

    echo'<form method="post" class=" container" >
  <div class=" mb-3">
    <label for="exampleInputEmail1" class="form-label">Enter your comment</label>
    <textarea class="form-control" name="comment" ></textarea>
  </div>
   <button type="submit" class="btn btn-primary" name="submit">Submit</button>
</form>'; 

	echo '<hr style="margin-top: 10%;">
    <div class=" row-cols-1 row-cols-md-1 g-1 ml-0 " >
<figure class=" mt-4">
  <blockquote class=" text-center display-6">
    <p>Browse Comments</p>
  </blockquote>
</figure>
</div>';


    
    $sql = "SELECT * from comment where tid = '$id' and uid = '$userid'";
    $result = mysqli_query( $conn, $sql);

    if (mysqli_num_rows($result)!=0)
     {

    while ($row = mysqli_fetch_assoc($result)) {

    $sno=$row['sno'];
      echo '<div class= "container row mt-4 mb-4" style="margin-left:5%;">
      <div class="col-sm-1">';
      echo '

  <img class="align-self-center mt-2 mb-2 ml-4 rounded-circle" src="'.$userimg.'" alt= "Generic placeholder image" height="60px" width="60px" style="margin-left:35%; margin-top:40%;">
 </div> <div class="col-sm-8 " >
    <p class="text-justify">
    '.$row['comment'].'</p>
    <p class="text-justify">Written by 
    '.$_SESSION['username'].' at '.$row['time'].'</p>
  </div>
</div>
<hr>

';


      #userid exist
      
    }
  }

    else
    {

      echo '
<figure class="container mt-4">
  <blockquote class=" h5">
    <p>No problem added.</p>
  </blockquote>
</figure>';

      #not exist
    }


}






  if ($in == false) {

    echo "login first";
     # code...
   } 
?>




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