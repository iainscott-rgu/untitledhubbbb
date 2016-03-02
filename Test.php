<?php
session_start();

?>


    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>Search: theB&Bhub</title>
        <link rel="icon"
              type="image/png"
              href="assets/b&bicon.png">
        <link type="text/css" rel="stylesheet" href="style.css"/>

        <link href='https://fonts.googleapis.com/css?family=Poiret+One' rel='stylesheet' type='text/css'>
        <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,800' rel='stylesheet' type='text/css'>


    </head>







<body>

<main>


<section class = "container" id = "banner2">

    <section class="right">
        <div id="left">
            <img src = "assets/b&blogotransparentcrop.png" id="img">


        </div>
        <div class="rightside">


            <?php

            if($_GET['value']=="logout"){
                session_unset();
            }
            if ($_POST['user'] != null) {
                $_SESSION["user"] = $_POST['user'];
            }
            if ($_SESSION["user"] != null) {
                echo "<p id='loginText'>Currently signed in as: " . $_SESSION["user"];
                echo "    not you?</p><button id='logout()' onclick='logout()'>LOGOUT</button>";
            }else{
                echo "<p id='loginText'>currently not logged in!";
            }


            ?>
            <script>
                function logout() {
                    window.location = "http://iainscott-rgu.azurewebsites.net/home.php?value=logout";
                }
            </script>
        </div>



</section>
    <section class = "container" id = "navigation2">

        <section id="navbar">


                <nav>



                    <ul class="moveright">

                        <!--<li><a href="B&Bregistration.html">Help</a></li>-->
                        <li><a href="B&Bregistration.html">Register</a></li>
                        <!-- <li><a href="B&Bregistration.html">Register</a></li> -->
                        <li><a href="OwnerSignIn.php">Owner's Page</a></li>
                        <li><a href="Home.php">Search</a></li>


                    </ul>

                </nav>






    </section>





    <section class = "container" id = "content2">

3


    </section>








    <section class = "container" id = "foot2">
4

    </section>








</main>
</body>
</html>

<?php
/**
 * Created by PhpStorm.
 * User: Iain
 * Date: 02/03/2016
 * Time: 22:44
 */



