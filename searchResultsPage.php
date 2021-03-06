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






    <script type="text/javascript">
        //<![CDATA[

        var tabLinks = new Array();
        var contentDivs = new Array();

        function init() {

            // Grab the tab links and content divs from the page
            var tabListItems = document.getElementById('tabs').childNodes;
            for ( var i = 0; i < tabListItems.length; i++ ) {
                if ( tabListItems[i].nodeName == "LI" ) {
                    var tabLink = getFirstChildWithTagName( tabListItems[i], 'A' );
                    var id = getHash( tabLink.getAttribute('href') );
                    tabLinks[id] = tabLink;
                    contentDivs[id] = document.getElementById( id );
                }
            }

            // Assign onclick events to the tab links, and
            // highlight the first tab
            var i = 0;

            for ( var id in tabLinks ) {
                tabLinks[id].onclick = showTab;
                tabLinks[id].onfocus = function() { this.blur() };
                if ( i == 0 ) tabLinks[id].className = 'selected';
                i++;
            }

            // Hide all content divs except the first
            var i = 0;

            for ( var id in contentDivs ) {
                if ( i != 0 ) contentDivs[id].className = 'tabContent hide';
                i++;
            }
        }

        function showTab() {
            var selectedId = getHash( this.getAttribute('href') );

            // Highlight the selected tab, and dim all others.
            // Also show the selected content div, and hide all others.
            for ( var id in contentDivs ) {
                if ( id == selectedId ) {
                    tabLinks[id].className = 'selected';
                    contentDivs[id].className = 'tabContent';
                } else {
                    tabLinks[id].className = '';
                    contentDivs[id].className = 'tabContent hide';
                }
            }

            // Stop the browser following the link
            return false;
        }

        function getFirstChildWithTagName( element, tagName ) {
            for ( var i = 0; i < element.childNodes.length; i++ ) {
                if ( element.childNodes[i].nodeName == tagName ) return element.childNodes[i];
            }
        }

        function getHash( url ) {
            var hashPos = url.lastIndexOf ( '#' );
            return url.substring( hashPos + 1 );
        }

        //]]>
    </script>












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
                <li><a href="help.php#helpsection">Help</a></li>
                <li><a href="help.php#contactsection">Contact</a></li>
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

<p>According to our database, your search has returned the following results: </p>
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


<a href="Customerinfo.html"><table cellpadding="15">
<tr>
<td><strong><img src="{$row[imageurl]}" id="img3"></strong></td>
<td valign="top">




<body onload="init()">


    <ul id="tabs">
        <li><a href="#details">B&B Details</a></li>
        <li><a href="#description">B&B Description</a></li>
        <li><a href="#address">B&B Address</a></li>
    </ul>

    <div class="tabContent" id="details">
<div>

<p>B&B Name: <strong>{$row[bbname]}</strong></p>
<p>Location: <strong>{$row[city]}</strong>&nbsp;&nbsp;
Postcode: <strong>{$row[postcode]}</strong></p>
<p>Check-in: <strong>{$row[checkin]}</strong>&nbsp;&nbsp;
Check-out: <strong>{$row[checkout]}</strong></p>
<p>Pets allowed: <strong>{$row[pets]}</strong></p>

        </div>
    </div>

    <div class="tabContent" id="description">

        <div>
            B&B Description: <strong>{$row[bbdescription]}</strong>

        </div>
    </div>

    <div class="tabContent" id="address">

        <div>


            <p>Address: <strong>{$row[address]}, {$row[addressline2]}</strong></p>
            <p>Postcode: <strong>{$row[postcode]}</strong></p>
            <p>Location: <strong>{$row[city]}</strong></P>
            <p>Region: <strong>{$row[region]}</strong></P>









        </div>
    </div>



</td>



</tr>
</table></a>



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


<section class="spacer" id="spacer">


</section>

<section class="container" id="foot">

    <div id="footernav">
        <nav role="sub">
            <ul>
                <li><a href="SearchBB.php">Search</a></li>
                <li><a href="OwnerSignIn.php">Member Area</a></li>
                <li><a href="B&Bregistration.html">Register</a></li>
                <li><a href="help.php#contactsection">Contact</a></li>
                <li><a href="help.php#helpsection">Help</a></li>
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
