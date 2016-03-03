<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="icon"
          type="image/png"
          href="assets/b&bicon.png">
    <link type="text/css" rel="stylesheet" href="style.css"/>
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
                    <li><a href="SearchBB.php">Search</a></li>
                </ul>
            </nav>
        </div>
</section>

<section class="container" id="content">
    <form action="searchResultsPage.php" method="post">
        <table class="tablesearch">
            <tr><td colspan="4"><h1>Search for a B&B</h1><br>
                <h4>Search across the UK and find a B&B</h4></td></tr>
            <tr><td><label for="location">Pick a location:</label></td></tr>
            <tr><td><select class="inputform" id="location" name="location">

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
                <td colspan="2"><label for="dateday">Check In Date:</label></td>
                <td colspan="2"><label for="datemonth">Check Out Date:</label></td>
                </tr>
            <tr>
                <td><select id="date" class="inputform" name="date">
                        <option value="day">Select Day:</option>
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                        <option value="4">4</option>
                    </select>
                </td>

                <td><select id="month" class="inputform" name="month">
                        <option value="month">Select Month:</option>
                        <option value="1">January</option>
                        <option value="2">February</option>
                        <option value="3">March</option>
                        <option value="4">April</option>
                    </select>
                </td>



                <td><select id="date" class="inputform" name="date">
                        <option value="day">Select Day:</option>
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                        <option value="4">4</option>
                    </select>
                </td>

                <td><select id="month" class="inputform" name="month">
                        <option value="month">Select Month:</option>
                        <option value="1">January</option>
                        <option value="2">February</option>
                        <option value="3">March</option>
                        <option value="4">April</option>
                    </select>
                </td>



            </tr>


           <tr>
               <td colspan="4">

              <a href="searchResultsPage.php"><input id="submit" class="submit" type="submit" value="Search"  /></a></td>
          </tr>
      </table>
    </form>
    <hr width="100%" size="1">
</section>

<section class="container" id="foot">

    <p>Copyright. Team D Solutions.</p>

</section>

</body>
</html>
