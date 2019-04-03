<!--
======================Page for Pay later with unique id================================
-->

<?php

session_start();

//include("/instamojo/dbcred.php");
//include("/phpconnect/connect.php");
$error = "";
$link = mysqli_connect("51.68.139.41","chimera","szkzj7muFrEizlg3", "chimera_");
if (mysqli_connect_error()) {  
   die("Failed to connect to MySQL: (" . mysqli_connect_error() . ") " . mysqli_error($link));     
}

$query = "SELECT * FROM `users` WHERE CH_ID = '".mysqli_real_escape_string($link, $_SESSION['regid'])."'";

   $result = mysqli_query($link, $query);
   $row = $result->fetch_assoc();
   $name=$row['f_name'];
   $mail=$row['e_mail'];
   $phone=$row['phone_number'];
   $type=$row['type'];
   $pass=$row['pass_check'];
   $id=$_SESSION['regid'];
   if($type==0){
       $type=209;
   }
if(array_key_exists("paynow", $_POST)) {
               
               
                              $_SESSION['regid'] = $_POST['regid']; 
                              //echo "".$_POST['regid'];
                              if($pass == 0) {
                                $query = "UPDATE users SET pass_check=1 WHERE CH_ID='$id'";
                                mysqli_query($link,$query);
                                //echo $query;
                                header("Location: check.php"); 
                            } else {
                                echo "<script>alert('Pass already taken');
                                window.location.href = 'check.php';</script>";
                                //header("Location:check.php");
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
<label style="font-size:4vh;margin-bottom:2vh;" for="regid" class="col-sm-4 col-form-label"><?php echo $name;?></label>
<br><label style="font-size:4vh;margin-bottom:2vh;" for="regid" class="col-sm-4 col-form-label">Your Chimera ID IS:</label>
<div class="col-sm-6">
  <label style="font-size:4vh;margin-bottom:2vh;" for="regid" class="col-sm-4 col-form-label"  ><?php echo $_SESSION['regid'] ?></label>
  <br>
  <label style="font-size:4vh;margin-bottom:2vh;" for="regid" class="col-sm-4 col-form-label">Phone Number: <?php echo $phone;?></label><br>
  <label style="font-size:4vh;margin-bottom:2vh;" for="regid" class="col-sm-4 col-form-label">Email: <?php echo $mail;?></label>
  <label style="font-size:4vh;margin-bottom:2vh;" for="regid" class="col-sm-4 col-form-label">Paid Amount: <?php echo $type;?></label>
  <input value="<?php echo $_SESSION['regid']?>" name="regid" type = "hidden">
</div>
</div>
<div class="col">
  <button style="color:white;background-color:green;margin-top:4vh;border:none;border-radius:2px;box-shadow:0 0 1vh black;height:5vh;width:10vw;" name="paynow" type="submit" class="btn btn-primary">GIVE PASS!</button>
</div>
</form>
</div>

</body>
</html>