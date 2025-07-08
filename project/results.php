<html>
    <head>
        <title>Results</title>
        <link rel="stylesheet" href="css/quizstyle_attempt2.css"/>
    </head>
    <header id="header">
        <h1 id="main">StudyNest</h1>
        <h4>Connect to the teachers you can't meet</h4>
    </header>
    <body>
        <table>
            <tr><th>Test</th><th>Score</th></tr>
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
                $sql="select * from result_data";
                $res=mysqli_query($conn,$sql);
                $uid=$_COOKIE['userid'];
                if($res->num_rows>0){
                    while($i=$res->fetch_assoc()){
                        if($i['user_id']==$uid)
                        {
                            echo "<tr>";
                            echo "<td>".$i['test_id']."</td>";
                            echo "<td>".$i['score']."</td>";
                            echo "</tr>";
                        }
                    }
                }
            }catch(Exception $e){}
            ?>
        </table>
    </body>
</html>