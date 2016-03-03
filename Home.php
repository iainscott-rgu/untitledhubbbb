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
    <link href='https://fonts.googleapis.com/css?family=Roboto' rel='stylesheet' type='text/css'>


</head>
<body>
<section id="container">


<header>
    <section class="right">
    <div class="left">
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









    <section class="right3">
        <div class="nav">

            <nav>



                <ul class="moveright">

                    <!--<li><a href="B&Bregistration.html">Help</a></li>-->
                    <li><a href="B&Bregistration.html">Register</a></li>
                    <!-- <li><a href="B&Bregistration.html">Register</a></li> -->
                    <li><a href="OwnerSignIn.php">Owner's Page</a></li>
                    <li><a href="Home.php">Search</a></li>


                </ul>

            </nav>




        </div>


    </section>










</header>




<main>
    <form action="searchResultsPage.php" method="post">

       <table class="table1">
            <tr><td colspan="2">Search:</td></tr>
            <tr><td class="small">Let's get Started!</td></tr>

            <tr>
                <td>
                    <label for="location">Pick a location:</label></td>
                <td><select class="inputform" id="location" name="location">


                        <?php
                        $conn = new PDO ( "sqlsrv:server = tcp:bbsqldb.database.windows.net,1433; Database = SQL_BB", "teamdsqldb", "Sql20022016*");
                        $conn->setAttribute( PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION );
                        try{
                            $st = $conn-> query("SELECT DISTINCT [city] FROM [B&B]");
                            foreach($st->fetchAll() as $row) {
                                $newhtml =
                                    <<<NEWHTML
                                    <option value="{$row[city]}">{$row[city]}</option>
NEWHTML;
                                print($newhtml);
                            }
                        }
                        catch(PDOException $e)
                        {print"$e";}
                        ?>





                    </select>
                </td>
            </tr>

            <tr>
                <td>
                    <label for="date">Pick a date:</label></td>
                <td><select class="inputform" name="date">
                        <option value="">Select a date:</option>
                        <option value="01/04/2016">01/04/2016</option>
                        <option value="02/04/2016">02/04/2016</option>
                        <option value="03/04/2016">03/04/2016</option>
                        <option value="04/04/2016">04/04/2016</option>
                    </select>
                </td>
            </tr>
            <tr><td>
                    <label for="duration">Number of Days:</label></td>
                <td><select class="inputform" name="numberofdays">
                        <option value="">Select Number of Days:</option>
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                        <option value="4">4</option>
                    </select>
                </td>
            </tr>

            <tr><td>
                    <label for="duration">Number of Adults:</label></td>
                <td><select class="inputform" name="numberofadults">
                        <option value="">Select Number of Adults:</option>
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                        <option value="4">4</option>
                    </select>
                </td>
            </tr>

            <tr><td>
                    <label for="duration">Number of Children:</label></td>
                <td><select class="inputform" name="numberofchildren">
                        <option value="">Select Number of Children:</option>
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                        <option value="4">4</option>
                    </select>
                </td>
            </tr>
            <tr>

                <td></td>
                <td><a href="searchResultsPage.php"><p align="right" ><input type="submit" value="Submit"  /></p></a></td>
            </tr>


        </table></form>

    <div class="right2">


        <table class="table2">
            <tr><td colspan="2"><p><strong>Example B&B Spotlight</strong></p></td></tr>
            <tr class="tr2"><td class="t2"><p><img src = "assets/bnbthumb.jpg" id="img2" > Example Spotlight no. 1</p></td></tr>
            <tr class="tr2"><td class="t2"><p><img src = "assets/bnbthumb.jpg" id="img2" > Example Spotlight no. 2</p></td></tr>
            <tr class="tr2"><td class="t2"><p><img src = "assets/bnbthumb.jpg" id="img2" > Example Spotlight no. 3</p></td></tr>
            <tr class="tr2"><td class="t2"><p><img src = "assets/bnbthumb.jpg" id="img2" > Example Spotlight no. 4</p></td></tr>







        </table>
    </div>



    <hr width="100%" align="left" size="1" color="#2f4f4f">

</main>
<div class="foot">
    <footer>

        <p>Copyright. Team D Solutions.</p>
    </footer></div>


</section>

</body>

</html>