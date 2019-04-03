<?php
    session_start();
    //include_once '../phpconnect/connect.php';
    $conn = mysqli_connect("51.68.139.41","chimera","szkzj7muFrEizlg3", "chimera_");
    if (mysqli_connect_error()) {  
       die("Failed to connect to MySQL: (" . mysqli_connect_error() . ") " . mysqli_error($conn));     
   }
    if(isset($_POST['signup_submit'])){
        $name = $_POST['Fname']." ".$_POST['lname'];
        $email= $_POST['email'];
        $phoneNo=$_POST['phone'];
        $qualification= $_POST['qualification'];
        $institution = $_POST['rollNumber'];
        $event1 = $_POST['event1'];
        $event2 = $_POST['event2'];
        $type="dfsf";
        if($_POST['registrationType']=='Rs.100 (Without Star Night)'){
            $type= 106;
        }
        if($_POST['registrationType']=='Rs.200 (Star Night included)'){
            $type = 209;
        }
        //echo $type;
        $insertUserSql= "INSERT INTO `users`(`f_name`, `e_mail`, `phone_number`, `institution`, `institution_name`,
         `event_1`,`event_2`,`type`) VALUES ('$name','$email','$phoneNo','$qualification','$institution','$event1','$event2','$type')";

        //echo " ".$insertUserSql;

        $result = mysqli_query($conn, $insertUserSql);
        if($result){
           // echo "done";
           require_once('../PHPMailer/PHPMailerAutoload.php');
            require_once('../PHPMailer/class.phpmailer.php');
            require_once('../PHPMailer/class.smtp.php');
    
    
            $mail = new PHPMailer;
               $mail->isSMTP();//Set mailer to use SMTP
            $mail->Host = "smtp.gmail.com"; // sets the SMTP server
            $mail->Port = 465;
            $mail->AuthType = 'LOGIN';
            $mail->SMTPAuth = true;//Enable SMTP authentication
            $mail->Username = "noreplychimera@gmail.com"; // SMTP account username
            $mail->Password = "&NG^&f65gf^G";        // SMTP account password
            //$mail->SMTPDebug=4;
           $mail->SMTPSecure = 'ssl';//Enable encryption, 'ssl' also accepted
            $mail->SetFrom('noreplychimera@gmail.com');
            $mail->addAddress($_POST['email']);//Add a recipient
            $mail->addReplyTo('chimerakiit@gmail.com');
            $mail->isHTML(true);//Set email format to HTML (default = true)
            $mail->Subject = 'Verify Your Account';
            $mail->Body = 'TEST MAIL';
            if (!$mail->send()) {
                //echo "Mailer Error: " . $mail->ErrorInfo;
            } else {
               // echo "Message sent!";
            }
            $query = "SELECT * FROM `users` WHERE `e_mail` = '$email'";

            $result = mysqli_query($conn, $query);
            if ($result) {
                if (mysqli_num_rows($result) > 0) {
                   
                    $row= $result->fetch_assoc();
                   
                                  $_SESSION['regid'] = $row['CH_ID']; // mysqli_insert_id($link);
                            header("Location: ../paywithid.php");
                            //."&name=".$row['name']."&email=".$row['email']."&phone=".$row['phone']."&kiitian=".$row['university']."&noofevents=".$noofevents);
                        
                   
                	
                } else {
                      $error = "CHECK YOUR EMAIL ADDRESS OR REGISTER AGAIN";

                }}
        }
    }



?>

