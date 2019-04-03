<?php

    session_start();
    // if($_SESSION['usern']===null){
    //     header("Location: login.php");
    // }
	include("/instamojo/dbcred.php");
    //include("/phpconnect/connect.php");
	$error = "";

	if(array_key_exists("paynow", $_POST)) {
		 $link = mysqli_connect("51.68.139.41","chimera","szkzj7muFrEizlg3", "chimera_");
         if (mysqli_connect_error()) {  
            die("Failed to connect to MySQL: (" . mysqli_connect_error() . ") " . mysqli_error($link));     
        }

        if (!$_POST['regid'] || empty($_POST['regid'])) { 
            $error .= "Please Enter your unique ID<br>";
        }

        if ($error != "") {
        	$error = "<p>Oops! Please rectify the following:</p>".$error;
        	# code...
        } else {
            $userid= $_POST['regid'];
        	$query = "SELECT * FROM `users` WHERE `CH_ID` = '$userid'";

            $result = mysqli_query($link, $query);
            if ($result) {
                if (mysqli_num_rows($result) > 0) {
                   
                    $row= $result->fetch_assoc();
                    $trans=$row['Transacton_ID'];
                                    
                                //$ss1=$_SESSION['regid'];
                                  //  echo $ss1;
                                  $_SESSION['regid'] = $row['CH_ID']; // mysqli_insert_id($link);

                                  if($trans==1)
                                  {
                                    //$query = "UPDATE users SET pass_givenb='$ss1' WHERE CH_ID='$userid'";
                                    //mysqli_query($link,$query);
                            header("Location: pass.php");
                                  }
                                  else{
                                    echo "<script>alert('Not Yet Paid')</script>";
                                    header("Location: check.php");
                                  }
                                
                 

                           
                   
                	
                } else {
                      $error = "CHECK YOUR CHIMERA ID";

                }

            } else{
                $error = "<p>Our servers are down at the moment - please try again later.</p>";

            }
        }
    }
?>


<!DOCTYPE html>
<html>
<head>
    <title>Pass Distribution</title>
</head>

<style media="screen">
	.container{
		position: relative;
		max-width: 90%;
		margin: auto;
		text-align: center;
		margin-top: 30vh;
		background-color: white;
		box-shadow: 0 0 5vh lightgrey;
		height: 30vh;
		padding: 5vh;
	}
	#error{
		text-align: center;
		color : red;
	}
</style>
<body>

<div class="container border rounded" >
<div id="error"><?php if($error != ""){
            echo '<div class="alert alert-danger" role="alert">'.$error.'</div>';
            } ?>
</div>
<form method="post">

  <div class="form-group row">
    <label style="font-size:4vh;margin-bottom:2vh;" for="regid" class="col-sm-4 col-form-label">Enter Your Resgistered Chimera ID</label>
    <div class="col-sm-6">
      <input type="text" class="form-control" name="regid" id="regid" value="CH">
    </div>
  </div>
  <div class="col">
  	<button style="color:white;background-color:green;margin-top:4vh;border:none;border-radius:2px;box-shadow:0 0 1vh black;height:5vh;width:10vw;" name="paynow" type="submit" class="btn btn-primary">Check!</button>
  </div>
</form>

</div>

</body>
</html>