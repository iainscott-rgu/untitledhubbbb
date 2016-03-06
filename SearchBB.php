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
        <img src = "assets/bnblogocroporange.png" id="img">
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
                window.location = "http://iainscott-rgu.azurewebsites.net/SearchBB.php?value=logout";
            }
        </script>
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

<section class="container" id="content">
    <form action="searchResultsPage.php" method="post">
        <table class="tablesearch">
            <tr><td colspan="4"><h1>Search for a B&B</h1></td></tr>
            <tr><td colspan="4"><h4>* Search all across the UK for B&B's</h4></td></tr>
            <tr><td colspan="2"><label for="location">Pick a location:</label></td></tr>
            <tr><td colspan="2"><select class="inputform" id="location" name="location">

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

</section>


 <section class="container" id="featured">
<div class="centre">

    Featured bed and breakfast destinations
</div>
 </section>



<main>


<section class="container2" id="spotlight">
    <img src="assets/london.jpg" id="img2">
    <p>London, England</p>
    <p>click to view</p>
    <img src="assets/edinburgh.jpg" id="img2">
    <p>Edinburgh, Scotland</p>
    <p>click to view</p>


</section>

    <section class="container2" id="spotlight2">

        <img src="assets/glasgow.jpg" id="img2">
        <p>Glasgow, Scotland</p>
        <p>click to view</p>
        <img src="assets/Aberdeen.jpg" id="img2">
        <p>Aberdeen, Scotland</p>
        <p>click to view</p>
    </section>

    <section class="container2" id="spotlight3">

        <img src="assets/dundee.jpeg" id="img2">
        <p>Dundee, Scotland</p>
        <p>click to view</p>
        <img src="assets/manchester.jpg" id="img2">
        <p>Manchester, England</p>
        <p>click to view</p>
    </section>


</main>

<section class="container" id="featured">
    <div class="centre">

        Search bed and breackfast's by Region
    </div>
</section>









<section class="Region" id="searchbyregion">





<A NAME="here">



<ul class="tab">
    <li><a href="#here" class="tablinks" onclick="openCity(event, 'East')">East</a></li>
    <li><a href="#here" class="tablinks" onclick="openCity(event, 'London')">London</a></li>
    <li><a href="#here" class="tablinks" onclick="openCity(event, 'North%20East')">North East</a></li>
    <li><a href="#here" class="tablinks" onclick="openCity(event, 'North%20West')">North West</a></li>
    <li><a href="#here" class="tablinks" onclick="openCity(event, 'Northern%20Ireland')">Northern Ireland</a></li>
    <li><a href="#here" class="tablinks" onclick="openCity(event, 'Scotland')">Scotland</a></li>
    <li><a href="#here" class="tablinks" onclick="openCity(event, 'South%20East')">South East</a></li>
    <li><a href="#here" class="tablinks" onclick="openCity(event, 'East%20Midlands')">East Midlands</a></li>
    <li><a href="#here" class="tablinks" onclick="openCity(event, 'South%20West')">South West</a></li>
    <li><a href="#here" class="tablinks" onclick="openCity(event, 'Wales')">Wales</a></li>
    <li><a href="#here" class="tablinks" onclick="openCity(event, 'West%20Midlands')">West Midlands</a></li>
    <li><a href="#here" class="tablinks" onclick="openCity(event, 'Yorkshire')">Yorkshire</a></li>

</ul>

