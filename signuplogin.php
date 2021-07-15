<?php
require("connectforum.php");

if(isset($_POST['signup']))
{

    require("signup.php");
}

if(isset($_POST['login']))
{

    require("login.php");
}
?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.bundle.min.js">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js">
    <style type="text/css">
      
 body {
    color: #000;
    overflow-x: hidden;
    height: 100%;
    background-color: #B0BEC5;
    background-repeat: no-repeat
}

.card0 {
    box-shadow: 0px 4px 8px 0px #757575;
    border-radius: 0px
}

.card2 {
    margin: 0px 40px
}

.logo {
    width: 200px;
    height: 100px;
    margin-top: 20px;
    margin-left: 35px
}

.image {
    width: 360px;
    height: 280px
}

.border-line {
    border-right: 1px solid #EEEEEE
}

.text-sm {
    font-size: 14px !important
}

::placeholder {
    color: #BDBDBD;
    opacity: 1;
    font-weight: 300
}

:-ms-input-placeholder {
    color: #BDBDBD;
    font-weight: 300
}

::-ms-input-placeholder {
    color: #BDBDBD;
    font-weight: 300
}

input,
textarea {
    padding: 10px 12px 10px 12px;
    border: 1px solid lightgrey;
    border-radius: 2px;
    margin-bottom: 5px;
    margin-top: 2px;
    width: 100%;
    box-sizing: border-box;
    color: #2C3E50;
    font-size: 14px;
    letter-spacing: 1px
}

input:focus,
textarea:focus {
    -moz-box-shadow: none !important;
    -webkit-box-shadow: none !important;
    box-shadow: none !important;
    border: 1px solid #304FFE;
    outline-width: 0
}

button:focus {
    -moz-box-shadow: none !important;
    -webkit-box-shadow: none !important;
    box-shadow: none !important;
    outline-width: 0
}



a {
    color: inherit;
    cursor: pointer
}

.btn-blue {
    background-color: #1A237E;
    width: 150px;
    color: #fff;
    border-radius: 2px
}

.btn-blue:hover {
    background-color: #000;
    cursor: pointer
}

.bg-blue {
    color: #fff;
    background-color: #1A237E
}

@media screen and (max-width: 991px) {
    .logo {
        margin-left: 0px
    }

    .image {
        width: 300px;
        height: 220px
    }

    .border-line {
        border-right: none
    }

    .card2 {
        border-top: 1px solid #EEEEEE !important;
        margin: 0px 15px
    }

    .con1, .con
    {
      position: relative;
    }
}

    </style>

    <title>Hello, world!</title>
  </head>
  <body>

    <form method="POST" enctype="multipart/form-data">
    <div class="con">
    <div class="container-fluid px-1 px-md-5 px-lg-1 px-xl-5 py-5 mx-auto">
    <div class="card card0 border-0">
        <div class="row d-flex">
            <div class="col-lg-6">
                <div class="card1 pb-5">
                    <div class="row"> <img src="—Pngtree—scan code with mobile phone_5459596.png" class="logo"> </div>
                    <div class="row px-3 justify-content-center mt-4 mb-5 border-line"> <img src="—Pngtree—develop software by writing code_5442297.png" class="image"> </div>
                </div>
            </div>
            <div class="col-lg-6" style="margin-top: 4%; position: absolute; margin-left: 50%;">
                <div class="card2 card border-0 px-4 py-5">
                   <div class="row mb-4 px-3">
                    <h1 class="mb-0 mr-4 mt-2">Login</h1>

                  </div>
                    <div class="row px-3"> <label class="mb-1">
                            <h6 class="mb-0 text-sm">Username</h6>
                        </label> <input class="mb-4" type="text"  placeholder="Enter a valid email address" name="user"> </div>
                    <div class="row px-3"> <label class="mb-1">
                            <h6 class="mb-0 text-sm">Password</h6>
                        </label> <input type="password" name="passw" placeholder="Enter password"> </div>
                    
                    <div class="row mb-3 px-3"> <button type="submit" class="btn btn-blue text-center" name="login">Login</button> </div>
                    <div class="row mb-4 px-3"> <small class="font-weight-bold">Don't have an account? <a class="text-danger " onclick="setTimeout(show,500)">Register</a></small> </div>
                </div>
            </div>
        </div>
            <div class="col-lg-6" style=" position: absolute;  margin-left: 50%; display: none;" id="disp">
                <div class="card2 card border-0 px-4 py-3">
                   <div class="row mb-3 px-3">
                    <h2 class="mb-0 mr-4 mt-2">Signup</h2>
                  </div>
                    <div class="row px-3"> <label class="mb-1">
                            <h6 class="mb-0 text-sm">Username</h6>
                        </label> <input class="mb-1" type="text" name="username" placeholder="Enter a Username"> </div>
                         <div class="row px-3"> <label class="mb-1">
                            <h6 class="mb-0 text-sm">Password</h6>
                        </label>  <input type="password" name="password" placeholder="Enter password"> </div>
                   
                    <div class="row px-3"> <label class="mb-1">
                            <h6 class="mb-0 text-sm">Confirm Password</h6>
                        </label>  <input type="password" name="cpassword" placeholder="Confirm password"> </div>
                   
                    <div class="row px-3"> <label class="mb-1">
                            <h6 class="mb-0 text-sm">Interest</h6>
                        </label> <input class="mb-1" type="text" name="interest" placeholder="Enter your interest"> </div>
                    
                    <div class="row px-3"> <label class="mb-1">
                            <h6 class="mb-0 text-sm">Image</h6>
                        </label> <input class="mb-1 form-control-file" type="file" name="image" placeholder="Drop your image"> </div>
                    

                    <div class="row mb-2 px-3"><button type="submit" class="btn btn-blue text-center" name="signup"  >Signup</div></button>
                    <div class="row mb-2 px-3"> <small class="font-weight-bold">Already have an account? <a class="text-danger " onclick="setTimeout(hide,500)">Login</a></small> </div>
                </div>
            </div>
        </div>
    </form>


        
        <div class="bg-blue py-4">
            <div class="row px-3"> 
                <div class="social-contact ml-4 ml-sm-auto"> <span class="fa fa-facebook mr-4 text-sm"></span> <span class="fa fa-google-plus mr-4 text-sm"></span> <span class="fa fa-linkedin mr-4 text-sm"></span> <span class="fa fa-twitter mr-4 mr-sm-5 text-sm"></span> </div>
            </div>
        </div>
    </div>
</div>
</div>                   
    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
    <script type="text/javascript">
      
      function show()
      {
        var s= document.getElementById("disp");
        s.style.display="block";


      }  


      function hide()
      {
        var s= document.getElementById("disp");
        s.style.display="none";


      }   


      function sign()
      {
        window.open("signup.php");
      }





    </script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.min.js" integrity="sha384-Atwg2Pkwv9vp0ygtn1JAojH0nYbwNJLPhwyoVbhoPwBhjQPR5VtM2+xf0Uwh9KtT" crossorigin="anonymous"></script>
    -->
  </body>
</html>