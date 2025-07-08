<html>
    <head><title>Post Material</title>
<link rel="stylesheet" href="css/quiz_style.css"/></head>
<header>
    <h1>Post the Material</h1>
    <h3>Mention the topic and subject</h3>
</header>
<body>
    <form method="get" action="post_material.php">
        Topic and subject : <input type="text" name="topic"/>
        File : <input type="file" name="material" accept="image/png,image/jpeg,application/pdf"/>
        <input type="submit" name="Post" value="submit"/>
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
                    if(empty($_GET['material'])){
                        echo "";
                    }
                    else{
                        $topic=$_GET['topic'];
                        $filename=$_GET['material'];
                        $sql="insert into material values('$topic','$filename')";
                        mysqli_query($conn,$sql);
                    }

                }catch(Exception $e){}
        ?>
    </form>
</body>
