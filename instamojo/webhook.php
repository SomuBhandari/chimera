<?php
$data = $_POST;
$mac_provided = $data['mac'];  // Get the MAC from the POST data
unset($data['mac']);  // Remove the MAC key from the data.
$ver = explode('.', phpversion());
$major = (int) $ver[0];
$minor = (int) $ver[1];

if($major >= 5 and $minor >= 4){
     ksort($data, SORT_STRING | SORT_FLAG_CASE);
}
else{
     uksort($data, 'strcasecmp');
}
// You can get the 'salt' from Instamojo's developers page(make sure to log in first): https://www.instamojo.com/developers
// Pass the 'salt' without <>
echo implode("|",$data)."<br>";
$mac_calculated = hash_hmac("sha1", implode("|", $data), "588cf2c8de6845188eb43173d238c670");

echo $mac_provided."<br>".$mac_calculated."<br>";
echo $data['purpose']."<br>".$data['buyer_name']."<br>";
echo $data['payment_id']."<br>".$data['payment_request_id']."<br>";
include("dbcred.php");
$link = mysqli_connect("51.68.139.41","chimera","szkzj7muFrEizlg3", "chimera_");
         if (mysqli_connect_error()) {  
            die("Failed to connect to MySQL: (" . mysqli_connect_error() . ") " . mysqli_error($link));     
        }


        if($mac_calculated==$mac_provided){
    if($data['status'] == "Credit"){
        echo "MATCHED";
        // Payment was successful, mark it as successful in your database.
        // You can acess payment_request_id, purpose etc here. 
        $chid= $data['purpose'];
        $payid = $data['payment_id'];
        $payreq = $data['payment_request_id'];
        $status = $data['status'];
        $amo=$data['amount'];
        $query="UPDATE `users` SET `Transacton_ID`='1' WHERE `CH_ID`='$chid'";
        //echo $query;
        //mysqli_query($link,$query);

        $query = "INSERT INTO `payment` (`payment_id`, `payment_request_id`, `CH_ID`,`amount`, `status`) 
        VALUES ('$payid','$payreq','$chid','$amo','$status')";
        //mysqli_query($link,$query);
 
  
    }
    else{

    }}else{}
  



   

?>