<?php
    $db_hostname="127.0.0.1";
    $db_username="root";
    $db_password="";
    $db_name="doubt_solver";
    $conn=mysqli_connect($db_hostname,$db_username,$db_password,$db_name);
    if(!$conn){
        echo "Server is'nt responding";
    }
    $user=$_POST['username'];
    $pass=$_POST['password'];
    $sub=$_POST['submit'];
    $sql="select id from user_data where user_name=(select user_name from user_data where password='$pass')";
    $sql2="select id from user_data where user_name='$user' and password='$pass'";
    $res=$conn->query($sql);
    $res2=$conn->query($sql2);
    if($res!=$res2){   
        echo "username and password mismatched";
    }
    else{
        ?>
       <html>
    <head>
        <title>Student Home </title>
        <link rel="stylesheet" href="css/studentstyle.css"/>
    </head>
    <header>
    <h1 id="main">StudyNest</h1>
    <h4>Connect to the teachers you can't meet</h4>
    <h4>About us | Contact</h4>
    </header>
    <body>
        <div>
            <div>
                <a href="doubt.php"><button>Ask a Doubt</button></a>
            </div>
            <div>
                <h3>You can ask a doubt in any subject available</h3>
                <h3>If the subject which you are looking for is not available in options then post your doubt in any subject option</h3>
            </div>
        </div>
        <div>
            <div>
                <a href="solve.php"><button>Solve a doubt</button></a>
            </div>
            <div>
                <h3>Even the students can solve a doubt.</h3>
                <h3>If you are interested to solve the doubts of your classmates/batchmates/juniors in the subjects you are good at, you are welcome to solve it</h3>
            </div>
        </div>
        <div>
            <div>
                <a href="quiz.php"><button>Attempt a quiz</button></a>
            </div>
            <div>
                <h3>Check yourself by attempting a quiz</h3>
                <h3>Choose the subject you are interested to take a quiz in. If there is any quiz posted in that subject you can attempt it.</h3>
            </div>
        </div>
        <div>
            <div>
                <a href="results.php"><button><h1>Results</h1></button></a>
            </div>
            <div>
                <h3>Check your results in quiz/semester exams</h3>
                <h3>The results will be posted by the Admin or the teachers who had organized the quiz. Your results will be displayed to you once they are posted</h3>
            </div>
        </div>
        <div>
            <div>
                <a href="material.php"><button>Subject Resources</button></a>
            </div>
            <div>
                <h3>Access the resources of any subject you want</h3>
                <h3>The materials will be provided by the teachers or your Seniors</h3>
            </div>
        </div>
        <div>
            <div>
                <a href="video_lectures.php"><button>Video lectures</button></a>
            </div>
            <div>
                <h3>Learn from the video Lectures</h3>
                <h3>The video lectures will be recorded and posted by the teachers in the respective subjects</h3>
            </div>
        </div>
    </body>
</html>
<?php
    }
?>
