<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>bank</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
</head>
  <body style="background-color: rgba(255, 255, 255, 0.726);" >
  <?php $page = "home"; ?>
  <?php include('nav.php'); ?>
<div class="container-fluid"
        style="color:rgb(255, 255, 255); height:200px; width: 100%; padding:6% 2% 2% 2%; background-color:#193755;">
           <h1>The Spark <br>Foundation bank<br></h1>   
           <br> 
        </div>
    <div class="container panel panel-blue" style="background-color: rgb(0, 0, 0); color: rgb(255, 255, 255);">
        Hello users thanks to joining with us. Here you can transfer money bank to bank Transactions.
    </div>
    <br>
    <br>
    <center style="margin:60px 0px 20px 0px;">
        <div class="container"
            style="background-color: rgb(0, 0, 0); backdrop-filter: blur(10px); box-shadow:3px 3px 15px black; border-radius:30px; padding:20px 0px 20px 0px;">
            <h1 style="text-shadow:2px 2px 2px gray; color:white;"><b>Our Services</b></h1>
            <div class="container" style="margin:30px 0px 20px 0px;">
                <div class="row">
                    <div class="col-lg">
                        
                        <div
                            style="background-color:#193755; color:white; width: 90%; border-radius:20px; box-shadow:3px 3px 8px gray; padding:20px 10px 20px 10px;">
                            <img src="customers.png" alt="" width="150" height="150" style="vertical-align:top"></i><br><br>
                            <a href="thecustomer.php"><button type="button" class="btn btn-outline-light mybtn" >View
                                    Customers</button></a><br>
                            <h6> You can view the customer of the Spark bank.</h6>
                        </div>
                    </div>
                    <div class="col-lg">
                        <div
                            style="background-color:#193755; color:white; width: 90%; border-radius:20px; box-shadow:3px 3px 8px gray; padding:20px 10px 20px 10px;">
                            <img src="transfer.png" alt="" width="150" height="150" style="vertical-align:top"></i><br><br>
                            <a href="send.php"><button type="button" class="btn btn-outline-light mybtn" >Transfer
                                    Money</button></a><br>
                            <h6>You can transfer money from your account.</h6>
                        </div>
                    </div>
                    
                </div>
            </div>

        </div>
    </center>
        <!--Dsiclaimer-->
        
        </section>
        <section class= "my-5">
        <div class="py-5 ">
         <h3 class="text-center" ><u>Disclaimer</u></h3>
         <p1 style="padding: 15px;">This website is the outcome of a intern project, and does not necessarily represent the views of any organisation or any other individuals referenced or acknowledged within the website.
            </p1><p1 style="padding: 15px;"> Anyone may reproduce, distribute, adapt, translate the content on the website, without explicit permission, provided that the content is accompanied by an acknowledgement that Spark</p1> <p1 style="padding: 15px;"> Bank website is the source and that it is clearly indicated if changes were made to the original content.</p1>
         </div>
        <footer class="text-center mt-2 py-5">
                <p>&copy 2023  <b>Kaushal raj</b> </br></p>
              </footer>
</body>
</html>