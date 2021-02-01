<?php

require_once('../../DB/connection.php');
require_once('../../DB/dbFunctions.php');

$quizes = read("quiz");




$valid = "0";
$page = "login.php";

if(isset($_POST['Submit'])){
    if(checkEmailExists($_POST['email']))
    {
        //changePassword($_POST['email'],$_POST['password'],$_POST['repassword']);
		
		  if(checkPasswordSimilar($_POST['password']))
		  {
			changePassword($_POST['email'],$_POST['password'],$_POST['repassword']);
		  }
		  else{
			//Password already exists or not
			echo '<script>alert("Same Password!")</script>';
			
		  }
		changePassword($_POST['email'],$_POST['password'],$_POST['repassword']);
		
    }
		
		
	
    else{
        
		//error if email is not exist
        echo '<script>alert("Email address is not exist")</script>';
        //echo "<script>setTimeout(\"location.href = 'http://localhost/quizgo/html/general/forgot-password.php';\",1500);</script>";
        echo "<script>setTimeout(\"location.href = '../../html/general/forgot-password.php';\",1500);</script>";
    }
  
}



?>





<html lang="en">

  <head>

    <!-- DON'T touch, should be in all files -->

    <!-- Custom styles for this page -->
    <link href="../../css/home.css" rel="stylesheet">
    <meta http-equiv="refresh" content="2;url=<?php echo $page ?>">
    <style>


      body{

        background-image: url("../../resources/hola.Gif");



      }


    </style>

  </head>


  <body>


    <div class="container-fluid">

      <div class="row">


        <!-- Start Editing page from here -->

        <!-- End editing page from here -->
      </div>
    </div>

  </body>
</html>
