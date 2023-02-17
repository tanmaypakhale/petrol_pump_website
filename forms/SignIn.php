<?php
    $con = mysqli_connect("localhost","root","","learning");
    if(mysqli_connect_error()){
        echo "cannot connect";
    }
    if(isset($_POST['Signin']))
    {
        $query = "SELECT * FROM `admin_login` WHERE `Admin_Name` = '$_POST[AdminName]' AND `Admin_Password` = '$_POST[AdminPassword]'";
        $result = mysqli_query($con,$query);
        if(mysqli_num_rows($result)==1){
            echo "<script>alert('Login Successful')</script>";
        }
        else{
            echo "<script>alert('Incorrect Password')</script>";
        }
    }
    ?>