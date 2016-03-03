<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="icon"
          type="image/png"
          href="assets/b&bicon.png">
    <link type="text/css" rel="stylesheet" href="style.css"/>
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,800' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Roboto' rel='stylesheet' type='text/css'>
    <title>Search: theB&Bhub</title>
</head>
<body>

<section class="container" id="banner">
    <div class="floatleft">
        <img src = "assets/b&blogotransparentcrop.png" id="img">
    </div>
    <div class="floatright">

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

<section class="container" id="navigation">
        <div>
            <nav>
                <ul>
                    <li><a href="B&Bregistration.html">Contact</a></li>
                    <li><a href="B&Bregistration.html">Register</a></li>
                    <li><a href="OwnerSignIn.php">Member Area</a></li>
                    <li><a href="Home.php">Search</a></li>
                </ul>
            </nav>
        </div>
</section>

<section class="container" id="content">
    <form action="searchResultsPage.php" method="post">
        <table class="table1">
            <tr><td colspan="2">Search:</td></tr>
            <tr><td class="smallfont">Let's get Started!</td></tr>
            <tr><td><label for="location">Pick a location:</label></td><td><select class="inputform" id="location" name="location">

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
           <tr>
               <td colspan="4">

              <a href="searchResultsPage.php"><input id="submit" class="submit" type="submit" value="Submit"  /></a></td>
          </tr>
      </table>
    </form>

</section>

<section class="container" id="foot">

    <p>Copyright. Team D Solutions.</p>

</section>

</body>
</html>