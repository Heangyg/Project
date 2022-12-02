<?php 
    include("login_connection.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="login.css">
    <title>Website Page Title</title>
</head>
<body>
    
    <div id="form">
        <h1>Data Management</h1>
        <form name="form" action="login_process.php" onsubmit="return isvalid()" method="POST">
            <label>Username</label>
            <input type="user" name="user" id="user" placeholder="Username"><br><br>
            <label>Password</label>
            <input type="password" name="pass" id="pass" placeholder="Password"><br><br>
            <input type="submit" name="submit" id="btn" value="Login">
        </form>
    </div>
    <script>
        function isvalid(){
            var user = document.form.user.value;
            var pass = document.form.pass.value;
            if(user.length == "" && pass.length == ""){
                alert("Username and password field is empty!!!");
                return false;
            }
            else{
                if(user.length == ""){
                    alert("Username is empty!!!");
                    return false;
                }
                if(pass.length == ""){
                    alert("Password is empty!!!");
                    return false;
                }
            }
        }
    </script>
</body>
</html>