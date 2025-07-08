<?php
    $db_hostname="127.0.0.1";
    $db_username="root";
    $db_password="";
    $db_name="doubt_solver";
    $conn=mysqli_connect($db_hostname,$db_username,$db_password,$db_name);
    if(!$conn){
        echo "Server is'nt responding";
    }
?>
<html>
    <head>
        <title>Quiz</title>
        <link rel="stylesheet" href="css/quizstyle_attempt2.css"/>
    </head>
    <header id="header">
        <h1 id="main">StudyNest</h1>
        <h4>Connect to the teachers you can't meet</h4>
    </header>
    <body>
        <form method="get" action="exam.php">
            <h4>Enter the Test_id you are willing to attempt</h4><input type="text" name="testid"/>
            <input type="submit" name="submit" value="submit"/>
        </form>
        <table>
            <tr>
                <th>S.no</th>
                <th>Test ID</th>
                <th>Subject</th>
            </tr>
            <?php
                try{
                    $sno=1;
                    $sql="select * from tests";
                    $res=$conn->query($sql);
                    if($res->num_rows>0){
                        while($i=$res->fetch_assoc())
                        {
                            echo "<tr>";
                            echo "<td>".$sno."</td>";
                            echo "<td>".$i['test_id']."</td>";
                            echo "<td>".$i['sub']."</td>";
                            echo "</tr>";
                            $sno++;
                        }
                    }
                }catch(Exception $e){}
            ?>
        </table>
    </body>
</html>