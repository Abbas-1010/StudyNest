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
                <h1 class="prompt">Choose one of the subjects to discuss</h1>
            </div>
            </div>
        </body>
    </html>
    <?php
?>