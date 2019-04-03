<!DOCTYPE html>
<html class="no-js" lang="en">
<meta http-equiv="content-type" content="text/html;charset=utf-8" />
<head>
<link href="https://fonts.googleapis.com/css?family=Poppins:400,600|Roboto+Mono:300,300i,400,500" rel="stylesheet">
<meta charset="utf-8">
<meta http-equiv="x-ua-compatible" content="ie=edge">

  <style>
  body {
  overflow-x: hidden;
  
  font-family: "Avenir Next", "Avenir", "Helvetica Neue", Helvetica, Arial, sans-serif;
  font-size: 16px;
  color: #ffffff;
  line-height: 1.5;
}
#ca{
    font-family: "Courier New", Courier, monospace;
    font-size: 30px;
}
input::-webkit-outer-spin-button,
input::-webkit-inner-spin-button {
    /* display: none; <- Crashes Chrome on hover */
    -webkit-appearance: none;
    margin: 0; /* <-- Apparently some margin are still there even though it's hidden */
}
h1 {
  font-family: "Texta", "Avenir Next", "Avenir", "Helvetica Neue", Helvetica, Arial, sans-serif;
  font-weight: 700;
  text-transform: uppercase;
  letter-spacing: 4px;
  text-align: center;
  text-shadow: 2px 2px black;
  color:whitesmoke;
}

h2 {
  font-weight: 400;
  font-size: 24px;
  color: sandybrown;
}

.form-footer {
  margin-top: 2em;
}

.ui-input {
  position: relative;
  padding: 0;
  border: 0;
}

.ui-input input {
  font-family: "Avenir Next", "Avenir", "Helvetica Neue", Helvetica, Arial, sans-serif;
  border: 0;
  background: none;
  padding: 16px 0 16px 0;
  font-size: 24px;
  outline: 0;
  width: 100%;
  tap-highlight-color: transparent;
  touch-callout: none;
}

