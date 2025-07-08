<html>
<head><title>Access Material</title>
<link rel="stylesheet" href="css/material_style.css"/></head>
<header>
    <h1>Access Material</h1>
    <h3>Choose the required material</h3>
</header>
<body>
    <table>
        <tr><th>Topic</th><th>File</th></tr>
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
            $sql="select * from material";
            $res=mysqli_query($conn,$sql);
            $path="/C:/xampp/htdocs/mini_project/";
            $type="application/pdf";
            $w="100%";
            $h="50px";
            if($res->num_rows>0){
                while($i=$res->fetch_assoc()){
                    echo "<tr>";
                    echo "<td>".$i['Sub_topic']."</td>";
                    echo "<td><a href='".$i['file']."'>Download the pdf</a></td>";
                    echo "</tr>";
                }
            }
        }catch(Exception $e){}
        ?>
    </table>
</body>
</html>