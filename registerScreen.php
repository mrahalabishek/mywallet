<html>
    <head>
        <title>
            Register
        </title>
    </head>

    <body>
        <center>
            <h2>Register</h2>
        </center>

        <form action="utils/register.php" method="POST">
            <label>
                Name :
            </label>
            <input type="text" name="uName"><br><br>

            <label>
                Email :
            </label>
            <input type="text" name="uEmail"><br><br>

            <label>
                Username :
            </label>
            <input type="text" name="userName"><br><br>

            <label>
                Password :
            </label>
            <input type="password" name="password"><br><br>

            <label>
                Re-enter password :
            </label>
            <input type="password" name="rePassword"><br><br>


            <input type="submit" name="register" value="Register">
            <input type="reset" name="clear">



            
        </form>
    </body>
</html>