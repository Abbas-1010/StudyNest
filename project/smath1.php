<html>
    <head>
        <title>Mathematics 1</title>
        <link rel="stylesheet" href="css/sce_style.css"/>
    </head>
    <header id="header">
    <h1 id="main">StudyNest</h1>
    <h4>Connect to the teachers you can't meet</h4>
    </header>
    
    <body id="body">
        
        <?php
                $tab="doubts";
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
                    echo "<th>".$tab."</th>";
                    echo "<th>Image</th>";
                    echo "</tr>";
                    while($i=$res->fetch_assoc())
                    {
                        if($i['subject']==="mathematics1"){
                            ?>
                            <?php
                            if($i['solved']==1){
                                continue;
                            }
                        echo "<tr>";
                        echo "<td>".$qno."</td>";
                        echo "<td>".$i['question']."</td>";
                        echo "<td><img src='".$i['img_question']."' height='200px' width=auto/></td>";
                        echo "</tr>";
                        $qno++;
                        }
                    }
                    ?>
                    <html>
                        <form method="get" action="smath1.php">
                            <input type="text" name="que"/>
                            <textarea name="solution" rows='10' cols='150'></textarea>
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
                                $solu="update doubts set solution='$que',solved=1,img_solution='$img' where question='$q' ";
                                $conn->query($solu);
                                echo "solution provided for ".$q;
                            }
                        }catch(Exception $e){

                        }
                        
                    }
       ?>
    </body>
</html>