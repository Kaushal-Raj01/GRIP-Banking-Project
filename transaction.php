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

<body style="padding-top:8%; background-color: rgb(255, 255, 255);" >
<?php $page = "transaction"; ?>
<?php include('nav.php'); ?>
<center>
    <div class="container" style="margin-top:2%; 
        background-color: rgb(0, 0, 0); backdrop-filter: blur(10px); box-shadow:3px 3px 15px black; border-radius:30px; padding:20px 0px 20px 0px;">
    <div class="container" style=" padding:10px 80px 10px 80px; ">
        <div
            style="width:80%; background-color:#193755; padding:5px 5px 5px 5px; border-radius:30px; box-shadow: 2px 2px 10px gray;">
            <h1 style=" color:white;">All Customers</h1>
        </div>
        <?php

    $conn = mysqli_connect($servername, $username, $password, $database);
    if(!$conn){
        die("Connection not established: ".mysqli_connect_error());
    }else{
    
        $sql = "SELECT * FROM `transactions`";
        $result = mysqli_query($conn, $sql);
?>
        <table class="table table-light" style="margin-top: 30px;">
            <thead>
                <tr>
                    <th scope="col">Sender</th>
                    <th scope="col">Reciever</th>
                    <th scope="col">Amount</th>
                    <th scope="col">Status</th>
                </tr>
            </thead>
            <?php
echo "<tbody>";
        while($row = mysqli_fetch_assoc($result)){
        if(!(empty($row['sender']) && empty($row['receiver']) && empty($row['amount'])))
            {echo    '
            <tr>
              <td>'.$row['sender'].'</td>
              <td>'.$row['receiver'].'</td>
              <td>'.$row['amount'].'</td>
              <td>'; ?> <?php if($row['status'] == "succeed"){echo '<b><p style="color:green;">Succeed</p></b>';}else{echo '<b><p style="color:red;">Failed</p></b>';} ?>
              <?php echo '</td>
              </tr>';}
    }
    
    }
    echo "</tbody>";
?>
        </table>
</center>

</body>

</html>