<?php include 'spin.php'; ?>
<!doctype html>
<html lang="en">

<head>
    
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="manifest" href="statics/site.webmanifest">
    <link rel="stylesheet" href="style.css">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>

    <title>Send money - Spark Bank</title>
   
</head>

<body style="background-color: rgb(255, 255, 255); padding-top:8%;">
<?php $page = "send"; ?>
<?php include('nav.php'); ?>
    <center>

        <div class="container" style="margin-top:2%; 
        background-color: rgb(0, 0, 0); backdrop-filter: blur(10px); box-shadow:3px 3px 15px black; border-radius:30px; padding:20px 0px 20px 0px;">
       
            <div
                style="width:50%; background-color:#193755; padding:5px 5px 5px 5px; border-radius:15px; box-shadow: 2px 2px 10px gray;">
                <h1 style=" color:white;">Transfer Amount</h1>
            </div>
            <br><br>
            <div class="" style=" backdrop-filter: blur(5px);  border-radius:5px;   ">
                <form action="send.php" method="post">
                    <table>
                        <tr>
                            <td style="width: 500px; "><input style="border-radius: 50px;" type="text" class="formin form-control" name="accno1" id=""
                                    placeholder="Sender's Account Number"
                                </td>
                        <tr>
                        <tr>
                            <td><input style="border-radius: 50px;" type="number" class="formin form-control" name="amount" id=""
                                    placeholder="Amount to Transfer"></td>
                        </tr>
                        <tr>
                            <td><input style="border-radius: 50px;" type="text" class="formin form-control" name="accno2" id=""
                                    placeholder="Reciever's Account Number"></td>
                        </tr>
                    </table>
                    <br><input style="border-radius: 50px; background-color: royalblue;" class="btn mybtn btn-outline-light" type="submit" value="Transfer"><br><br>
                    <p style="color:rgb(255, 255, 255);">Want to check your A/C balance? check <a href="check_balance.php">here</a></p>
                </form>
            </div>
        </div>

        <?php 

$conn = mysqli_connect($servername, $username, $password, $database);
if(!$conn){
	die("Connection not established: ".mysqli_connect_error());
}else{
    if($_SERVER['REQUEST_METHOD']== 'POST'){
    
    $sender = $_POST['accno1'];
    $amount = $_POST['amount'];
    $reciever = $_POST['accno2'];
   
    
    $checkblcquery = "SELECT blc FROM users where accno='$sender'";
    $checkblc = mysqli_query($conn, $checkblcquery);
    $ava_blc = mysqli_fetch_assoc($checkblc)['blc'];

    if($ava_blc >= $amount){
    $sql1 = "UPDATE users SET blc= blc-$amount WHERE accno='$sender'";
    $sql2 = "UPDATE users SET blc= blc+$amount WHERE accno='$reciever'";
    $result1 = mysqli_query($conn, $sql1);
    $result2 = mysqli_query($conn, $sql2);
    if($result1 && $result2){
        echo '<div class="alert alert-success align-items-center text-center" style="width:50%;" role="alert">
        <div>   
        <h2><i class="fas fa-check-circle"></i>
          Amount Transfered Successfully!</h2></div>
        </div>
      </div>';

      $sqltran = "INSERT INTO `transactions` (`sender`, `receiver`, `amount`, `status`) VALUES ('$sender', '$reciever', '$amount', 'succeed')";
      $sqltransact = mysqli_query($conn, $sqltran);
    }else{
        echo '<div class="alert alert-danger d-flex align-items-center" role="alert">
        <div>
        <i class="fas fa-times-circle"></i>
        Oops! Something went wrong!
        </div>
      </div>';
      $sqltran = "INSERT INTO `transactions` (`sender`, `receiver`, `amount`, `status`) VALUES ('$sender', '$reciever', '$amount', 'failed')";
      $sqltransact = mysqli_query($conn, $sqltran);
    }
}else{
    echo '<div class="alert alert-danger align-items-center text-center" style="width:50%;" role="alert">
        <div>   
        <h2><i class="fas fa-times-circle"></i>
        Not Sufficient Balance in Account!</h2></div>
        </div>
      </div>
      ';
      $sqltran = "INSERT INTO `transactions` (`sender`, `receiver`, `amount`, `status`) VALUES ('$sender', '$reciever', '$amount', 'failed')";
      $sqltransact = mysqli_query($conn, $sqltran);
}
}
}
?>
    </center>




    

</body>

</html>