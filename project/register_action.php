<?php
    $db_hostname="127.0.0.1";
    $db_username="root";
    $db_password="";
    $db_name="doubt_solver";
    $conn=mysqli_connect($db_hostname,$db_username,$db_password,$db_name);
    if(!$conn){
        echo "Server is'nt responding";
    }
   
    if($_POST['password']==$_POST['re-password']){
        $pass=$_POST['password'];
        $name=$_POST['username'];
        $email=$_POST['e-mail'];
        $prof=$_POST['profession'];
        $inst=$_POST['institution'];
        $sql="insert into user_data(user_name,password,email,profession,institution) values('$name','$pass','$email','$prof','$inst')";
        $result=mysqli_query($conn,$sql);
    }
    else{
        echo "Password doesn't match";
    }
    
    if(!$result){
        echo "Registeration unsuccessful check your details";
    }
    else{
        echo "Successful";
    }
    mysqli_close($conn);
?>