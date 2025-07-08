<html>
    <head>
        <title>login page</title>    
    
        <link rel="stylesheet" type="text/css" href="css/login_style.css"/>
    </head>
    <body>
        <div>
            <div>
                <h3>login if already had an account</h3>
                <h3>To register as a user<a href="register_form.php"><u>click here</u></a>
            </div>
            <div>
                <form method="POST" action="login_form.php">
                    Username : <input type="text" name="username"/>
                    <br><br>
                    Password : <input type="password" name="password"/>
                    <br><br>
                    <input type="submit" name="login" value="login"/>
                    
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
                            if(empty($_POST['username']) && empty($_POST['password']) && empty($_POST['submit']))
                            {
                                echo "";
                            }
                            else{
                                $user=$_POST['username'];
                                $pass=$_POST['password'];
                                $sub=$_POST['login'];
                                $sql="select * from user_data";
                                $res=$conn->query($sql);
                                if($res->num_rows>0)
                                {
                                    while($i=$res->fetch_assoc())
                                    {
                                        if($i['user_name']==$user && $i['password']==$pass)
                                        {
                                            setcookie("userid","$user",time()+(86400),"C:/xampp/htdocs/mini_project");
                                            if($i['profession']=="student"){
                                                header("Location: student_page.php");
                                            ?>
                                                <html>
                                                <a href="student_page.php">GO TO YOUR PAGE</a>
                                                </html> 
                                            <?php
                                            break;}
                                            else if($i['profession']=="teacher"){
                                                header("Location: teacher_page.php");
                                                ?>
                                                <html>
                                                <a href="teacher_page.php">GO TO YOUR PAGE</a>
                                                </html> 
                                            <?php
                                            break;
                                            }
                                        }
                                     }
                                }
                            }
                        }catch(Exception $e){
                            echo $e;
                        }
                    ?>
                </form>
            </div>
        </div>       
    </body>
</html>
