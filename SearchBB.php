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
    <p>To search all B&B's in the East Region click here....</p>

</div>

<div id="London" class="tabcontent">
    <h3>London</h3>
    <p>To search all B&B's in the London Region click here....</p>
</div>

<div id="North%20East" class="tabcontent">
    <h3>North East</h3>
    <p>To search all B&B's in the North East Region click here....</p>
</div>

<div id="North%20West" class="tabcontent">
    <h3>North West</h3>
    <p>To search all B&B's in the North West Region click here....</p>
</div>

<div id="Northern%20Ireland" class="tabcontent">
    <h3>Northern Ireland</h3>
    <p>To search all B&B's in the NI Region click here....</p>
</div>

<div id="Scotland" class="tabcontent">
    <h3>Scotland</h3>
    <p>To search all B&B's in Scotland click here....</p>
</div>

<div id="South%20East" class="tabcontent">
    <h3>South East</h3>
    <p>To search all B&B's in the South East Region click here....</p>
</div>

<div id="East%20Midlands" class="tabcontent">
    <h3>East Midlands</h3>
    <p>To search all B&B's in the East Midlands Region click here....</p>
</div>

<div id="South%20West" class="tabcontent">
    <h3>South West</h3>
    <p>To search all B&B's in the South West Region click here....</p>
</div>

<div id="Wales" class="tabcontent">
    <h3>Wales</h3>
    <p>To search all B&B's in Wales click here....</p>
</div>

<div id="West%20Midlands" class="tabcontent">
    <h3>West Midlands</h3>
    <p>To search all B&B's in the West Midlands Region click here....</p>
</div>

<div id="Yorkshire" class="tabcontent">
    <h3>Yorkshire</h3>
    <p>To search all B&B's in the Yorkshire Region click here....</p>
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
