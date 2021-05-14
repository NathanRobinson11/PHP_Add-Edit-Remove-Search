<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LIVERPOOL SQUAD</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>
<body>
    <div class="container">
        <div class="card-header">
        <h4>Liverpool Squad 2020/21 Season</h4>
        </div> 
        <table class="table table-border">
            <thead>
                <tr>
                    <th>First Name</th>
                    <th>Surname</th>
                    <th>Position</th>
                    <th>Age</th>
                    <th>Nationality</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
            <?php
                $serverName = "localhost";
                $username = "root" ;
                $password = "";
                $database = "liverpool";

                //create connection
                $con = mysqli_connect($serverName, $username, $password, $database);

                if($con){
                    
                }else{
                    echo "Connection Failed!";
                }
                //select query starts here
                $sel = "SELECT * FROM players";
                $query = $con->query($sel);
                while($row=$query->fetch_assoc())
                {
            ?>
                <tr>
                    
                    <td><?php echo $row['firstname']; ?></td>
                    <td><?php echo $row['secondname']; ?></td>
                    <td><?php echo $row['position']; ?></td>
                    <td><?php echo $row['age']; ?></td>
                    <td><?php echo $row['nationality']; ?></td>
                    <td>
                        <a href="edit.php?edit=<?php echo $row['id'];?>" class="btn btn-success">Edit</a>
                        <a href="delete.php?delete=<?php echo $row['id'];?>" class="btn btn-danger">Delete</a>
                    </td>
                </tr>
                <?php
                }
                ?>
            </tbody>
        </table>
    </div>
    
</body>
</html>