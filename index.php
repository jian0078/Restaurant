<!DOCTYPE html>

<?php
    include 'MenuItem.php';
    $burgerObj = new MenuItem("The WP Burger","Freshly made all-beef patty served up with homefries ","- $14"); 
    $kebobsObj = new MenuItem("WP Kebobs","Tender cuts of beef and chicken, served with your choice of side ","- $17"); 

?>

<html>
    <head>
        <title>WP Eatery - Home</title>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <link href='http://fonts.googleapis.com/css?family=Fugaz+One|Muli|Open+Sans:400,700,800' rel='stylesheet' type='text/css' />
        <link href="css/style.css" rel="stylesheet" type="text/css">
    </head>
    <body>
        <div id="wrapper">
            <?php include 'header.php';?>
          <nav>
                <div id="menuItems">
                    <ul>
                        <li><a href="index.php">Home</a></li>
                        <li><a href="menu.php">Menu</a></li>
                        <li><a href="contact.php">Contact</a></li>
                    </ul>
                </div>
            </nav>
            <div id="content" class="clearfix">
                <aside>
                        <h2><?php echo date("l"); ?>'s Specials</h2>
                        <hr>
                        <img src="images/burger_small.jpg" alt="Burger" title="<?php echo date("l"); ?>'s Special - Burger">
                        <h3><?php echo $burgerObj->getItemName();?></h3>
                        <p><?php echo $burgerObj->getDescription(); echo $burgerObj->getPrice();?></p>
                        <hr>
                        <img src="images/kebobs.jpg" alt="Kebobs" title="WP Kebobs">
                        <h3><?php echo $kebobsObj->getItemName();?></h3>
                        <p><?php echo $kebobsObj->getDescription(); echo $kebobsObj->getPrice();?></p>
                        <hr>
                </aside>
                <div class="main">
                    <h1>Welcome</h1>
                    <img src="images/dining_room.jpg" alt="Dining Room" title="The WP Eatery Dining Room" class="content_pic">
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum</p>
                    <h2>Book your Christmas Party!</h2>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum</p>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum</p>
                </div><!-- End Main -->
            </div><!-- End Content -->
            <?php include 'footer.php';?>
        </div><!-- End Wrapper -->

        <a href="https://validator.w3.org/check?uri=referer"><img
src="https://upload.wikimedia.org/wikipedia/commons/b/bb/W3C_HTML5_certified.png"
alt="Valid XHTML 1.0!" height="31" width="88" /></a>

<a href="http://jigsaw.w3.org/css-validator/check/referer">
<img style="border:0;width:88px;height:31px"
src="http://jigsaw.w3.org/css-validator/images/vcss"
alt="Valid CSS!" />
</a>
    </body>
</html>