<div id="East" class="tabcontent">
    <h3>East</h3>
    <ul><li><a href='#'>Ampthill&Flitwick</a></li>
        <li><a href='#'>Basildon</a></li>
        <li><a href='#'>Bedford</a></li>
        <li><a href='#'>Benfleet</a></li>
        <li><a href='#'>Berkhamsted</a></li>
        <li><a href='#'>Biggleswade</a></li>
        <li><a href='#'>Billericay</a></li>
        <li><a href='#'>Bishops Stortford</a></li>
        <li><a href='#'>Braintree</a></li>
        <li><a href='#'>Breckland</a></li>
        <li><a href='#'>Brentwood</a></li>
        <li><a href='#'>Broadland District</a></li>
        <li><a href='#'>Bury St Edmunds</a></li>
        <li><a href='#'>Bushey</a></li>
        <li><a href='#'>Cambridge</a></li>
        <li><a href='#'>Canvey Island</a></li>
        <li><a href='#'>Chelmsford</a></li>
        <li><a href='#'>Cheshunt Waltham Cross</a></li>
        <li><a href='#'>Chorleywood</a></li>
        <li><a href='#'>Clacton-on-Sea</a></li>
        <li><a href='#'>Colchester</a></li>
        <li><a href='#'>Debenham - Framlingham</a></li>
        <li><a href='#'>Dengie Peninsula</a></li>
        <li><a href='#'>Dunstable</a></li>
        <li><a href='#'>Epping Forest</a></li>
        <li><a href='#'>Fenland</a></li>
        <li><a href='#'>Great Dunmow</a></li>
        <li><a href='#'>Great Yarmouth</a></li>
        <li><a href='#'>Harlow</a></li>
        <li><a href='#'>Harpenden</a></li>
        <li><a href='#'>Hatfield</a></li>
        <li><a href='#'>Haverhill</a></li>
        <li><a href='#'>Hemel Hempstead</a></li>
        <li><a href='#'>Hemsby</a></li>
        <li><a href='#'>Hertford</a></li>
        <li><a href='#'>Hunstanton and Heacham</a></li>
        <li><a href='#'>Huntingdon</a></li>
        <li><a href='#'>Ipswich</a></li>
        <li><a href='#'>King's Lynn</a></li>
        <li><a href='#'>Leigh on sea UK</a></li>
        <li><a href='#'>Leighton Buzzard</a></li>
        <li><a href='#'>Letchworth</a></li>
        <li><a href='#'>Linton UK</a></li>
        <li><a href='#'>Luton</a></li>
        <li><a href='#'>Newmarket</a></li>
        <li><a href='#'>North Norfolk</a></li>
        <li><a href='#'>Norwich</a></li>
        <li><a href='#'>Peterborough</a></li>
        <li><a href='#'>Potters Bar</a></li>
        <li><a href='#'>Rayleigh</a></li>
        <li><a href='#'>Rickmansworth</a></li>
        <li><a href='#'>Royston</a></li>
        <li><a href='#'>Saffron Walden</a></li>
        <li><a href='#'>Sandy and Potton UK</a></li>
        <li><a href='#'>Sawston</a></li>
        <li><a href='#'>Shefford and Henlow</a></li>
        <li><a href='#'>South Norfolk</a></li>
        <li><a href='#'>Southend-on-Sea</a></li>
        <li><a href='#'>St Albans</a></li>
        <li><a href='#'>St. Neots</a></li>
        <li><a href='#'>Stevenage</a></li>
        <li><a href='#'>Stowmarket</a></li>
        <li><a href='#'>Sudbury & Hadleigh</a></li>
        <li><a href='#'>Thurrock(West) - Grays, South Ockendon & Tilbury</a></li>
        <li><a href='#'>Tring</a></li>
        <li><a href='#'>Waltham Abbey</a></li>
        <li><a href='#'>Watford</a></li>
        <li><a href='#'>Waveney</a></li>
        <li><a href='#'>Welwyn Garden City</a></li>
        <li><a href='#'>Westcliff-on-Sea</a></li>
        <li><a href='#'>Wickford</a></li>
        <li><a href='#'>Wixams Bedfordshire</a></li>
    </ul>

</div>

<div id="London" class="tabcontent">
    <h3>London</h3>
    <p>List...</p>
</div>

<div id="North%20East" class="tabcontent">
    <h3>North East</h3>
    <p>List of towns..</p>
</div>

<div id="North%20West" class="tabcontent">
    <h3>North West</h3>
    <p>List of towns..</p>
</div>

<div id="Northern%20Ireland" class="tabcontent">
    <h3>Northern Ireland</h3>
    <p>List of towns..</p>
</div>

<div id="Scotland" class="tabcontent">
    <h3>Scotland</h3>
    <p>List of towns..</p>
</div>

<div id="South%20East" class="tabcontent">
    <h3>South East</h3>
    <p>List of towns..</p>
</div>

<div id="East%20Midlands" class="tabcontent">
    <h3>East Midlands</h3>
    <p>List of towns..</p>
</div>

<div id="South%20West" class="tabcontent">
    <h3>South West</h3>
    <p>List of towns..</p>
</div>

<div id="Wales" class="tabcontent">
    <h3>Wales</h3>
    <p>List of towns..</p>
</div>

<div id="West%20Midlands" class="tabcontent">
    <h3>West Midlands</h3>
    <p>List of towns..</p>
</div>

<div id="Yorkshire" class="tabcontent">
    <h3>Yorkshire</h3>
    <p>List of towns..</p>
</div>

    <script>
        function openCity(evt, cityName) {
            var i, tabcontent, tablinks;
            tabcontent = document.getElementsByClassName("tabcontent");
            for (i = 0; i < tabcontent.length; i++) {
                tabcontent[i].style.display = "none";
            }
            tablinks = document.getElementsByClassName("tablinks");
            for (i = 0; i < tabcontent.length; i++) {
                tablinks[i].classList.remove("active");
            }
            document.getElementById(cityName).style.display = "block";
            evt.currentTarget.classList.add("active");
        }
    </script>












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
