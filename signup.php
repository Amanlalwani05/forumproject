<?php


	$sign = false;
	require("connectforum.php");
	
	$user = $_POST["username"];
	$cpassword = $_POST["cpassword"];
	$password = $_POST["password"];
	$interest = $_POST["interest"];
		$files = $_FILES['image']['tmp_name'];
    	$filename = $_FILES['image']['name'];
    	$ext = explode('.', $filename);
    	$extn = strtolower(end($ext));
    	$filesname= "$user".".$extn";
  		$des = "image/".$filesname;
  		move_uploaded_file($files,$des);
    	# code...



	if($password==$cpassword)
	{	
			
		$sql = "SELECT userid from signup where userid = '$user'";
		$result = mysqli_query( $conn, $sql);
		if (mysqli_num_rows($result)!=0) {

			#userid exist

  	echo '<div class="alert alert-danger	 alert-dismissible fade show" role="alert">
  <strong>User id already exist!&nbsp</strong> Change your username.
  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>';


			
		}

		else
		{

			
			$fileext = array('png', 'jpg', 'jpeg');

			if (in_array($extn, $fileext)) {

			#not exist
			$hash = password_hash($password, PASSWORD_DEFAULT);
			$sql = "INSERT INTO `signup` ( `userid`, `password`, `interest`,`Images`) VALUES ( '$user', '$hash', '$interest','$des')";
			$resul = mysqli_query( $conn, $sql);

			if($resul)
			{

				header("Location:signuplogin.php");

			  	echo '<div class="alert alert-success	 alert-dismissible fade show" role="alert">
   			    <strong>Congrats!&nbsp</strong> Signup Successfull.
			    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
			    </div>';


			    session_start();
			    $_SESSION['loggedin'] = true;
			    $sign = true;



				#insertion success
			}

			else
			{

			  	echo '<div class="alert alert-danger	 alert-dismissible fade show" role="alert">
			  <strong>Oops!&nbsp</strong> Signup failed.
			  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
			</div>';


				#insertion failed
			}
		}

		else
		{

			  	echo '<div class="alert alert-danger	 alert-dismissible fade show" role="alert">
			  <strong>Error!&nbsp</strong> Select appropiate format of image.
			  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
			</div>';

		}

		}


	}

	else
	{


			  	echo '<div class="alert alert-danger alert-dismissible fade show" role="alert">
			  <strong>Oops!&nbsp</strong> Password and Confirm Password did not matched.
			  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
			</div>';

		#password not match
	}

?>