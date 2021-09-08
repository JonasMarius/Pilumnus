<?php
if(isset($_POST['submit'])) {
$vardas = trim($_POST['vardas']);
$email =trim($_POST['email']);
$message = trim($_POST['message']);

if(!empty($vardas) && !empty($email) && !empty($message)) {

if(filter_var($email, FILTER_VALIDATE_EMAIL)) {
    $from = "$email";
    $to = "mariusdavicijonas@gmail.com";
    $subject = "Nauja Zinute";
    $autorius ='nuo: ' . $vardas . ', ' . $email;
    $zinute =  htmlspecialchars($message);
    //mail($to, $subject, $autorius, $zinute, $from);
    echo "<script>alert('Thank You. You will be contacted');</script>";
    
    
    }
}

include('db.php'); }

?>