<!DOCTYPE html>
<html lang="en">
<head>
    <!-- ========== Meta Tags ========== -->
    <meta charset="UTF-8">
    <meta name="description" content="chimera">
    <meta name="keywords" content="chimera 2k18, chimera, 2k18, fest, kiit ">
    <meta name="author" content="ChimeraWebTeam">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <!-- ========== Title ========== -->
    <title>Registration | CHIMERA 2K18 </title>
    <!-- ========== Favicon Ico ========== -->
    <link rel="icon" href="../favicon.ico">
    <!-- ========== STYLESHEETS ========== -->
    <!-- Bootstrap CSS -->
    <link href="../assets/css/bootstrap.min.css" rel="stylesheet">
    <!-- Fonts Icon CSS -->
    <link href="../assets/css/font-awesome.min.css" rel="stylesheet">
    <link href="../assets/css/et-line.css" rel="stylesheet">
    <link href="../assets/css/ionicons.min.css" rel="stylesheet">
    <!-- Carousel CSS -->
    <link href="../assets/css/owl.carousel.min.css" rel="stylesheet">
    <link href="../assets/css/owl.theme.default.min.css" rel="stylesheet">
    <!-- Animate CSS -->
    <link rel="stylesheet" href="../assets/css/animate.min.css">
    <!-- Custom styles for this template -->
    <link href="../assets/css/main.css" rel="stylesheet">
    <link rel="stylesheet" href="../assets/css/register.css">
</head>
<body>
<div class="loader">
    <div class="loader-outter"></div>
    <div class="loader-inner"></div>
</div>

<!--header start here -->
<header class="header navbar fixed-top navbar-expand-md">
    <div class="container">
        <a class="navbar-brand logo" href="../index.html">
          <img src="../assets\img\logo1.png" alt="Chimera"/>
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#headernav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="lnr lnr-text-align-right"></span>
        </button>
        <div class="collapse navbar-collapse flex-sm-row-reverse" id="headernav">
            <ul class=" nav navbar-nav menu">
                <li class="nav-item">
                    <a class="nav-link active" href="../index.html">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link " href="../events.html">Events</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link "href="../index.html#sponsors" >Sponsors</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link " href="#">Register</a>
                </li>
                <li class="nav_itenm">
                  <a class="nav-link " href="../contact_us.html">Contact Us</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link " href="../complete_team.html">About Us</a>
                </li>
            </ul>
        </div>
    </div>
</header>
<!--header end here-->

<!--page title section-->
<section class="inner_cover parallax-window" data-parallax="scroll" data-image-src="../assets/img/bg/bg-img.png">
    <div class="overlay_dark"></div>
    <div class="container">
        <div class="row justify-content-center align-items-center">
            <div class="col-12">
                <div class="inner_cover_content">
                    <h3>
                      Registration Portal
                    </h3>
                </div>
            </div>
        </div>

        <div class="breadcrumbs">
            <ul>
                <li><a href="../index.html">Home</a>   |  </li>
                <li><span>Register</span></li>
            </ul>
        </div>
    </div>
