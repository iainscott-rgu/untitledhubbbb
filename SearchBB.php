<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
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
        Currently not logged in!
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

<section class="container" id="content2">
    <form action="" method="post">
        <table class="table1">
            <tr><td colspan="2">Search:</td></tr>
            <tr><td class="small">Let's get Started!</td></tr>
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
                 </td>
              <td><a href="searchResultsPage.php"><input id="submit" class="submit" type="submit" value="Submit"  /></a></td>
          </tr>
      </table>
    </form>

</section>

<section class="container" id="foot">

    <p>Copyright. Team D Solutions.</p>

</section>


</body>
</html>