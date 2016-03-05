<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="icon"
          type="image/png"
          href="assets/b&bicon.png">
    <link type="text/css" rel="stylesheet" href="style.css"/>
    <link href='https://fonts.googleapis.com/css?family=Roboto' rel='stylesheet' type='text/css'>
    <title>Search Results: theB&Bhub</title>
</head>
<body>

<section class="container" id="banner">
    <div class="floatleft">
        <img src = "assets/b&blogotransparentcrop.png" id="img">
    </div>
    <div class="floatright">
    </div>
        </section>


<section class="container" id="navigation">
    <div>
        <nav role="main">
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


    <div class="main">
        <h3 class="pagetitle" >Here are your search results...</h3>

    <?php
    $city = $_POST['location'];
    $conn = new PDO ( "sqlsrv:server = tcp:bbsqldb.database.windows.net,1433; Database = SQL_BB", "teamdsqldb", "Sql20022016*");
    $conn->setAttribute( PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION );
    try{
        $st = $conn-> query("SELECT * FROM [B&B] WHERE [city] = '$city'");


        foreach($st->fetchAll() as $row) {
            $newhtml =
                <<<NEWHTML
                    <div class="table3">
    <p>According to our database, your search of: <strong>{$row[city]}</strong> has returned the following results: </p>
    <p><strong>{$row[city]}</strong></p>
    <p><strong>{$row[bbname]}</strong></p>
    <p><strong>{$row[address]}</strong></p>
    <p><strong>{$row[email]}</strong></p>




    <p><a href="Customerinfo.html"><input type="submit" value="BOOK" /></a></p>



</div>
NEWHTML;
            print($newhtml);
        }
    }
    catch(PDOException $e)
    {print"$e";}
    ?>
</div>



</section>

<section class="container" id="foot">

    <div id="footernav">
        <nav role="sub">
            <ul>
                <li><a href="B&Bregistration.html">Contact</a></li>
                <li><a href="B&Bregistration.html">Register</a></li>
                <li><a href="OwnerSignIn.php">Member Area</a></li>
                <li><a href="SearchBB.php">Search</a></li>
            </ul>
        </nav>
    </div>
    <div id="copyright">
        <hr width="100%" size="1">
        <p>Copyright. Team D Solutions.</p>
    </div>

</section>

</body>
</html>
