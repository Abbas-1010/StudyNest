<html>
    <head>
        <title>Communicative English</title>
        <link rel="stylesheet" href="css/sce_style.css"/>
    </head>
    <header id="header">
    <h1 id="main">StudyNest</h1>
    <h4>Connect to the teachers you can't meet</h4>
    </header>
    
    <body id="body">
        
        <?php
                $tab="Doubts";
                $db_hostname="127.0.0.1";
                $db_username="root";
                $db_password="";
                $db_name="doubt_solver";
                $conn=mysqli_connect($db_hostname,$db_username,$db_password,$db_name);
                if(!$conn){
                    echo "Server is'nt responding";
                }
                $sql="select * from doubts";
                $res=$conn->query($sql);
                if($res->num_rows>0)
                {
                    $qno=1;
                    ?>
                    <html>
                        <table>
                    </html>
                    <?php
                    echo "<tr>";
                    echo "<th>S.no</th>";
                    echo "<th>Question ID</th>";
                    echo "<th>".$tab."</th>";
                    echo "<th>Image</th>";
                    echo "</tr>";
                    $path="C:/xampp/htdocs/mini_project/";
                    while($i=$res->fetch_assoc())
                    {
                        if($i['subject']==="communicative_englis"){
                            ?>
                            <?php
                        echo "<tr>";
                        echo "<td>".$qno."</td>";
                        echo "<td>".$i['question_id']."</td>";
                        echo "<td>".$i['question']."</td>";
                        echo "<td><img src='".$i['img_question']."' height='200px' width=auto/></td>";
                        echo "</tr>";
                        $qno++;
                        }
                    }
                    ?>
                    <html>
                        <form method="get" action="sce.php">
                            <input type="text" name="que"/>
                            <br>
                            <textarea name="solution" rows='10' cols='150'></textarea>
                            <br>
                            <input type="file" name="image_solution" accept="image/png,image/jpeg,application/pdf"/> 
                            <input type="submit" name="submit" value="submit"/>
                        </form>
                    </html>
                    <?php
                    
                        try{
                            if(empty($_GET['solution']))
                            {
                                ?>
                                <html><br></html>
                                <?php
                                echo "Give a solution";
                            }
                            else{
                                $que=$_GET['solution'];
                                $q=$_GET['que'];
                                $img=$_GET['image_solution'];
                                $sql1="insert into solutions(question_id,solution,img_solution) values('$q','$que','$img')";
                                $solu="update doubts set solved=1,solution_count=solution_count+1 where question='$q' ";
                                $conn->query($solu);
                                echo "<br>";
                                echo "<h4>solution provided for ".$q."</h4>";
                            }
                        }catch(Exception $e){

                        }
                        
                    }
                    
       ?>
    </body>
</html>
