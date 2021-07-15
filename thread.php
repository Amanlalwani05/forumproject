
<?php 
  

  require("connectforum.php");

?>
<!DOCTYPE html>
<html>

    <head>
        <title></title>
        <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
        <link href="https://fonts.googleapis.com/css2?family=Alata&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/css/bootstrap.min.css" integrity="sha384-r4NyP46KrjDleawBgD5tp8Y7UzmLA05oM1iAEQ17CSuDqnUK2+k9luXQOfXJCJ4I" crossorigin="anonymous">
       
    </head>
 <body>

  


  

      <div class="row row-cols-2 row-cols-md-4 g-4 " style="margin-left: 9%" >

        

        <?php 

    $no = true;

    $sql = " SELECT * FROM `thread`";
    $result = mysqli_query($conn, $sql);
    while ($row = mysqli_fetch_assoc($result)) {

    $sno=$row['SNo'];

   $no = false;

   echo "
    
  <div class='card mb-3 ml-3 mt-5'>
  <img src='code.jpg' class='card-img-top' alt='...' style='height: 200px;'>
  <div class='card-body'>
    <h5 class='card-title h1'>".$row['title']."</h5>
    <p class='card-text mt-4'>".$row['description']."</p>
    <a href='viewthread.php?sid=".$sno."'><button type='button' class='btn btn-outline-primary'  >View Thread</button></a>
  </div>
</div>
  ";

}
?>


</div>

<?php

  if($no)
  {
    echo '<div class="row-cols-1 row-cols-md-1 g-1 ml-0 " style="margin-top: 20%">
<figure class=" text-center mt-4">
  <blockquote class=" display-3">
    <p>No thread added till now.</p>
  </blockquote>
</figure> 


<footer class="footer text-center">
  <div class="container">
    <span class="text-muted">Want to add thread &nbsp <a href="insertthread.php">click here</a></span>
  </div>
</footer>  
</div>
';
  


    }
    ?>  
    	</body>



</html>
