<nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed fixed-top"
style="font-family:candara; font-size:18px; box-shadow: 0px 0px 10px 0px black;">
<div class="container-fluid">
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
        data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
        aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
</div>
<div class="collapse navbar-collapse" id="navbarSupportedContent">
    <b>
        <ul class="navbar-nav ">
            <li class="nav-item nav-links" style="margin-left:15px;">
                <a class="nav-link text-nowrap <?php echo $page == "home" ? "active" : ""?>" aria-current="page" href="index.php">Home Page</a>
            </li>
            <li class="nav-item" style="margin-left:15px; ">
                <a class="nav-link text-nowrap <?php echo $page == "send" ? "active" : ""?>" href="send.php">Send Money</a>
            </li>
            <li class="nav-item" style="margin-left:15px;">
                <a class="nav-link <?php echo $page == "view" ? "active" : ""?> text-nowrap" href="thecustomer.php">View The Customers</a>
            </li>
            <li class="nav-item" style="margin-left:15px;">
                <a class="nav-link <?php echo $page == "transaction" ? "active" : ""?> text-nowrap" href="transaction.php">Transactions</a>
            </li>
            <li class="nav-item" style="margin-left:15px; margin-right:75px;">
                <a class="nav-link <?php echo $page == "contact" ? "active" : ""?> text-nowrap" href="contact.php">Contact Us</a>
            </li>
           
        </ul>
    </b>
</div>
</nav>