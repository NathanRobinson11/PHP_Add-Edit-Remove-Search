<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Player Search</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>
<body>

    <form action="" method="post" class="container">
        <input type="textbox" name="str" required/>
        <input type="submit" name="submit" value="Search">
    </form>
    <br>

    <div class="container">
        <div class="card-header">
        <h4>Player Search Returned...</h4>
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
                $con=mysqli_connect("localhost", "root", "", "liverpool");

                if(isset($_POST['submit'])){
                    $str=($_POST['str']);
                    $sql="SELECT * FROM players WHERE firstname LIKE '%$str%' or secondname LIKE '%$str%' or position LIKE '%$str%' or age LIKE '%$str%' or nationality LIKE '%$str%'";

                    $res=mysqli_query($con, $sql);

                    if(mysqli_num_rows($res)>0){
                        while($row=mysqli_fetch_assoc($res)){
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
    <?php
    } else{
        echo "no data";
    }
}

?>

</body>
</html>


<?php