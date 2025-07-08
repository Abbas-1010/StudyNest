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
<?php
    $db_hostname="127.0.0.1";
    $db_username="root";
    $db_password="";
    $db_name="doubt_solver";
    $conn=mysqli_connect($db_hostname,$db_username,$db_password,$db_name);
    if(!$conn){
        echo "Server is'nt responding";
    }
    $tid=$_COOKIE['testno'];
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
                
                if($i['test_id']==$tid){
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
                            $result="insert into result_data values('$tid','$un',$count)";
                            mysqli_query($conn,$result);
                        

                    }catch(Exception $e){}
                    ?>
    </body>
    </html>