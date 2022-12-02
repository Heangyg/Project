<?php 
    include("login_connection.php");
    $sql = "select * from tblProduct ";
    $result = mysqli_query($con, $sql);
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
                    <li><a href="#">Home > Data</a></li>
                </div>
                <div class="data">
                    <div class="button-add">
                        <button type="button" class="btn btn-primary" id="add">Add</button>
                        <button type="button" class="btn btn-primary" id="import">Import</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>