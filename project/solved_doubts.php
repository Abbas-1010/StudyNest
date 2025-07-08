<html>
    <head>
        <title>Solved doubts</title>
        <link rel="stylesheet" href="css/solved.css"/>
    </head>
    <header id="header">
        <h1 id="main">StudyNest</h1>
        <h4>Connect to the teachers you can't meet</h4>
    </header>
    <body>
        <table>
            <th>
                <tr><td><h3>S.no</h3></td><td><h3>Question ID</h3></td><td><h3>Solution ID</h3></td><td><h3>Solution</h3></td><td><h3>Image solution</h3></td></tr>
            </th>
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
                $uid=$_COOKIE['userid'];
                $sql="select * from doubts where user_name='$uid'";
                $res=$conn->query($sql);
                if($res->num_rows>0)
                {
                    while($i=$res->fetch_assoc())
                    {
                        $q=$i['question_id'];
                        $sql2="select * from solutions where question_id='$q'";
                        $res2=$conn->query($sql2);
                        if($res2->num_rows>0){
                            while($k=$res2->fetch_assoc()){
                            $j=1;
                            echo "<tr>";
                            echo "<td>".$j."</td>";
                            echo "<td>".$k['question_id']."</td>";
                            echo "<td>".$k['solution_id']."</td>";
                            echo "<td>".$k['solution']."</td>";
                            echo "<td><img src='".$i['img_solution']."' height='200px' width=auto/></td>";
                            echo "</tr>";
                            $j++;
                            }
                        }
                    }
                }
            ?>
        </table>
    </body>
</html>