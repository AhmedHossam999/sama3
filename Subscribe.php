<?php
if (isset($_POST)['submit'])){
    $mailfrom=$_POST['mail'];

$mailto="ahmedhossam4416@gmail.com";
$headers="From: " .$mailfrom;
$txt="Received an e-mail from".$mailfrom;


    mail($mailto,$headers.$txt);
    header("location: index.php?mailsend")
}

?>