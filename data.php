<?php 
    include("login_connection.php");
    $sql = "select * from tblproduct ";
    $result = mysqli_query($con, $sql);
    $connect = new mysqli($servername, $username, $password, $db);
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
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
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
                    <li><a href="#"><b>Data</b></a></li>
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
                        <a href="add.php"><button type="button" class="btn btn-primary" id="add">Add</button></a>
                        <button type="button" class="btn btn-primary" id="import">Import</button>
                    </div>
                    </div>
                    <table class="table">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Name</th>
                                <th>Email</th>
                                <th>Phone</th>
                                <th>Profesion</th>
                                <th>Company</th>
                                <th>Action</th>
                            </tr>
                            <?php 
                                foreach($result as $r){ ?>
                                    <tr>
                                        <td><?php echo $r['id']; ?></td>
                                        <td><?php echo $r['Name']; ?></td>
                                        <td><?php echo $r['Email']; ?></td>
                                        <td><?php echo $r['Phone']; ?></td>
                                        <td><?php echo $r['Profession']; ?></td>
                                        <td><?php echo $r['Company']; ?></td>
                                        <td>
                                        <a href="delete.php/?id=<?=$r['id']?>" onclick="return deleteme()" class="btn btn-danger">Delete</a>
                                        <a href="#" class="btn btn-danger">Edit</a>
                                    </td>
                                    </tr>
                                <?php }
                            ?>
                        </thead>
                    </table>
                </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>

