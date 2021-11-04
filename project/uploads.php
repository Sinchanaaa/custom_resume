<?php
$con = mysqli_connect("localhost", "root", "", "images");

if(isset($_POST['uploads'])){

    $file =$_FILES['images']['name'];

    $query = "INSERT INFO uploads(images) VALUES('$file')";

    $res = mysqli_query($con,$query);

    if ($res){

        move_uploaded_file($_FILES['images']['tmp_name'], "$flie");
    }
}


?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="">
    <div class="perinfo">
                <label for="name">NAME: </label>
                <input type="file" name="" id="name" placeholder="enter your name" class="form-control">
            </div>
    </form>
</body>
</html>