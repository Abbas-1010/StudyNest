<html>
    <head>
        <title>Communicative English</title>
        <link rel="stylesheet" href="css/ce_style.css"/>
    </head>
    <header id="header">
    <h1 id="main">StudyNest</h1>
    <h4>Connect to the teachers you can't meet</h4>
    </header>
    <body id="body">
        <form methon="get" action="ce.php">
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
                        $ques=$_GET['text_question'];
                        $img_ques=$_GET['image_question'];
                        //$img_ques=file_get_contents($_GET['image_question']);
                        $uid=$_COOKIE['userid'];
                        $sql="insert into doubts(user_name,subject,question,img_question,solved) values('$uid','communicative_english','$ques','$img_ques',0)";
                        $res=mysqli_query($conn,$sql);
                        if(!$res){
                            echo "issue in posting your doubt";
                        }
                        else{
                            echo "<h4>Doubt posted successfully</h4>";
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