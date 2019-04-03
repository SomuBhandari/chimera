<!DOCTYPE html>
<html lang="en">
<head>
<title>user Login</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<style>

.body-cont{
    margin-top: 80px;
    margin-right : 30px;
margin-left : 20px;
    padding: 10px;
}

    input
    {
        -moz-border-radius: 5px;
        border-radius: 5px;
        border:solid 1px;
        padding:5px;
    }

body {
background: #eee !important;
}
</style>
</head>
<body>
<div class="container-fluid text-center body-cont">

    <div class="container" align="center">
        <form class="well form-horizontal" method="post" >
            <fieldset>
                <h1 align="center" >Login to your account</h1><hr><br>
                <label for="username" ><b>Username</b></label>
               <input type="text"  id="username" name="username" required /><br><br>
                <label for="password"><b>Password</b></label>
                <input type="Password" id="password" name="pwd" required><br><br>
                    <input type="submit" class="btn btn-warning" name="login" value="sign in"/>
                </fieldset>
        </form>
</div>
</body>
</html>

<?php

if(array_key_exists("login", $_POST)) 
    {   
        $user= $_POST['username'];
        $pass=$_POST['pwd'];
        $link = mysqli_connect("51.68.139.41","chimera","szkzj7muFrEizlg3", "chimera_");
        if (mysqli_connect_error()) {  
        die("Failed to connect to MySQL: (" . mysqli_connect_error() . ") " . mysqli_error($link));     
        }

        $query = "SELECT * FROM `pass_dis` WHERE `user_pass` = '$user' AND `pass`='$pass'";
        $result = mysqli_query($link, $query);
        if ($result) {
            if (mysqli_num_rows($result) > 0) {
               
                $row= $result->fetch_assoc();
               
                              $_SESSION['regid'] = $row['user_pass']; // mysqli_insert_id($link);
                        header("Location: check.php");
                        //."&name=".$row['name']."&email=".$row['email']."&phone=".$row['phone']."&kiitian=".$row['university']."&noofevents=".$noofevents);
                    
               
                
            } else {
                  $error = "INVALID USERNAME OR PASSWORD";

            }}

    }

?>