</section>
<!--page title section end-->

  <!-- Registration Section  -->

  <section id="register">
    <div class="conatiner">
    <div class="row">
      <div class="col">

          <div id="login-box">


 <div class="left ">
   <form method="post">
     <fieldset>



   <h1>Sign up</h1>
   <div class="form-row">

  <div class="col-md-6">
     <div class="form-group">
        <input type="text" name="Fname" placeholder="First Name" required>
   </div></div>
  <div class="col-md-6">
    <div class="form-group">
      <input type="text" name="lname" placeholder="Last Name" required>
    </div>
  </div>
  <div class="col-md-6">
    <div class="form-group">
         <input type="text" name="email" placeholder="E-mail"  required>
    </div>
  </div>
  <div class="col-md-6">
    <div class="form-group">
         <input type="text" name="phone" placeholder="Phone Number"  required>
    </div>
  </div>

   </div>
   <div class="form-row">
     <div class="col-md-12 form-group">

       <label for="qualification">Institution</label>
         <select class="form-control" id="qualification" name="qualification" required>
             <option>Select One</option>
             <option>KIIT</option>
             <option>School student</option>
             <option>Corporate</option>
             <option>Others</option>
        </select>
        </div>

        <div class="col-lg-12 form-group">
            <input type="text"  style="display:none; margin-top:-10px;margin-bottom:30px"  placeholder="Roll No."  id="roll" name="rollNumber" required>
        </div>
   </div>
    <div class="form-row">
       <div class="col-md-12 form-group">
         <label for="type">Registration Type</label>
         <select class="form-control" id="registrationType"  name="registrationType" required>
           <option>Rs.100 (Without Star Night)</option>
           
         </select>
       </div>
    </div>
   <div class="form-row" style="margin-top:-10px">
     <div class="col-md-6 form-group">
       <label for="event1">Select Events</label>
         <select class="form-control" id="event1" name="event1" required>
            <option>Event One</option>
              <option>Adrenaline Rush</option>
             <option>Sherlocked</option>
             <option>House MD</option>
              <option>Klick And Talk (Klick it + Aalochak)</option>
               <option>Rang Manch</option>
               <option>Kronos</option>
                <option>Health Youtuber</option>

               </select>
     </div>
     <div class="col-md-6 form-group " id="event2Col"  >

         <select class="form-control " id="event2"  name="event2">
            <option>Event Two (Optional)</option>
            <option>Adrenaline Rush</option>
             <option>Sherlocked</option>
             <option>House MD</option>
              <option>Klick And Talk (Klick it + Aalochak)</option>
               <option>Rang Manch</option>
               <option>Kronos</option>
                <option>Health Youtuber</option>
               </select>
     </div>

   </div>

   <div class="form-group">
     <input type="submit" name="signup_submit" value="Sign me up" />
   </div>







   </fieldset>
 </form>
</div>




 </div>

</div>
</div>

        </div>

  </section>



  <!--footer start -->
  <footer>
      <div class="container">
          <div class="row justify-content-center">

              <div class="col-md-4 col-12">
                  <div class="footer_box">
                      <div class="footer_header">
                          <div class="footer_logo">
                              <img src="../assets/img/logo1.png" alt="Chimera">
                          </div>
                      </div>
                      <div class="footer_box_body">
                          <p>
                              CHIMERA , “An Endeavour To Think and Understand” , aims to provide a platform for the congregation of the entire medical fraternity of eastern India along with other major Universities embracing the whole country under one roof. It is beyond the dimensions of just an event it is a stage where idea meets reality
                          </p>
                          <ul class="footer_social">
                              <li>
                                  <a href="https://www.youtube.com/channel/UC0VSP46zGOdN9Zfzqb7Blsg" target="_blank"><i class="ion-social-youtube"></i></a>
                              </li>
                              <li>
                                  <a href="https://www.facebook.com/Chimera.kiit/?ref=br_rs" target="_blank"><i class="ion-social-facebook"></i></a>
                              </li>
                              <li>
                                  <a href="https://twitter.com/Chimera_kiit" target="_blank"><i class="ion-social-twitter"></i></a>
                              </li>
                              <li>
                                  <a href="https://www.instagram.com/chimera_kiit/" target="_blank"><i class="ion-social-instagram"></i></a>
                              </li>
                          </ul>
                      </div>
                  </div>
              </div>

              <div class="col-12 col-md-4">
                  <div class="footer_box">
                      <div class="footer_header">
                          <h4 class="footer_title">
                              instagram
                          </h4>
                      </div>

                    <div class='sk-instagram-feed' data-embed-id='16100'></div><script src='https://www.sociablekit.com/app/embed/instagram-feed/widget.js'></script>

                  </div>
              </div>

              <div class="col-12 col-md-4">
                  <div class="footer_box">
                      <div class="footer_header">
                          <h4 class="footer_title">
                              Reach out to us!
                          </h4>
                      </div>
                      <div class="footer_box_body">
                          <div class="newsletter_form">
                              <input type="email" class="form-control" placeholder="E-Mail here">
                              <button class="btn btn-rounded btn-block btn-primary">Send</button>
                          </div>
                      </div>
                  </div>
              </div>
          </div>
      </div>
  </footer>
