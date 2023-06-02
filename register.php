<?php
    session_start();
    header('location:login.html');
    $con = mysqli_connect('localhost', 'root');
    if($con){
        echo "Connection succesful";
    }
    else{
        echo "No Connection";
    }
    mysqli_select_db($con, 'spletna-clone');
    $name = $_POST['username'];
    $pass = $_POST['password'];

    $quer = "select * from userdata where username = '$name' && password = '$pass'";
    $result = mysqli_query($con, $quer);
    $num = mysqli_num_rows($result);
    if($num==1)
    {
        echo "Duplicate Data";
    }
    else{
        $querr="insert into userdata(username, password) values('$name', '$pass')";
        mysqli_query($con, $querr);
}




?>
