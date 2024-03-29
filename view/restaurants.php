
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/restaurant-listings.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

    <title>Restaurants</title>

</head>
<body>
    <nav>
        <div class="header-container">
            <div class="logo">
                 <!-- Logo goes here -->
                 <a href="../index.php"><img height="auto" width="60px" src="../assets/images/logo-transformed.png" alt="logo"></a>
            </div>

             <ul id="menu">
                 <li><a href="../view/restaurants.php">RESTAURANTS</a></li>
                 <div class="dropdown">
                    <li><a href="#"><i class='fas'>&#xf406;</i> USER</a></li>
                        <div class="dropdown-content">
                            <a id="item-history">Item History</a>
                            <a id="user-profile">User Info</a>
                            <a href="../login/logout.php">Logout</a>
                        </div>
                 </div>
                 <li><a href="../view/cart.php"><i class="fa fa-shopping-cart"></i> CART </a> </li>
             </ul>
        </div>
    </nav>


    <section class="listing" id="content">
        <div>
            <div class="stat-box Kfc">
                <a href="../menu/kfcMenu.php">
                    <img src="../assets/images/KFC-img.png" alt="logo">
                </a>
            </div>
        </div>

        <div>
            <div class="stat-box munchies">
                <a href="../menu/munchiesMenu.php">
                    <img src="../assets/images/munchies-img.png" alt="logo">
                </a>
            </div>
        </div>

        <div>
            <div class="stat-box sushi">
                <a href="#">
                    <img src="../assets/images/sushi-img.png" alt="logo">
                </a>       
            </div>
        </div>

       <div>
        <h3>KFC</h3>
       </div>

       <div>
        <h3>Munchies</h3>
       </div>

       <div>
        <h3>Sushi Today</h3>
       </div>

    </section>


    <script src="../js/restaurant-listings.js"></script>
</body>
</html>