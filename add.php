 <?php 
    include("login_connection.php");
   
?> 

<?php



    if(isset($_POST["submit"])){
        $id = $_POST['id'];
        $name = $_POST['name'];
        $email = $_POST['email'];
        $phone = $_POST['phone'];
        $profession = $_POST['profession'];
        $company = $_POST['company'];
        $sql = "INSERT INTO tblproduct (id,name,email,phone,profession,company) VALUES ('$id', '$name', '$email', '$phone', '$profession', '$company')";

        $result = $con->query($sql);

       if (!$result) {
        die("Error Add Data");
    }

    header('location: ./data.php');
    exit;

    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="dashboard.css">
    <link rel="stylesheet" href="data.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css">
    <title>Welcome</title>
</head>
<body>
    <div class="main">
        <div class="title">
            <h1>Data Management</h1>
        </div>
        <div class="menu-box">
            <div class="menu">
                <ul>
                    <li><a href="dashboard.php"><b>Dashboard</b></a></li>
                    <li><a href="data.php"><b>Data</b></a></li>
                    <li><a href="#"><b>User</b></a>
                        <div class="dropdown_menu">
                            <ul>
                                <li><a href="#">Profile</a></li>
                                <li><a href="#">Login</a></li>
                            </ul>
                        </div>
                    </li>
                </ul>
            </div>
            <div class="box">
                <div class="nav">
                    <li><a href="#">Home > Data > <b>Add</b></a></li>
                </div>
                <form method="POST">
                    <div class="add-data">
                        <h2 style="text-align: center;">Add Data</h2>
                        <div class="form-a"><b>
                            ID: <br><input class="form-control-sm" type="id" name="id" placeholder="Enter your ID">
                            <br><br>
                            Name: <br><input class="form-control-sm" type="text" name="name" placeholder="Enter your name">
                            <br><br>
                            E-mail: <br><input class="form-control-sm" type="text" name="email" placeholder="Enter your email">
                            <br><br>
                            Phone: <br><input class="form-control-sm" type="text" name="phone" placeholder="Enter your phone">
                            <br><br>
                            Position: <br><input class="form-control-sm" type="text" name="profession" placeholder="Enter your position">
                            <br><br>
                            Company: <br><input class="form-control-sm" type="text" name="company" placeholder="Enter your compnay">
                            <br><br>
                            <input class="btn btn-primary" type="submit" name="submit" value="Submit"></b>
                        </div>
                        <div class="form-b"><b>
                            <input type="file" style="font-size: 20px; color: rgb(41, 133, 255);">
                        <br><br>
                            <select name="cars" class="form-control-lg" id="cars">
                                <option value="volvo">Sex</option>
                                <option value="saab">Female</option>
                                <option value="opel">Male</option>
                                <option value="audi">Others</option>
                            </select>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>
</html>