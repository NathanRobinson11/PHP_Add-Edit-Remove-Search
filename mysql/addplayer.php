<?php
 $connection=mysqli_connect("localhost", "root", "", "liverpool");
    if($connection){
        if(isset($_POST['submit'])){
            $firstName = $_POST['firstname'];
            $secondName = $_POST['secondname'];
            $position = $_POST['position'];
            $age = $_POST['age'];
            $nationality = $_POST['nationality'];

            $sql="INSERT INTO players (firstname, secondname, position, age, nationality) VALUES('$firstName','$secondName','$position','$age','$nationality')";
            $done=$connection->query($sql);
                if($done){
                    echo "Data Successfully Added";
                }else{
                    echo "Something Went Wrong";
                }
        }
    }else{
        echo "Error connecting database";
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Players</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="card">
                <div class="card-header">
                    <h4>INSERT PLAYER DATA INTO TABLE</h4>
                </div>
                <div class="card-body">
                    <form action="<?php $_PHP_SELF ?>" method="POST">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label>First Name <span style="color:red;">*</span></label>
                                    <input type="text" name="firstname" class="form-control" required ="">
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label>Surname<span style="color:red;">*</span></label>
                                    <input type="text" name="secondname" class="form-control" required ="">
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label>Position<span style="color:red;">*</span></label>
                                    <input type="text" name="position" class="form-control" required ="">
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label>Age<span style="color:red;">*</span></label>
                                    <input type="number" name="age" class="form-control" required ="">
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label>Nationality<span style="color:red;">*</span></label>
                                    <input type="text" name="nationality" class="form-control" required ="">
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="text-center">
                                    <input type="submit" name="submit" class="btn btn-primary">
                                </div>
                            </div>
                        </div>    
                    </form>
                </div>
            </div>
        </div>
    </div>  
</body>
</html>