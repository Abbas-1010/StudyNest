<html>
    <head>
        <title>Mathematics 1</title>
        <link rel="stylesheet" href="css/ce_style.css"/>
    </head>
    <header id="header">
    <h1 id="main">StudyNest</h1>
    <h4>Connect to the teachers you can't meet</h4>
    </header>
    <body id="body">
        <form methon="get" action="math1.php">
            <textarea name="text_question" rows='10' cols='100'>Write your question...</textarea>
            <input type="file" name="image_question" accept="image/png,image/jpeg,application/pdf"/>
            <input type="submit" name="submit" value="submit"/>
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
                        echo "<h4>"."Ask your doubt"."</h4>";
                    }
                    else{
                        $uid=$_COOKIE['userid'];
                        $ques=$_GET['text_question'];
                        $img_ques=$_GET['image_question'];
                        $sql="insert into doubts(user_name,subject,question,img_question,solved) values('$uid','mathematics1','$ques','$img_ques',0)";
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
            
        </form>
    </body>
</html>