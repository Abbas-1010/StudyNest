<html>
    <head>
        <title>Preferences</title>
        <link rel="stylesheet" href="css/preferences_style.css"/>
    </head>
    <header>
        <h1 id="main">StudyNest</h1>
        <h4>Connect to the teachers you can't meet</h4>
    </header>
    <body>
        <form method="post" action="subject_preference.php">
            <div class="col">
                <h3>Common Subjects</h3>
                <div class="opt"><input type="checkbox" value="Communicative_English" name="subject[]">Communicative English</div>
                <div class="opt"><input type="checkbox" value="mathematics1" name="subject[]">Mathematics 1</div>
                <div class="opt"><input type="checkbox" value="Applied_physics" name="subject[]">Applied Pysics</div>
                <div class="opt"><input type="checkbox" value="ppsc" name="subject[]">P.P.S.C</div>
                <div class="opt"><input type="checkbox" value="mathematics2" name="subject[]">Mathematics 2</div>
                <div class="opt"><input type="checkbox" value="Applied_chemistry" name="subject[]">Applied chemistry</div>
                <div class="opt"><input type="checkbox" value="mathematics3" name="subject[]">Mathematics 3</div>
                
            </div>
            <div class="col">
                <h3>CSE</h3>
                <div class="opt"><input type="checkbox" value="computer_organization" name="subject[]">Computer organization</div>
                <div class="opt"><input type="checkbox" value="python_programming" name="subject[]">Python Programming</div>
                <div class="opt"><input type="checkbox" value="Data_Structures" name="subject[]">Data Structures</div>
                <div class="opt"><input type="checkbox" value="oopscpp" name="subject[]">OOPS thorough C++</div>
                <div class="opt"><input type="checkbox" value="operating_systems" name="subject[]">Operating Systems</div>
                <div class="opt"><input type="checkbox" value="software_engineering" name="subject[]">Software Engineering</div>
                <div class="opt"><input type="checkbox" value="mfcs" name="subject[]">M.F.C.S</div>
                <div class="opt"><input type="checkbox" value="pns" name="subject[]">Probability and Statistics</div>
                <div class="opt"><input type="checkbox" value="dbms" name="subject[]">DBMS</div>
                <div class="opt"><input type="checkbox" value="flat" name="subject[]">FLAT</div>
                <div class="opt"><input type="checkbox" value="java" name="subject[]">Java Programming</div>
                <div class="opt"><input type="checkbox" value="mefa" name="subject[]">MEFA</div>
                <div class="opt"><input type="checkbox" value="computer_networks" name="subject[]">Computer Networks</div>
                <div class="opt"><input type="checkbox" value="daa" name="subject[]">DAA</div>
                <div class="opt"><input type="checkbox" value="dwdm" name="subject[]">DWDM</div>
                <div class="opt"><input type="checkbox" value="ai" name="subject[]">Artificial Intelligence</div>
                <div class="opt"><input type="checkbox" value="dsys" name="subject[]">Distributed systems</div>
                <div class="opt"><input type="checkbox" value="ml" name="subject[]">Machine Learning</div>
                <div class="opt"><input type="checkbox" value="cd" name="subject[]">Compiler Design</div>
                <div class="opt"><input type="checkbox" value="cns" name="subject[]">Cryptography and Network Security</div>
                <div class="opt"><input type="checkbox" value="mc" name="subject[]">Mobile Computing</div>
                <div class="opt"><input type="checkbox" value="bda" name="subject[]">Big Data Analytics</div>
                <div class="opt"><input type="checkbox" value="np" name="subject[]">Network Programming</div>

            </div>
            <div class="col">
                <h3>ECE</h3>
                <div class="opt"><input type="checkbox" value="ed" name="subject[]">Engineering Drawing</div>
                <div class="opt"><input type="checkbox" value="oopjava" name="subject[]">OOPS through Java</div>
                <div class="opt"><input type="checkbox" value="na" name="subject[]">Network Analysis</div>
                <div class="opt"><input type="checkbox" value="bee" name="subject[]">B.E.E</div>
                <div class="opt"><input type="checkbox" value="edc" name="subject[]">E.D.C</div>
                <div class="opt"><input type="checkbox" value="ss" name="subject[]">Signals and Systems</div>
                <div class="opt"><input type="checkbox" value="stld" name="subject[]">S.T.L.D</div>
                <div class="opt"><input type="checkbox" value="rvsp" name="subject[]">R.V.S.P</div>
                <div class="opt"><input type="checkbox" value="eca" name="subject[]">E.C.A</div>
                <div class="opt"><input type="checkbox" value="dicd" name="subject[]">D.I.C.D</div>
                <div class="opt"><input type="checkbox" value="analog_communication" name="subject[]">Analog Communication</div>
                <div class="opt"><input type="checkbox" value="linear_control_system" name="subject[]">Linear Control System</div>
                <div class="opt"><input type="checkbox" value="mob" name="subject[]">Management and organizational behavior</div>
                <div class="opt"><input type="checkbox" value="analog_ic_app" name="subject[]">Analog I.C and Application</div>
                <div class="opt"><input type="checkbox" value="emtl" name="subject[]">Electromagetic Waves and Transmission Lines</div>
                <div class="opt"><input type="checkbox" value="dc" name="subject[]">Digital Communication</div>
                <div class="opt"><input type="checkbox" value="mp_mc" name="subject[]">Microprocessor and Microcontrollers</div>
                <div class="opt"><input type="checkbox" value="vlsi" name="subject[]">VLSI Design</div>
                <div class="opt"><input type="checkbox" value="dsp" name="subject[]">Digital Signal Processing</div>

            </div>
                <input type="submit" value="submit" name="Submit">
                <?php
                    $db_hostname="127.0.0.1";
                    $db_username="root";
                    $db_password="";
                    $db_name="doubt_solver";
                    $conn=mysqli_connect($db_hostname,$db_username,$db_password,$db_name);
                    if(!$conn){
                        echo "Server is'nt responding";
                    }
                    else{
                        try{
                            if(isset($_POST['Submit'])){
                            $x=$_POST['subject'];
                            $user=$_COOKIE['userid'];
                            $sql1="delete from interested_subjects where user_name='$user'";
                            mysqli_query($conn,$sql1);

                            foreach($x as $y){
                            $sql="insert into interested_subjects values('$user','$y')";
                            $result=mysqli_query($conn,$sql);
                            }
                            echo "<h3>Preference updated</h3>";
                        }
                        else{
                            echo "<h3>Check your preferred subject</h3>";
                        }
                        }catch(Exception $e){

                        }
                    }
?>
        </form>
    </body>
</html>