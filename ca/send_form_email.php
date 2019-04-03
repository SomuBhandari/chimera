<?php
/*
if(isset($_POST['email'])) {

  

    // EDIT THE 2 LINES BELOW AS REQUIRED

    $email_to = "chimeraofficial17@gmail.com";

    $email_subject = "New Campus Ambassador";

 

    function died($error) {

        // your error code can go here

        echo "We are very sorry, but there were error(s) found with the form you submitted. ";

        echo "These errors appear below.<br /><br />";

        echo $error."<br /><br />";

        echo "Please go back and fix these errors.<br /><br />";

        die();

    }

 

 

    // validation expected data exists

    if(!isset($_POST['name']) ||

        !isset($_POST['email']) ||

        !isset($_POST['instiution']) ||

        !isset($_POST['pincode']) ||

        !isset($_POST['number'])||

        !isset($_POST['number1'])

        ||

        !isset($_POST['choose'])) {

        died('We are sorry, but there appears to be a problem with the form you submitted.');       

    }

 

     

 echo "no error";

    $first_name = $_POST['name']; // required

   // $last_name = $_POST['last_name']; // required

    $email_from = $_POST['email']; // required

    //$telephone = $_POST['']; // not required

    $choose = $_POST['choose']; // required

 

    $error_message = "";

    $email_exp = '/^[A-Za-z0-9._%-]+@[A-Za-z0-9.-]+\.[A-Za-z]{2,4}$/';

 

  if(!preg_match($email_exp,$email_from)) {

    $error_message .= 'The Email Address you entered does not appear to be valid.<br />';

  }

 echo "no error 1";

    $string_exp = "/^[A-Za-z .'-]+$/";

 

  if(!preg_match($string_exp,$first_name)) {

    $error_message .= 'The First Name you entered does not appear to be valid.<br />';

  }

 

 // if(!preg_match($string_exp,$last_name)) {

 //   $error_message .= 'The Last Name you entered does not appear to be valid.<br />';

  }
//
 

  if(strlen($choose) < 2) {

    $error_message .= 'The Comments you entered do not appear to be valid.<br />';

  }

 echo "no error2";

  if(strlen($error_message) > 0) {

    died($error_message);

  }

 

    $email_message = "Form details below.\n\n";

 

     

    function clean_string($string) {

      $bad = array("content-type","bcc:","to:","cc:","href");

      return str_replace($bad,"",$string);

    }

 

     

 

    $email_message .= "First Name: ".clean_string($first_name)."\n";

    //$email_message .= "Last Name: ".clean_string($last_name)."\n";

    $email_message .= "Email: ".clean_string($email_from)."\n";

  //  $email_message .= "Telephone: ".clean_string($telephone)."\n";

    $email_message .= "Comments: ".clean_string($choose)."\n";

 

// create email headers

$headers = 'From: '.$email_from."\r\n".

'Reply-To: '.$email_from."\r\n" .

'X-Mailer: PHP/' . phpversion();

mail($email_to, $email_subject, $email_message, $headers);  

?>

 

<!-- include your own success html here -->

 

echo "Thank you for contacting us. We will be in touch with you very soon.";

 

<?php

 

}

?>*/
$servername = "localhost";
$username = "chimerao_2k17";
$password = "Uu-JMk5HFVL-";
$dbname = "chimerao_2k17";
    // Create connection

$name = $_POST['name'];
$email = $_POST['email'];
$institution = $_POST['institution'];
$number = $_POST['number'];
$number1 = $_POST['number1'];
$pincode = $_POST['pincode'];
$choose = $_POST['choose'];

$name = strip_tags($name);
$email = strip_tags($email);
$institution = strip_tags($institution);
$number = strip_tags($number);
$number1 = strip_tags($number1);
$choose = strip_tags($choose);
$pincode = strip_tags($pincode);



$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$sql = "INSERT INTO chimera2k17 (names, email, number, institution, number1, pincode, choose)
VALUES ('$name', '$email', '$number', '$institution', '$number1', '$pincode', '$choose')";

if ($conn->query($sql) === TRUE) {
    
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
