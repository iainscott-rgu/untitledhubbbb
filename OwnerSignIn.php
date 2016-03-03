<?php
session_start();
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="icon"
          type="image/png"
          href="assets/b&bicon.png">
    <link type="text/css" rel="stylesheet" href="style.css"/>
    <link href='https://fonts.googleapis.com/css?family=Roboto' rel='stylesheet' type='text/css'>
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>

    <script src="script.js"></script>
    <title>Sign In: theB&Bhub</title>
</head>
<body>

<section class="container" id="banner">
    <div class="floatleft">
        <img src = "assets/b&blogotransparentcrop.png" id="img">
    </div>
    <div class="floatright">

    <?php
    if ($_SESSION["user"] != null) {
        echo "<p id='loginText'>Currently signed in as: " . $_SESSION["user"];
        echo "    not you?</p><button id='logout()' onclick='logout()'>LOGOUT</button>";

        //header("Location: OwnerReviewPage.php"); ||

        showOwnerReviewPage();

    }else{
        echo "<p id='loginText'>currently not logged in";

        showOwnerSignInPage();
    }

    ?>
    <script>
        function logout() {
            window.location = "http://iainscott-rgu.azurewebsites.net/searchbb.php?value=logout";
        }
    </script>


    <?

    function showOwnerSignInPage()
    {

        $htmlOwnerSignInPage =
<<<HTMLPAGE


        </div>
</section>

<section class="container" id="navigation">
        <div>
            <nav>
                <ul>
                    <li><a href="B&Bregistration.html">Contact</a></li>
                    <li><a href="B&Bregistration.html">Register</a></li>
                    <li><a href="OwnerSignIn.php">Member Area</a></li>
                    <li><a href="SearchBB.php">Search</a></li>
                </ul>
            </nav>
        </div>
</section>

<section class="container" id="content2">
   <table class='table1'>
            <tr><td colspan='2'>Owner's Page</td></tr>

            <tr><td><h4>* Required Fields</h4></td></tr>

            <tr><td>
                <label for='email'>Email: *</label></td>
                <td><input type='text' class='inputform' id='email' name='email' placeholder='email' size='30' maxlength='50' required /></td>
            </tr>
            <tr>
                <td><label for='password'>Password: *</label></td>
                <td>    <input type='password' class='inputform' id='password' name='password' placeholder='enter password' required>
                </td>
            </tr>

    <tr><td></td><td><input class="submit" id='submit' type='button' value='Sign In'></td></tr>
    <form class='table1' id='myForm' name = 'myForm' action='OwnerRegistration.php' >
    <tr><td></td><td><input class="submit" id='submit' type = 'submit' value = 'Register'/></td></tr>





    <!-- The result of the search will be rendered inside this div -->
    <tr><td colspan='2'><p id='result' style='color: #ff0006'></p></td></tr>
</table>
            </form>



</section>


<section class="container" id="foot">

    <p>Copyright. Team D Solutions.</p>

</section>

</body>
</html>




HTMLPAGE;

        print($htmlOwnerSignInPage);
    }

    function showOwnerReviewPage()
    {


        $htmlOwnerReviewPage =
<<<HTMLPAGE2
                                <section class="container" id="navigation">
        <div>
            <nav>
                <ul>
                    <li><a href="B&Bregistration.html">Contact</a></li>
                    <li><a href="B&Bregistration.html">Register</a></li>
                    <li><a href="OwnerSignIn.php">Member Area</a></li>
                    <li><a href="SearchBB.php">Search</a></li>
                </ul>
            </nav>
        </div>
</section>
<section class="container" id="content2">


   <table class='table1'>
            <tr><td colspan='2'>Owner's Page</td></tr>



    <tr><td>You are on the owner's review page!</td></tr>





    <!-- The result of the search will be rendered inside this div -->
    <tr><td colspan='2'><p id='result' style='color: #ff0006'></p></td></tr>
</table>
            </form>



</section>

<section class="container" id="foot">

    <p>Copyright. Team D Solutions.</p>

</section>

</body>
</html>







HTMLPAGE2;

        print($htmlOwnerReviewPage);


    }



    ?>


