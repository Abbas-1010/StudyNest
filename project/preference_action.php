<?php
                    $db_hostname="127.0.0.1";
                    $db_username="root";
                    $db_password="";
                    $db_name="doubt_solver";
                    $conn=mysqli_connect($db_hostname,$db_username,$db_password,$db_name);
                    if(!$conn){
                        echo "Server is'nt responding";
                    }
                    else{
                        try{
                            $x=$_POST['subject'];
                            $user=$_COOKIE['userid'];
                            $sql1="delete from interested_subjects where user_name='$user'";
                            mysqli_query($conn,$sql1);

                            foreach($x as $y){
                            $sql="insert into interested_subjects values('$user','$y')";
                            $result=mysqli_query($conn,$sql);
                            }
                        }catch(Exception $e){

                        }
                    }
?>