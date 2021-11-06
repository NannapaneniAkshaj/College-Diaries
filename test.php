<!DOCTYPE html>
<html>
<head>
    <title>Insert Image in MySql using PHP</title>
</head>
<body>
<?php
$msg = '';
if($_SERVER['REQUEST_METHOD']=='POST'){
    $image = $_FILES['image']['tmp_name'];
    $img = file_get_contents($image);
    $con = mysqli_connect('localhost:3000','root','','cd') or die('Unable To connect');
    $user=$_POST['user'];
    $sql = "insert into images (image,user) values('$image','$user')";
    mysqli_query($con,$sql);
    //$stmt = mysqli_prepare($con,$sql);

    //mysqli_stmt_bind_param($stmt, "s",$img);
    //mysqli_stmt_execute($stmt);


    mysqli_close($con);
}
?>
<form action="" method="post" enctype="multipart/form-data">
    <input type="file" name="image" />
    <input type="text" name="user">
    <button>Upload</button>
</form>
<?php
    echo $msg;
?>
</body>
</html>