.ui-input input + label {
  position: relative;
  display: block;
  padding: 8px 0 8px 0;
  text-transform: uppercase;
  font-size: 14px;
  letter-spacing: .0875em;
  font-weight: 500;
  text-align: left;
}
.ui-input input + label::before, .ui-input input + label::after {
  position: absolute;
  top: 0;
  left: 0;
  content: "";
  width: 100%;
  height: 1px;
}
.ui-input input + label::before {
  background-color: #404E07;
}
.ui-input input + label::after {
  transform: scaleX(0);
  transform-origin: left;
  transition: transform 300ms cubic-bezier(0.215, 0.61, 0.355, 1);
  background-color: #ffffff;
  height: 2px;
}
.ui-input input + label span {
  position: relative;
  color: rgba(248, 247, 245, 0.2);
  transition: color 300ms cubic-bezier(0.215, 0.61, 0.355, 1);
}
.ui-input input + label span::after {
  content: attr(data-text);
  position: absolute;
  overflow: hidden;
  left: 0;
  transform: scaleX(1);
  white-space: nowrap;
  color: blue;
  background-image: linear-gradient(to right, #404E07 50%, #404E07 0%);
  background-position: 100% 50%;
  background-size: 200%;
  -webkit-background-clip: text;
  -webkit-text-fill-color: transparent;
  backface-visibility: hidden;
  perspective: 1000;
  transform: translateZ(0);
  transition: background-position 300ms cubic-bezier(0.215, 0.61, 0.355, 1);
}

.ui-input input:focus + label::after,
.ui-input input.error + label::after,
.ui-input input:invalid + label::after,
.ui-input input.filled + label::after {
  transform: scaleX(1);
  transform-origin: left;
}
.ui-input input:focus + label span::after,
.ui-input input.error + label span::after,
.ui-input input:invalid + label span::after,
.ui-input input.filled + label span::after {
  background-image: linear-gradient(to right, white 50%, rgba(255, 255, 255, 0) 0%);
  background-position: 0% 50%;
}

.ui-input input.filled {
  color: #003365;
}
.ui-input input.filled + label::after {
  background-color: #003365;
}
.ui-input input.filled + label span::after {
  background-image: linear-gradient(to right, #ffffff 50%, #6eb1ff,0%);
  background-position: 0% 50%;
}

.ui-input input:focus {
  color: #003365;
}
.ui-input input:focus + label::after {
  background-color: #ffffff;
}
.ui-input input:focus + label span::after {
  background-image: #000000;
  background-position: 0% 50%;
}

.ui-input input.error,
.ui-input input:invalid {
  color: #E66161;
}
.ui-input input.error + label::after,
.ui-input input:invalid + label::after {
  background-color: #E66161;
}
.ui-input input.error + label span::after,
.ui-input input:invalid + label span::after {
  background-image: linear-gradient(to right, #E66161 50%, rgba(255, 255, 255, 0) 0%);
  background-position: 0% 50%;
}

.btn {
  background-color:darkcyan;
  font-family: "Avenir Next", "Avenir", "Helvetica Neue", Helvetica, Arial, sans-serif;
  transition: background-color 300ms cubic-bezier(0.215, 0.61, 0.355, 1), color 300ms cubic-bezier(0.215, 0.61, 0.355, 1);
}

.btn:focus, .btn:active,
.btn:hover {
  background-color:lightcyan;
  color: black;
}

.__first, .__second, .__third, .__fourth {
  animation-name: fadeIn;
  animation-duration: 180ms;
  animation-fill-mode: both;
  animation-iteration-count: 1;
}

.__first {
  animation-delay: 0;
}

.__second {
  animation-delay: 80ms;
}

.__third {
  animation-delay: 180ms;
}

.__fourth {
  animation-delay: 360ms;
}

@keyframes fadeIn {
  from {
    opacity: 0;
    transform: translate3d(0, -25%, 0);
  }
  to {
    opacity: 1;
    transform: translate3d(0, 0, 0);
  }
}

    </style>
    <script type="text/javascript">
    window.onscroll = () => {
  const nav = document.querySelector('#navbar');
  if(this.scrollY <= 320) nav.className = ''; else nav.className = 'scroll';
};
  </script>

  <title>Chimera 2017 | Campus Ambassadors</title>

  <meta name="description" content="CHIMERA 2017 | CONTACT US">



  <meta property="og:title" content="CHIMERA 2017" />

  <meta property="og:site_name" content="CHIMERA" />

  <meta property="og:description" content="A couple of very special days for every creative in the world. Will you be there?" />

  <meta property="og:type" content="website" />

  <meta property="og:url" content="evento-milano2017.html" />

  <meta property="og:image" content="../../images/sharing-offf.jpg" />



  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

  <meta name="format-detection" content="telephone=no">

  <script src="../../assets/vendors/modernizr/modernizr.js"></script>

  <link rel="stylesheet" href="../assets/css/application.css">



  <link rel="apple-touch-icon" sizes="57x57" href="../assets/images/logo.png">

  <link rel="apple-touch-icon" sizes="60x60" href="../assets/images/logo.png">

  <link rel="apple-touch-icon" sizes="72x72" href="../assets/images/logo.png">

  <link rel="apple-touch-icon" sizes="76x76" href="../assets/images/logo.png">

  <link rel="apple-touch-icon" sizes="114x114" href="../assets/images/logo.png">

  <link rel="apple-touch-icon" sizes="120x120" href="../assets/images/logo.png">

  <link rel="apple-touch-icon" sizes="144x144" href="../assets/images/logo.png">

  <link rel="apple-touch-icon" sizes="152x152" href="../assets/images/logo.png">

  <link rel="apple-touch-icon" sizes="180x180" href="../assets/images/logo.png">

  <link rel="icon" type="image/png" sizes="192x192" href="../assets/images/logo.png">

  <link rel="icon" type="image/png" sizes="32x32" href="../assets/images/logo.png">

  <link rel="icon" type="image/png" sizes="96x96" href="../assets/images/logo.png">

  <link rel="icon" type="image/png" sizes="16x16" href="../assets/images/logo.png">

  <link rel="manifest" href="../favicon/manifest.json">

  <meta name="msapplication-TileColor" content="#ffffff">

  <meta name="msapplication-TileImage" content="/favicon/ms-icon-144x144.png">

  <meta name="theme-color" content="#000">



  <script>

    (function (i, s, o, g, r, a, m) {

      i['GoogleAnalyticsObject'] = r; i[r] = i[r] || function () {

        (i[r].q = i[r].q || []).push(arguments)

      }, i[r].l = 1 * new Date(); a = s.createElement(o),

    m = s.getElementsByTagName(o)[0]; a.async = 1; a.src = g; m.parentNode.insertBefore(a, m)

    })(window, document, 'script', '../../../www.google-analytics.com/analytics.js', 'ga');

    ga('create', 'UA-84008772-1', 'auto');

    ga('send', 'pageview');

  </script>

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>



</head>

  <script src="https://cdnjs.cloudflare.com/ajax/libs/prefixfree/1.0.7/prefixfree.min.js"></script>

</head>

<body class="event-container" style="overflow-x: hidden;overflow-y: hidden;">

  <?php 
  if ($_POST['submit']){


  $servername = "localhost";
  $username = "chimerao_2k17";
  $password = "Uu-JMk5HFVL-";
  $dbname = "chimerao_2k17";
      // Create connection
  $conn = new mysqli($servername, $username, $password, $dbname);
  // Check connection
  if ($conn->connect_error) {
      die("Connection failed: " . $conn->connect_error);
  } 

  $name = $_POST['name'];
  $email = $_POST['email'];
  $institution = $_POST['institution'];
  $number = $_POST['number'];
  $number1 = $_POST['number1'];
  $pincode = $_POST['pincode'];
  $choose = $_POST['choose'];

  $name = strip_tags(mysqli_real_escape_string($con, $name));
  $email = strip_tags(mysqli_real_escape_string($con, $email));
  $institution = strip_tags(mysqli_real_escape_string($con, $institution));
  $number = strip_tags(mysqli_real_escape_string($con, $number));
  $number1 = strip_tags(mysqli_real_escape_string($con, $number1));
  $choose = strip_tags(mysqli_real_escape_string($con, $choose));
  $pincode = strip_tags(mysqli_real_escape_string($con, $pincode));



  

  $sql = "INSERT INTO chimera2k17 (names, email, number1, institution, number2, pincode, choose)
  VALUES ('$name', '$email', '$number', '$institution', '$number1', '$pincode', '$choose')";

  if ($conn->query($sql) === TRUE) { ?>
  <script>
    alert('Submitted successfully');
  </script>
      
  <?php } else {
      echo "<script>alert(Error: " . $sql . "<br>" . $conn->error.");</script>";
  }

  $conn->close();
  }

  ?>

  <div id="content">

  <div data-view="event" >
  <nav id="navbar" style="background-color: rgba(255, 255, 255, 0.8)">

    <a href="../index.html" data-nav="home" data-filename="/en" id="site-logo">



      <img src="../assets/images/offf-logo.png" alt="CHIMERA 2017" style="height: 70px;margin-top: -20px">



      <!--web marketing logo for seo-->

      <img src="../assets/images/offf-logo.png" alt="CHIMERA 2017" hidden style="height: 70px;margin-top: -20px">

      <!--end web marketing logo for seo-->



    </a>

  </nav>


    <main id="main-event">



      <div id="event-bg">



        <section class="c-cover" id="section-cover" data-section style="overflow-y: auto;">

  <div class="row" style="margin: 0;">
    <div class="col-xs-12 col-sm-8" style="padding: 5vmin; padding-top: 5vh; color: white; font-family: 'Avenir Next', 'Avenir', 'Helvetica Neue', Helvetica, Arial, sans-serif; ">
      <center><h1><strong>Campus Ambassador</strong></h1></center>
      <br><br>
        The Campus Ambassador is an accredited representative of CHIMERA in his/her institute and is the cardinal link between the two. As a campus Ambassador you shall be correspondent of CHIMERA and shall work to ensure maximum participation at CHIMERA from your college.
        This can be achieved through:
        <li>Word of Mouth</li>
        <li>Increase the reach of CHIMERA in your college</li>
        <li>Online publicity of CHIMERA through social media in your college</li>
        <li>Offline marketing by poster distribution and classroom promotions in your college</li><br>
        <strong>  PREREQUISITES</strong>   <br>
        <li>All applicants must be college/university students irrespective of their fields.</li>
        <li>Must be able to provide strong motivation.</li>
        <li>Must be able to arrange, conduct meetings and should be able to handle the crowd.</li>
        <li>Capable of appreciably representing the views and policies of an ambassador during campaigns.</li>
        <li>Must be consistent to work efficiently during his/her tenure.</li>
        <li>No gender bar.</li>
        <li>Good at English (preferably) or good at regional language (if local).</li>
        <li>A maximum of 2 ambassadors are allowed from each college.</li>
        <li>Should get minimum 30 participants from their institute.</li>
        <br><br>
        <strong>INCENTIVES:</strong>
        <li>Goodies and CHIMERA Merchandise</li>
        <li>Certificates for the hard work done</li>
        <li> A “BEST CAMPUS AMBASSADOR” award for the CA who gets maximum participants to CHIMERA.</li>
        <li> Free registration for self.</li>
        <br>
        What we look in a Campus Ambassador is innovation, leadership, enthusiasm and creativity. We look for students who are leaders in their campus, leaders who can inspire their peers, collaborate with administrators and organize campus events to leave impact. It’s a chance to develop and grow as an individual while adding an incredible line to your resume.<br><br>
        Regards<br>
        Team Chimera.<br><br>
        For Details, Contact:8594908310 <br><br>
    </div>
    <div class="col-xs-12 col-sm-4" style="background:rgba(0, 0, 0, 0.2);padding-bottom: 2vmin;padding-top: 5vh;" >
      <h1 style="color: white;">Register</h1>
      <form class="form" action="" method="post">
        
        <fieldset class="form-fieldset ui-input __first">
          <input type="text" name="name" id="name" tabindex="0" />
          <label for="username">
            <span data-text="Name">Name</span>
          </label>
        </fieldset>
        
        <fieldset class="form-fieldset ui-input __second">
          <input type="email" id="email" name="email" tabindex="0" />
          <label for="email">
            <span data-text="E-mail Address">E-mail Address</span>
          </label>
        </fieldset>
        
        <fieldset class="form-fieldset ui-input __third">
          <input type="text" id="institution"  name="institution" />
          <label for="new-password">
            <span data-text="Institution">Institution</span>
          </label>
        </fieldset>
          
          <fieldset class="form-fieldset ui-input __fourth">
          <input type="number" id="pincode" name="pincode" />
          <label for="pincode">
            <span data-text="Pincode">Pincode</span>
          </label>
        </fieldset>
          
          <fieldset class="form-fieldset ui-input __fifth">
          <input type="number" id="number" name="number" />
          <label for="pincode">
            <span data-text="Contact Number">Contact Number</span>
          </label>
        </fieldset>
          
          <fieldset class="form-fieldset ui-input __sixth">
          <input type="number" id="number1" name="number1" />
          <label for="number1">
            <span data-text="Whatsapp Number">Whatsapp Number</span>
          </label>
        </fieldset>
        
        <fieldset class="form-fieldset ui-input __seventh">
          <input type="textarea" id="repeat-new-password" name="choose"/>
          <label for="repeat-new-password">
            <span data-text="Why should we choose you?">Why should we choose you?</span>
          </label>
        </fieldset>
        <br><br>
          <input type="hidden" name="submit" value="Yes">
         <input type="checkbox" id="terms" name="terms" />
          I agree to all the terms and conditions.
        <div class="form-footer">
          <button type="submit" class="btn btn-block btn-primary" >Submit</button>
        </div>
      </form>
    </div>
  </div>
  <div style="height: 10vh"></div>


        </section>

        <section class="c-footer c-section c-section--vertical-lesser-spaced">
          <center>
          <h4 style="padding: 2vmin; background-color: rgba(0, 0, 0, 0.7); color: white;display: block;width: 100%;position: absolute;left: 0;bottom: 0;margin: 0;">© 2017 Developed By <a href="../webteam">Chimera Web Team</a>. All Rights Reserved.</h4>
        </center>
        </section>


        <div id="bg-el"></div>



      </div>



    </main>





  </div>

</div>



  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>

  <script  src="js/index.js"></script>
    
</body>
</html>
