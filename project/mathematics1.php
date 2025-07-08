<?php
    $db_hostname="127.0.0.1";
    $db_username="root";
    $db_password="";
    $db_name="doubt_solver";
    $conn=mysqli_connect($db_hostname,$db_username,$db_password,$db_name);
    if(!$conn){
        echo "Server is'nt responding";
    }
    $user=$_COOKIE['userid'];
?>
<html>
        <head>
            <title>Discussion Forum</title>
            <link rel="stylesheet" href="css/discussion_style.css"/>
        </head>
        <header>
            <h1 id="main">StudyNest</h1>
            <h4>Connect to the teachers you can't meet</h4>
        </header>
        <body>
            <div class="main-container">
            <div class="nav">
                <?php
                    $sql="select * from interested_subjects where user_name='$user'";
                    $res=$conn->query($sql);
                    if($res->num_rows>0){
                        while($i=$res->fetch_assoc()){
                            $sub=$i['interested'];
                            $sub_link=$sub.".php";
                            $style_class="navbutt";
                            echo "<a href='$sub_link'><button class='$style_class'>$sub</button></a>";
                        }
                    }
                ?>
            </div>
            <div class="chat">
                <?php
                    $subject='mathematics1';
                    $sql2="SELECT * FROM discussion_forum where subject='$subject' ORDER BY comment_time ASC";
                    $res1=$conn->query($sql2);
                    if($res1->num_rows>0){
                        while($j=$res1->fetch_assoc()){
                            $comm=$j['comment'];
                            $tag=$j['tag_user'];
                            $other='others';
                            $me='me';
                            if($j['userid']!=$user){
                                $name=$j['userid'];
                                echo "<div class='$other'><h4>$name</h4><h4>@$tag</h4><h4>$comm</h4></div>";
                            }
                            else{
                                echo "<div class='$me'><h4>You</h4><h4>@$tag</h4><h4>$comm</h4></div>";
                            }
                        }
                    }
                ?>
            </div>
            </div>
            <div class="message">
                <form method='post' action='mathematics1.php'>
                    <input type='text' name='tag'/>
                    <input type='text' name='comment'/>
                    <input type='submit' name='Send' value='submit'/>
                    <?php
                        try{
                            if(empty($_POST['comment'])){
                                echo "";
                            }
                            else{
                                $taged=$_POST['tag'];
                                $comment=$_POST['comment'];
                                $sql3="insert into discussion_forum(userid,subject,comment,tag_user) values('$user','$subject','$comment','$taged')";
                                $res4=$conn->query($sql3);
                            }
                        }catch(Exception $e){

                        }
                    ?>
                </form>
            </div>
        </body>
    </html>