<!--Go to top-->

<a href="#" id="c-go-top" class="c-go-top">
      <i class="fa fa-arrow-up fa-fw"></i>
    </a>
    <div class="copyright_footer">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-6 col-12">
                    <p><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
    Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | Made with <i class="fa fa-heart-o" aria-hidden="true"></i> by <a href="#" target="_blank">Chimera Web Team</a></p>
                </div>
                <div class="col-12 col-md-6 ">
                    <!-- <ul class="footer_menu">
                        <li>
                            <a href="./index.html">Home</a>
                        </li>
                        <li>
                            <a href="#">Speakers</a>
                        </li>
                        <li>
                            <a href="#">Events</a>
                        </li>
                        <li>
                            <a href="#">News</a>
                        </li>
                        <li>
                            <a href="#">Contact</a>
                        </li>
                    </ul> -->
                </div>
            </div>
        </div>
    </div>

<!--footer end -->

<!-- jquery -->
<script src="../assets/js/jquery.min.js"></script>
<!-- bootstrap -->
<script src="../assets/js/popper.js"></script>
<script src="../assets/js/bootstrap.min.js"></script>
<script src="../assets/js/waypoints.min.js"></script>
<!--slick carousel -->
<script src="../assets/js/owl.carousel.min.js"></script>
<!--parallax -->
<script src="../assets/js/parallax.min.js"></script>
<!--Counter up -->
<script src="../assets/js/jquery.counterup.min.js"></script>
<!--Counter down -->
<script src="../assets/js/jquery.countdown.min.js"></script>
<!-- WOW JS -->
<script src="../assets/js/wow.min.js"></script>
<!-- Custom js -->
<script src="../assets/js/main.js"></script>

 <script>

 $('#qualification').change(function() {

  var x = $("#qualification option:selected").text();
  if(x=="KIIT"){
    console.log("hello");
    $('#roll').css("display","block");
     var pc= document.getElementById('roll');
     pc.value='';
      pc.placeholder='Roll No.';
    $('#roll').css("margin-bottom","1");

   /* $('#school').css("display","none");
       $('#corporate').css("display","none");
        $('#college').css("display","none");
          $('#others').css("display","none");*/
  }
  else if (x=="School student") {
    /*$('#school').css("display","block");
    $('#roll').css("display","none");

       $('#corporate').css("display","none");
        $('#college').css("display","none");
          $('#others').css("display","none");*/
      $('#roll').css("display","block");
      var pc= document.getElementById('roll');
      pc.value='';
      pc.placeholder='School Name';
      $('#roll').css("margin-bottom","1");
  }
  else if (x=="Corporate") {
  /*  $('#corporate').css("display","block");
    $('#roll').css("display","none");
    $('#school').css("display","none");

        $('#college').css("display","none");
          $('#others').css("display","none");*/
      $('#roll').css("display","block");
      var pc= document.getElementById('roll');
      pc.value='';
      pc.placeholder='Institution Name';
      $('#roll').css("margin-bottom","1");
  }
  else if (x=="Others") {/*
    $('#college').css("display","block");
    $('#roll').css("display","none");
    $('#school').css("display","none");
       $('#corporate').css("display","none");
         $('#others').css("display","none");*/
      $('#roll').css("display","block");
      var pc= document.getElementById('roll');
      pc.value='';
      pc.placeholder='College Name';
      $('#roll').css("margin-bottom","1");

  }
  else{
    console.log("bye");
    $('#roll').css("display","none");
    $('#school').css("display","none");
       $('#corporate').css("display","none");
        $('#college').css("display","none");
          $('#others').css("display","none");
  }
});
$('#myOptions').change(function() {
console.log("hello");
var val = $("#myOptions option:selected").text();
if(val=="Others"){
 $('#others').css("display","block");
}
else{
 $('#others').css("display","none");
}
});


 </script>
</body>

</html>