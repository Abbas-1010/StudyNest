<?php
                $db_hostname="127.0.0.1";
                $db_username="root";
                $db_password="";
                $db_name="doubt_solver";
                $conn=mysqli_connect($db_hostname,$db_username,$db_password,$db_name);
                if(!$conn){
                    echo "Server is'nt responding";
                }
                try{
                    if(empty($_GET['text_question']) || empty($_GET['image_question']) && empty($_GET['submit']))
                    {
                        echo "Ask your doubt";
                    }
                    else{
                        $ques=$_GET['text_question'];
                        //$img_ques=file_get_contents($_GET['image_question']);
                        $sql="insert into doubts(user_name,subject,question,solved) values('22FE1A05G2','communicative_english','$ques',0)";
                        $res=mysqli_query($conn,$sql);
                        if(!$res){
                            echo "issue in posting your doubt";
                        }
                        else{
                            echo "doubt posted successfully";
                        }
                        mysqli_close($conn);
                    }
                    
                }catch(Exception $e){
                    
                }
               // mysqli_close($conn);
?>