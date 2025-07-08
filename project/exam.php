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
        $flag=false;
        $test=$_GET['testid'];
        setcookie("testno","$test",time()+86400,"C:/xampp/htdocs/mini_project");
        $attempt="select * from result_table";
        $result_attempt=mysqli_query($conn,$attempt);
        $unm=$_COOKIE['userid'];
        if($result_attempt->num_rows>0){
            while($i=$result_attempt->fetch_assoc()){
                if($i['user_id']==$unm){
                    echo "<h4>You have already attempted the test</h4>";
                    $flag=true;
                    break;
                }
            }
        }
    }catch(Exception $e){}
    if(!$flag){
        try{
        $sql="select * from test_questions";
        $res=mysqli_query($conn,$sql);
        if($res->num_rows>0)
        {
            $ques[10]=array();
            $a[10]=array();
            $b[10]=array();
            $c[10]=array();
            $d[10]=array();
            $cor[10]=array();
            
            $itr=0;
            while($i=$res->fetch_assoc()){
                
                if($i['test_id']==$test){
                    $ques[$itr]=$i['question'];
                    $a[$itr]=$i['option1'];
                    $b[$itr]=$i['option2'];
                    $c[$itr]=$i['option3'];
                    $d[$itr]=$i['option4'];
                    $cor[$itr]=$i['correct'];
                    $itr++;
                }

            }
        }
    }catch(Exception $e){}
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
        <table>
            <tr>
                <th>S.no</th>
                <th>Question</th>
            </tr>
            <form method="post" action="exam_action.php">
                <?php
                
                    echo "<tr>";
                    echo "<td>1</td>";
                    echo "<td>".$ques[0]."</td>";
                    echo "<tr>";
                    echo "<td></td>";
                    echo "<td>";
                ?>
                    <html>
                    <input type="radio" name="op1" value="a"/>
                    </html>
                <?php
                    echo $a[0];
                    echo "</td>";
                    echo "</tr>";

                    echo "<tr>";
                    echo "<td></td>";
                    echo "<td>";
                ?>
                    <html>
                    <input type="radio" name="op1" value="b"/>
                    </html>
                <?php
                    echo $b[0];
                    echo "</td>";
                    echo "</tr>";

                    echo "<tr>";
                    echo "<td></td>";
                    echo "<td>";
                ?>
                    <html>
                    <input type="radio" name="op1" value="c"/>
                    </html>
                <?php
                    echo $c[0];
                    echo "</td>";
                    echo "</tr>";

                    echo "<tr>";
                    echo "<td></td>";
                    echo "<td>";
                ?>
                    <html>
                    <input type="radio" name="op1" value="d"/>
                    </html>
                <?php
                    echo $d[0];
                    echo "</td>";
                    echo "</tr>";

                    echo "<tr>";
                    echo "<td>2</td>";
                    echo "<td>".$ques[1]."</td>";
                    echo "<tr>";
                    echo "<td></td>";
                    echo "<td>";
                ?>
                    <html>
                    <input type="radio" name="op2" value="a"/>
                    </html>
                <?php
                    echo $a[1];
                    echo "</td>";
                    echo "</tr>";

                    echo "<tr>";
                    echo "<td></td>";
                    echo "<td>";
                ?>
                    <html>
                    <input type="radio" name="op2" value="b"/>
                    </html>
                <?php
                    echo $b[1];
                    echo "</td>";
                    echo "</tr>";

                    echo "<tr>";
                    echo "<td></td>";
                    echo "<td>";
                ?>
                    <html>
                    <input type="radio" name="op2" value="c"/>
                    </html>
                <?php
                    echo $c[1];
                    echo "</td>";
                    echo "</tr>";

                    echo "<tr>";
                    echo "<td></td>";
                    echo "<td>";
                ?>
                    <html>
                    <input type="radio" name="op2" value="d"/>
                    </html>
                <?php
                    echo $d[1];
                    echo "</td>";
                    echo "</tr>";


                    echo "<tr>";
                    echo "<td>3</td>";
                    echo "<td>".$ques[2]."</td>";
                    echo "<tr>";
                    echo "<td></td>";
                    echo "<td>";
                ?>
                    <html>
                    <input type="radio" name="op3" value="a"/>
                    </html>
                <?php
                    echo $a[2];
                    echo "</td>";
                    echo "</tr>";

                    echo "<tr>";
                    echo "<td></td>";
                    echo "<td>";
                ?>
                    <html>
                    <input type="radio" name="op3" value="b"/>
                    </html>
                <?php
                    echo $b[2];
                    echo "</td>";
                    echo "</tr>";

                    echo "<tr>";
                    echo "<td></td>";
                    echo "<td>";
                ?>
                    <html>
                    <input type="radio" name="op3" value="c"/>
                    </html>
                <?php
                    echo $c[2];
                    echo "</td>";
                    echo "</tr>";

                    echo "<tr>";
                    echo "<td></td>";
                    echo "<td>";
                ?>
                    <html>
                    <input type="radio" name="op3" value="d"/>
                    </html>
                <?php
                    echo $d[2];
                    echo "</td>";
                    echo "</tr>";




                    echo "<tr>";
                    echo "<td>4</td>";
                    echo "<td>".$ques[3]."</td>";
                    echo "<tr>";
                    echo "<td></td>";
                    echo "<td>";
                ?>
                    <html>
                    <input type="radio" name="op4" value="a"/>
                    </html>
                <?php
                    echo $a[3];
                    echo "</td>";
                    echo "</tr>";

                    echo "<tr>";
                    echo "<td></td>";
                    echo "<td>";
                ?>
                    <html>
                    <input type="radio" name="op4" value="b"/>
                    </html>
                <?php
                    echo $b[3];
                    echo "</td>";
                    echo "</tr>";

                    echo "<tr>";
                    echo "<td></td>";
                    echo "<td>";
                ?>
                    <html>
                    <input type="radio" name="op4" value="c"/>
                    </html>
                <?php
                    echo $c[3];
                    echo "</td>";
                    echo "</tr>";

                    echo "<tr>";
                    echo "<td></td>";
                    echo "<td>";
                ?>
                    <html>
                    <input type="radio" name="op4" value="d"/>
                    </html>
                <?php
                    echo $d[3];
                    echo "</td>";
                    echo "</tr>";



                    echo "<tr>";
                    echo "<td>5</td>";
                    echo "<td>".$ques[4]."</td>";
                    echo "<tr>";
                    echo "<td></td>";
                    echo "<td>";
                ?>
                    <html>
                    <input type="radio" name="op5" value="a"/>
                    </html>
                <?php
                    echo $a[4];
                    echo "</td>";
                    echo "</tr>";

                    echo "<tr>";
                    echo "<td></td>";
                    echo "<td>";
                ?>
                    <html>
                    <input type="radio" name="op5" value="b"/>
                    </html>
                <?php
                    echo $b[4];
                    echo "</td>";
                    echo "</tr>";

                    echo "<tr>";
                    echo "<td></td>";
                    echo "<td>";
                ?>
                    <html>
                    <input type="radio" name="op5" value="c"/>
                    </html>
                <?php
                    echo $c[4];
                    echo "</td>";
                    echo "</tr>";

                    echo "<tr>";
                    echo "<td></td>";
                    echo "<td>";
                ?>
                    <html>
                    <input type="radio" name="op5" value="d"/>
                    </html>
                <?php
                    echo $d[4];
                    echo "</td>";
                    echo "</tr>";




                    echo "<tr>";
                    echo "<td>6</td>";
                    echo "<td>".$ques[5]."</td>";
                    echo "<tr>";
                    echo "<td></td>";
                    echo "<td>";
                ?>
                    <html>
                    <input type="radio" name="op6" value="a"/>
                    </html>
                <?php
                    echo $a[5];
                    echo "</td>";
                    echo "</tr>";

                    echo "<tr>";
                    echo "<td></td>";
                    echo "<td>";
                ?>
                    <html>
                    <input type="radio" name="op6" value="b"/>
                    </html>
                <?php
                    echo $b[5];
                    echo "</td>";
                    echo "</tr>";

                    echo "<tr>";
                    echo "<td></td>";
                    echo "<td>";
                ?>
                    <html>
                    <input type="radio" name="op6" value="c"/>
                    </html>
                <?php
                    echo $c[5];
                    echo "</td>";
                    echo "</tr>";

                    echo "<tr>";
                    echo "<td></td>";
                    echo "<td>";
                ?>
                    <html>
                    <input type="radio" name="op6" value="d"/>
                    </html>
                <?php
                    echo $d[5];
                    echo "</td>";
                    echo "</tr>";

                    echo "<tr>";
                    echo "<td>7</td>";
                    echo "<td>".$ques[6]."</td>";
                    echo "<tr>";
                    echo "<td></td>";
                    echo "<td>";
                ?>
                    <html>
                    <input type="radio" name="op7" value="a"/>
                    </html>
                <?php
                    echo $a[6];
                    echo "</td>";
                    echo "</tr>";

                    echo "<tr>";
                    echo "<td></td>";
                    echo "<td>";
                ?>
                    <html>
                    <input type="radio" name="op7" value="b"/>
                    </html>
                <?php
                    echo $b[6];
                    echo "</td>";
                    echo "</tr>";

                    echo "<tr>";
                    echo "<td></td>";
                    echo "<td>";
                ?>
                    <html>
                    <input type="radio" name="op7" value="c"/>
                    </html>
                <?php
                    echo $c[6];
                    echo "</td>";
                    echo "</tr>";

                    echo "<tr>";
                    echo "<td></td>";
                    echo "<td>";
                ?>
                    <html>
                    <input type="radio" name="op7" value="d"/>
                    </html>
                <?php
                    echo $d[6];
                    echo "</td>";
                    echo "</tr>";


                    echo "<tr>";
                    echo "<td>8</td>";
                    echo "<td>".$ques[7]."</td>";
                    echo "<tr>";
                    echo "<td></td>";
                    echo "<td>";
                ?>
                    <html>
                    <input type="radio" name="op8" value="a"/>
                    </html>
                <?php
                    echo $a[7];
                    echo "</td>";
                    echo "</tr>";

                    echo "<tr>";
                    echo "<td></td>";
                    echo "<td>";
                ?>
                    <html>
                    <input type="radio" name="op8" value="b"/>
                    </html>
                <?php
                    echo $b[7];
                    echo "</td>";
                    echo "</tr>";

                    echo "<tr>";
                    echo "<td></td>";
                    echo "<td>";
                ?>
                    <html>
                    <input type="radio" name="op8" value="c"/>
                    </html>
                <?php
                    echo $c[7];
                    echo "</td>";
                    echo "</tr>";

                    echo "<tr>";
                    echo "<td></td>";
                    echo "<td>";
                ?>
                    <html>
                    <input type="radio" name="op8" value="d"/>
                    </html>
                <?php
                    echo $d[7];
                    echo "</td>";
                    echo "</tr>";



                    echo "<tr>";
                    echo "<td>9</td>";
                    echo "<td>".$ques[8]."</td>";
                    echo "<tr>";
                    echo "<td></td>";
                    echo "<td>";
                ?>
                    <html>
                    <input type="radio" name="op9" value="a"/>
                    </html>
                <?php
                    echo $a[8];
                    echo "</td>";
                    echo "</tr>";

                    echo "<tr>";
                    echo "<td></td>";
                    echo "<td>";
                ?>
                    <html>
                    <input type="radio" name="op9" value="b"/>
                    </html>
                <?php
                    echo $b[8];
                    echo "</td>";
                    echo "</tr>";

                    echo "<tr>";
                    echo "<td></td>";
                    echo "<td>";
                ?>
                    <html>
                    <input type="radio" name="op9" value="c"/>
                    </html>
                <?php
                    echo $c[8];
                    echo "</td>";
                    echo "</tr>";

                    echo "<tr>";
                    echo "<td></td>";
                    echo "<td>";
                ?>
                    <html>
                    <input type="radio" name="op9" value="d"/>
                    </html>
                <?php
                    echo $d[8];
                    echo "</td>";
                    echo "</tr>";


                    echo "<tr>";
                    echo "<td>10</td>";
                    echo "<td>".$ques[9]."</td>";
                    echo "<tr>";
                    echo "<td></td>";
                    echo "<td>";
                ?>
                    <html>
                    <input type="radio" name="op10" value="a"/>
                    </html>
                <?php
                    echo $a[9];
                    echo "</td>";
                    echo "</tr>";

                    echo "<tr>";
                    echo "<td></td>";
                    echo "<td>";
                ?>
                    <html>
                    <input type="radio" name="op10" value="b"/>
                    </html>
                <?php
                    echo $b[9];
                    echo "</td>";
                    echo "</tr>";

                    echo "<tr>";
                    echo "<td></td>";
                    echo "<td>";
                ?>
                    <html>
                    <input type="radio" name="op10" value="c"/>
                    </html>
                <?php
                    echo $c[9];
                    echo "</td>";
                    echo "</tr>";

                    echo "<tr>";
                    echo "<td></td>";
                    echo "<td>";
                ?>
                    <html>
                    <input type="radio" name="op10" value="d"/>
                    </html>
                <?php
                    echo $d[9];
                    echo "</td>";
                    echo "</tr>";
                ?>
                <html>
                <input type="submit" name="Submit" value="submit"/>
                </html>
                <?php
                    try{
                        if(empty($_post['op1']) || empty($_post['op2']) || empty($_post['op3']) || empty($_post['op4']) || empty($_post['op5']) || empty($_post['op6']) || empty($_post['op7']) || empty($_post['op8']) || empty($_post['op9']) || empty($_post['op10']) )
                        {
                            echo "<h3>Attempt the quiz</h3>";
                        }
                        else{
                            $count=0;
                            if($cor[0]==$_POST['op1'])
                            {
                                $count++;
                            }
                            if($cor[1]==$_POST['op2'])
                            {
                                $count++;
                            }
                            if($cor[2]==$_POST['op3'])
                            {
                                $count++;
                            }
                            if($cor[3]==$_POST['op4'])
                            {
                                $count++;
                            }
                            if($cor[4]==$_POST['op5'])
                            {
                                $count++;
                            }
                            if($cor[5]==$_POST['op6'])
                            {
                                $count++;
                            }
                            if($cor[6]==$_POST['op7'])
                            {
                                $count++;
                            }
                            if($cor[7]==$_POST['op8'])
                            {
                                $count++;
                            }
                            if($cor[8]==$_POST['op9'])
                            {
                                $count++;
                            }
                            if($cor[9]==$_POST['op10'])
                            {
                                $count++;
                            }
                            $un=$_COOKIE['userid'];
                            $result="insert into result_data values('$test','$un',$count)";
                            mysqli_query($conn,$result);
                        }

                    }catch(Exception $e){}
    }
                ?>
            </form>
        </table>
    </body>
</html>