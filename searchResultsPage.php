<!DOCTYPE html>
<html lang="en" xmlns="http://www.w3.org/1999/html">
<head>
    <meta charset="UTF-8">
    <link rel="icon"
          type="image/png"
          href="assets/b&bicon.png">
    <link type="text/css" rel="stylesheet" href="style.css"/>
    <link href='https://fonts.googleapis.com/css?family=Roboto' rel='stylesheet' type='text/css'>
    <script src="https://maps.googleapis.com/maps/api/js"></script>
    <title>Search Results: theB&Bhub</title>
</head>
<body>

<section class="container" id="banner">
    <div class="floatleft">
        <img src = "assets/bnblogocroporange.png" id="img">
    </div>
    <div class="floatright">
    </div>
        </section>


<section class="container" id="navigation2">
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



<section class="googlemap" id="mapapi">



    <div id="map" style="width:400px;height:400px;background:snow"></div>



    <script>
        var mapCanvas = document.getElementById("map");
        var mapOptions = {
            center: new google.maps.LatLng(57.2, -2.2), zoom: 10
        }
        var map = new google.maps.Map(mapCanvas, mapOptions);
    </script>
</section>

<section class="spacer" id="spacer">


</section>

<section class="container" id="featured">
    <div class="centre">
        <p>Here are your search results...</p>

</div>
    </section>

<p>According to our database, your search of: <strong>{$row[city]}</strong> has returned the following results: </p>
<section class="container" id="content2">


    <div class="main">


    <?php
    $city = $_POST['location'];
    $conn = new PDO ( "sqlsrv:server = tcp:bbsqldb.database.windows.net,1433; Database = SQL_BB", "teamdsqldb", "Sql20022016*");
    $conn->setAttribute( PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION );

    try{
        $st = $conn-> query("SELECT * FROM [B&B] WHERE [city] = '$city'");


        foreach($st->fetchAll() as $row) {
            $newhtml =
                <<<NEWHTML
                    <div class="table5">


<table>
<tr>
<td><strong><img src="{$row[imageurl]}" id="img3"></strong></td>

<td>
<table>

<tr valign="top" margin="20">
<td><strong>B&B Name: {$row[bbname]}</strong></td>
</tr>
<tr>
<td><strong>B&B Description: {$row[bbdescription]}</strong></td>
</tr>
<tr>
<td><strong>Address: {$row[address]}</strong></td>
</tr>
<tr>
<td><strong>Location: {$row[city]}</strong></td>

<td><strong>Postcode: {$row[postcode]}</strong></td>
</tr>
<tr>

<td><strong>Check-in: {$row[checkin]}</strong></td>
<td><strong>Check-out: {$row[checkout]}</strong></td>
</tr>
<tr>
<td><strong>Pets allowed: {$row[pets]}</strong></td>
</tr>
</h6>
</table>
</td>
</tr>
</table>





    <p><a href="Customerinfo.html"><input type="submit" value="BOOK" /></a></p>



</div>

 <section class="spacer" id="spacer">


    </section>


NEWHTML;
            print($newhtml);
        }
    }
    catch(PDOException $e)
    {print"$e";}
    ?>

</div>
    </section>


<section class="spacer" id="spacer">


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
