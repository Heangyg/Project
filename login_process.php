<?php
    include("login_connection.php");
    if(isset($_POST['submit'])){
        $username = $_POST['user'];
        $password = $_POST['pass'];

        $sql = "SELECT * FROM tblogin WHERE username = '$username' AND password = '$password'";
        $result = mysqli_query($con, $sql);
        $row = mysqli_fetch_array($result, MYSQLI_ASSOC);
        $count =mysqli_num_rows($result);
        if($count==1){
            header("Location:dashboard.php");
        }
        else{
            echo '<script>
                window.location.href = "login.php";
                alert("Login faild. Invalid username or password!!");
            </script>';

        }
    }
?>