<?php include 'spin.php'; ?>

<!doctype html>
<html lang="en">

<head>
    
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="apple-touch-icon" sizes="180x180" href="statics/apple-touch-icon.png">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>

    <title>Check Balance - Spark Bank</title>
    

<body style="background-color:rgba(0, 0, 0, 0.404);">

<?php include('nav.php'); ?>
   <center>
    <div class="container" style="margin-top:8%; 
        background-color: rgb(0, 0, 0); backdrop-filter: blur(10px); box-shadow:3px 3px 15px black; border-radius:30px; padding:20px 0px 20px 0px;">
        <div class="container" style="margin-top: 10%; padding:10px 80px 10px 80px; ">
            <div
                style="width:60%; background-color:#20446893; padding:5px 5px 5px 5px; border-radius:30px; box-shadow: 2px 2px 10px gray;">
                <h1 style=" color:white;">Check Account Balance</h1>
            </div>

            <div class="container"
                style=" backdrop-filter: blur(5px);  border-radius:50px; padding: 20px 20px 20px 20px; margin-top:50px; width:40%;"> 
                <form action="check_balance.php" method="post">
                    <input style="border-radius: 50px;" type="text" class="formin form-control" name="accno" id="" placeholder="Account Number"><br>
                    <br><input style="background-color: royalblue;" class="btn mybtn btn-outline-light" type="submit" value="Submit"><br><br>
                    <p style="color:rgb(255, 253, 253);">Don't remember your A/C number? check <a href="thecustomer.php">here</a>
                    </p>
</form>
            </div>
        </div>

        <?php

$conn = mysqli_connect($servername, $username, $password, $database);
if(!$conn){
	die("Connection not established: ".mysqli_connect_error());
}else{

if($_SERVER['REQUEST_METHOD']== 'POST'){
    $accno = $_POST['accno'];
    
    $sql = "SELECT blc FROM users where accno='$accno'";
    $result = mysqli_query($conn, $sql);
    if($result){
        echo '<div class="alert alert-success align-items-center text-center" style="width:25%;" role="alert">
         <h2> <i class="fas fa-rupee-sign" aria-hidden="true"></i>'.mysqli_fetch_assoc($result)['blc'].'</h2></div>';
    }else{
        echo '<div class="alert alert-danger align-items-center text-center" style="width:34%;" role="alert">
        <div><h2>
        <i class="fas fa-times-circle"></i>
        Something went wrong!</h2>
        </div>
      </div>';
    }
}
}


?>
    </center>

    
    
</body>

</html>