<?php
$con = mysqli_connect("localhost","root","","contact");
    if(mysqli_connect_error()){
        echo "cannot connect";
    }
    if(isset($_POST['submit'])){
        $sql = "INSERT INTO `contact`(`name`, `email`, `subject`, `message`) VALUES ('$_POST[name]','$_POST[email]','$_POST[subject]','$_POST[message]')";
        $con->close();
    }
?>