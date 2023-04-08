<?php include 'spin.php'; ?>

<!doctype html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
        <link rel="stylesheet" href="style.css">
    <title>Contact us - GRIP Bank</title>
</head>

<body style=" padding-top:8%;  background-color: rgb(255, 255, 255);">

<?php $page = "contact"; ?>

<?php include('nav.php'); ?>
    <center>
        <div class="container" style="margin-top:2%; 
        background-color: rgb(0, 0, 0); backdrop-filter: blur(10px); box-shadow:3px 3px 15px black; border-radius:30px; padding:20px 0px 20px 0px;">
        <div class="container" style="padding:10px 80px 10px 80px; margin-top:2%;">
            <div
                style="width:80%; background-color:#193755; padding:5px 5px 5px 5px; border-radius:30px; box-shadow: 2px 2px 10px gray;">
                <h1 style=" color:white;">Contact Us</h1>
            </div>

            <div class="container"
                style=" backdrop-filter: blur(5px);  border-radius:5px; padding: 20px 20px 20px 20px; margin-top:50px; width:60%;">
                <form action="contact.php" method="post">
                    <input type="text" class="formin form-control" name="name" id="" placeholder="Name"><br><br>
                    <input type="email" class="formin form-control" name="email" id="" placeholder="Email"><br><br>
                    <textarea name="message" class="" style="border-radius:20px; padding: 5px 5px 5px 15px;"
                        placeholder="Enter your message" rows="5" cols="47" id=""></textarea>
                    <br><br><input style="background-color: royalblue;" class="btn mybtn btn-outline-light" type="submit" value="Submit">
                </form>
            </div>
        </div>

    </center>

    <?php

$conn = mysqli_connect($servername, $username, $password, $database);
if(!$conn){
	die("Connection not established: ".mysqli_connect_error());
}else{

if($_SERVER['REQUEST_METHOD']== 'POST'){
    $name = $_POST['name'];
    $email = $_POST['email'];
    $msg = $_POST['message'];
    
    $sql = "INSERT INTO `contactus` (`name`, `email`, `message`) VALUES ('$name', '$email', '$msg')";
    $result = mysqli_query($conn, $sql);
    if($result){
        echo '<div class="alert alert-success d-flex align-items-center" role="alert">
        <div>   
        <i class="fas fa-check-circle"></i>
          Thank you '.$name.' for contacting us!
        </div>
      </div>';
    }else{
        echo '<div class="alert alert-danger d-flex align-items-center" role="alert">
        <div>
        <i class="fas fa-times-circle"></i>
        Oops '.$name.'! Something went wrong!
        </div>
      </div>';
    }
}
}

?>

</body>

</html>