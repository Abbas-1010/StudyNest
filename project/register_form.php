<html>
    <head>
        <link rel="stylesheet" type="text/css" href="css/regstyle.css"/>
    </head>
    <body>
        <form method="post"  action="register_action.php">
            Username : <input type="text" name="username" required/>
            <br><br>
            Password : <input type="password" name="password" required/>
            <br><br>
            Re-enter password : <input type="text" name="re-password"/>
            <br><br>
            Enter your e-mail<input type="text" name="e-mail" required/>
            <br><br>
            <input type="radio" name="profession" value="student"/>Student 
            <br><br>
            <input type="radio" name="profession" value="teacher"/>Teacher
            <br><br>
            Institution Name : <select name="institution">
                <option value="VLITS">VLITS</option>
                <option value="VFSTR">VFSTR</option>
                <option value="VNITSW">VNITSW</option>
                <option value="VGNT">VGNT</option>
            </select>
            <br><br>
            <input type="submit" name="submit" value="submit"/>
            
        </form>
    </body>
</html>


