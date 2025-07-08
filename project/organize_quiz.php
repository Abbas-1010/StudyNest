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
    <head><title>Organize Quiz</title>
<link rel="stylesheet" href="css/quiz_style.css"/></head>
<header>
    <h1>Create a Quiz</h1>
    <h3>10 questions maximum</h3>
</header>
    <body>
        <form method="post" action="organize_quiz.php">
            Test id:
            <input type="text" name="tes_id" required/>
           Subject:<input type="text" name="subject" required/>
            <br><br>
            1.<textarea name="question1" rows='2' cols="75"></textarea>
            <br><br>
            <input name="option1" value="a" type="radio" onclick="toggleRadio(this)"/>
            <input type="text" name="op1a"/> 
            <input name="option1" value="b" type="radio" onclick="toggleRadio(this)"/>
            <input type="text" name="op1b"/>
            <input name="option1" value="c" type="radio" onclick="toggleRadio(this)"/>
            <input type="text" name="op1c"/>
            <input name="option1" value="d" type="radio" onclick="toggleRadio(this)"/>
            <input type="text" name="op1d"/>
            <br><br>
            2.<textarea name="question2" rows='2' cols="75"></textarea>
            <br><br>
            <input name="option2" value="a" type="radio" onclick="toggleRadio(this)"/>
            <input type="text" name="op2a"/> 
            <input name="option2" value="b" type="radio" onclick="toggleRadio(this)"/>
            <input type="text" name="op2b"/>
            <input name="option2" value="c" type="radio" onclick="toggleRadio(this)"/>
            <input type="text" name="op2c"/>
            <input name="option2" value="d" type="radio" onclick="toggleRadio(this)"/>
            <input type="text" name="op2d"/>
            <br><br>
            3.<textarea name="question3" rows='2' cols="75"></textarea>
            <br><br>
            <input name="option3" value="a" type="radio" onclick="toggleRadio(this)"/>
            <input type="text" name="op3a"/> 
            <input name="option3" value="b" type="radio" onclick="toggleRadio(this)"/>
            <input type="text" name="op3b"/>
            <input name="option3" value="c" type="radio" onclick="toggleRadio(this)"/>
            <input type="text" name="op3c"/>
            <input name="option3" value="d" type="radio" onclick="toggleRadio(this)"/>
            <input type="text" name="op3d"/>
            <br><br>
            4.<textarea name="question4" rows='2' cols="75"></textarea>
            <br><br>
            <input name="option4" value="a" type="radio"onclick="toggleRadio(this)"/>
            <input type="text" name="op4a"/> 
            <input name="option4" value="b" type="radio" onclick="toggleRadio(this)"/>
            <input type="text" name="op4b"/>
            <input name="option4" value="c" type="radio" onclick="toggleRadio(this)"/>
            <input type="text" name="op4c"/>
            <input name="option4" value="d" type="radio" onclick="toggleRadio(this)"/>
            <input type="text" name="op4d"/>
            <br><br>
            5.<textarea name="question5" rows='2' cols="75"></textarea>
            <br><br>
            <input name="option5" value="a" type="radio" onclick="toggleRadio(this)"/>
            <input type="text" name="op5a"/> 
            <input name="option5" value="b" type="radio" onclick="toggleRadio(this)"/>
            <input type="text" name="op5b"/>
            <input name="option5" value="c" type="radio" onclick="toggleRadio(this)"/>
            <input type="text" name="op5c"/>
            <input name="option5" value="d" type="radio" onclick="toggleRadio(this)"/>
            <input type="text" name="op5d"/>
            <br><br>
            6.<textarea name="question6" rows='2' cols="75"></textarea>
            <br><br>
            <input name="option6" value="a" type="radio" onclick="toggleRadio(this)"/>
            <input type="text" name="op6a"/> 
            <input name="option6" value="b" type="radio" onclick="toggleRadio(this)"/>
            <input type="text" name="op6b"/>
            <input name="option6" value="c" type="radio" onclick="toggleRadio(this)"/>
            <input type="text" name="op6c"/>
            <input name="option6" value="d" type="radio" onclick="toggleRadio(this)"/>
            <input type="text" name="op6d"/>
            <br><br>
            7.<textarea name="question7" rows='2' cols="75"></textarea>
            <br><br>
            <input name="option7" value="a" type="radio" onclick="toggleRadio(this)"/>
            <input type="text" name="op7a"/> 
            <input name="option7" value="b" type="radio" onclick="toggleRadio(this)"/>
            <input type="text" name="op7b"/>
            <input name="option7" value="c" type="radio" onclick="toggleRadio(this)"/>
            <input type="text" name="op7c"/>
            <input name="option7" value="d" type="radio" onclick="toggleRadio(this)"/>
            <input type="text" name="op7d"/>
            <br><br>
            8.<textarea name="question8" rows='2' cols="75"></textarea>
            <br><br>
            <input name="option8" value="a" type="radio" onclick="toggleRadio(this)"/>
            <input type="text" name="op8a"/> 
            <input name="option8" value="b" type="radio" onclick="toggleRadio(this)"/>
            <input type="text" name="op8b"/>
            <input name="option8" value="c" type="radio" onclick="toggleRadio(this)"/>
            <input type="text" name="op8c"/>
            <input name="option8" value="d" type="radio" onclick="toggleRadio(this)"/>
            <input type="text" name="op8d"/>
            <br><br>
            9.<textarea name="question9" rows='2' cols="75"></textarea>
            <br><br>
            <input name="option9" value="a" type="radio" onclick="toggleRadio(this)"/>
            <input type="text" name="op9a"/> 
            <input name="option9" value="b" type="radio" onclick="toggleRadio(this)"/>
            <input type="text" name="op9b"/>
            <input name="option9" value="c" type="radio" onclick="toggleRadio(this)"/>
            <input type="text" name="op9c"/>
            <input name="option9" value="d" type="radio" onclick="toggleRadio(this)"/>
            <input type="text" name="op9d"/>
            <br><br>
            10.<textarea name="question10" rows='2' cols="75"></textarea>
            <br><br>
            <input name="option10" value="a" type="radio" onclick="toggleRadio(this)"/>
            <input type="text" name="op10a"/> 
            <input name="option10" value="b" type="radio" onclick="toggleRadio(this)"/>
            <input type="text" name="op10b"/>
            <input name="option10" value="c" type="radio" onclick="toggleRadio(this)"/>
            <input type="text" name="op10c"/>
            <input name="option10" value="d" type="radio" onclick="toggleRadio(this)"/>
            <input type="text" name="op10d"/>
            <br><br>
            <input type="submit" value="Post the quiz" name="Post"/>
            <?php
            try{
                if(empty($_POST['tes_id']) && empty($_POST['subject']) && empty($_POST['question1']) && empty($_POST['question2']) && empty($_POST['question3']) && empty($_POST['question4']) && empty($_POST['question5']) && empty($_POST['question6']) && empty($_POST['question7']) && empty($_POST['question8']) && empty($_POST['question9']) && empty($_POST['question10']) && empty($_POST['option1']) && empty($_POST['option2']) && empty($_POST['option3']) && empty($_POST['option4']) && empty($_POST['option5']) && empty($_POST['option6']) && empty($_POST['option7']) && empty($_POST['option8']) && empty($_POST['option9']) && empty($_POST['option10'])){
                    echo "Organize your quiz";
                }
                else{
                    $te=$_POST['tes_id'];
                    $su=$_POST['subject'];
                    $q1=$_POST['question1'];$q2=$_POST['question2'];$q3=$_POST['question3'];$q4=$_POST['question4'];$q5=$_POST['question5'];
                    $q6=$_POST['question6'];$q7=$_POST['question7'];$q8=$_POST['question8'];$q9=$_POST['question9'];$q10=$_POST['question10'];  
                    $o1a=$_POST['op1a'];$o1b=$_POST['op1b'];$o1c=$_POST['op1c'];$o1d=$_POST['op1d'];
                    $o2a=$_POST['op2a'];$o2b=$_POST['op2b'];$o2c=$_POST['op2c'];$o2d=$_POST['op2d'];
                    $o3a=$_POST['op3a'];$o3b=$_POST['op3b'];$o3c=$_POST['op3c'];$o3d=$_POST['op3d'];
                    $o4a=$_POST['op4a'];$o4b=$_POST['op4b'];$o4c=$_POST['op4c'];$o4d=$_POST['op4d'];
                    $o5a=$_POST['op5a'];$o5b=$_POST['op5b'];$o5c=$_POST['op5c'];$o5d=$_POST['op5d'];
                    $o6a=$_POST['op6a'];$o6b=$_POST['op6b'];$o6c=$_POST['op6c'];$o6d=$_POST['op6d'];
                    $o7a=$_POST['op7a'];$o7b=$_POST['op7b'];$o7c=$_POST['op7c'];$o7d=$_POST['op7d'];
                    $o8a=$_POST['op8a'];$o8b=$_POST['op8b'];$o8c=$_POST['op8c'];$o8d=$_POST['op8d'];
                    $o9a=$_POST['op9a'];$o9b=$_POST['op9b'];$o9c=$_POST['op9c'];$o9d=$_POST['op9d'];
                    $o10a=$_POST['op10a'];$o10b=$_POST['op10b'];$o10c=$_POST['op10c'];$o10d=$_POST['op10d'];
                    $a1=$_POST['option1'];$a2=$_POST['option2'];$a3=$_POST['option3'];$a4=$_POST['option4'];$a5=$_POST['option5'];
                    $a6=$_POST['option6'];$a7=$_POST['option7'];$a8=$_POST['option8'];$a9=$_POST['option9'];$a10=$_POST['option10'];
                    $sql1="insert into tests values('$te','$su')";
                    $sq1="insert into test_questions values('$te','$q1','$o1a','$o1b','$o1c','$o1d','$a1')";
                    $sq2="insert into test_questions values('$te','$q2','$o2a','$o2b','$o2c','$o2d','$a2')";
                    $sq3="insert into test_questions values('$te','$q3','$o3a','$o3b','$o3c','$o3d','$a3')";
                    $sq4="insert into test_questions values('$te','$q4','$o4a','$o4b','$o4c','$o4d','$a4')";
                    $sq5="insert into test_questions values('$te','$q5','$o5a','$o5b','$o5c','$o5d','$a5')";
                    $sq6="insert into test_questions values('$te','$q6','$o6a','$o6b','$o6c','$o6d','$a6')";
                    $sq7="insert into test_questions values('$te','$q7','$o7a','$o7b','$o7c','$o7d','$a7')";
                    $sq8="insert into test_questions values('$te','$q8','$o8a','$o8b','$o8c','$o8d','$a8')";
                    $sq9="insert into test_questions values('$te','$q9','$o9a','$o9b','$o9c','$o9d','$a9')";
                    $sq10="insert into test_questions values('$te','$q10','$o10a','$o10b','$o10c','$o10d','$a10')";
                    mysqli_query($conn,$sql1);
                    mysqli_query($conn,$sq1);
                    mysqli_query($conn,$sq2);
                    mysqli_query($conn,$sq3);
                    mysqli_query($conn,$sq4);
                    mysqli_query($conn,$sq5);
                    mysqli_query($conn,$sq6);
                    mysqli_query($conn,$sq7);
                    mysqli_query($conn,$sq8);
                    mysqli_query($conn,$sq9);
                    mysqli_query($conn,$sq10);
                }
            }catch(Exception $e){
                
            }
            ?>
        </form>
        <script>
        let lastChecked = null;

        function toggleRadio(radio) {
            if (lastChecked === radio) {
                radio.checked = false;
                lastChecked = null;
            } else {
                lastChecked = radio;
            }
        }
    </script>
    </body>
</html>