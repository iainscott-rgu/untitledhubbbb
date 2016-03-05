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

                <td></td>
                <td><a href="searchResultsPage.php"><p align="right" ><input id="submit" class="submit" type="submit" value="Submit"  /></p></a></td>
            </tr>


        </table></form>

    <div class="right2">

        <table border="1">
            <tr>
                <td class="noBG" colspan="3">
                    <select id="displayText" onchange="javascript:toggle();">
                        <option>2</option>
                        <option>4</option>
                    </select>Items
                </td>
            </tr>
            <thead>
            <tr>
                <th>Dates</th>
                <th>Time</th>
                <th>Person</th>
            </tr>
            </thead>
            <tr>
                <td>12/3</td>
                <td>12:45</td>
                <td>John Doe</td>
            </tr>
            <tr>
                <td>12/4</td>
                <td>12:45</td>
                <td>James Doe</td>
            </tr>
            <tr id="toggleText" style="display: none">
                <td>12/4</td>
                <td>12:45</td>
                <td>Janey Doe</td>
            </tr>
            <tr id="toggleText" style="display: none">
                <td>12/4</td>
                <td>12:45</td>
                <td>Janey Doe</td>
            </tr>
        </table>

        <script language="javascript">
            function toggle() {
                var rows = document.getElementsByName("toggleText");
                for(var i=0; i<rows.length; i++)
                {
                    rows[i].className = (rows[i].className == "hiddenRow") ? "" : "hiddenRow";
                }
            }
        </script>
        ​
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