<!DOCTYPE html>
<html>
<style>
    body {font-family: "Lato", sans-serif;}

    ul.tab {
        list-style-type: none;
        margin: 0;
        padding: 0;
        overflow: hidden;
        border: 1px solid #ccc;
        background-color: #f1f1f1;
    }

    /* Float the list items side by side */
    ul.tab li {float: left;}

    /* Style the links inside the list items */
    ul.tab li a {
        display: inline-block;
        color: black;
        text-align: center;
        padding: 12px 14px;
        text-decoration: none;
        transition: 0.3s;
        font-size: 12px;
    }

    /* Change background color of links on hover */
    ul.tab li a:hover {
        background-color: #ddd;
    }

    /* Create an active/current tablink class */
    ul.tab li a:focus, .active {
        background-color: #ccc;
    }

    /* Style the tab content */
    .tabcontent {
        display: none;
        padding: 6px 12px;
        border: 1px solid #ccc;
        border-top: none;
    }
</style>
<body>

<p>Click on the links inside the tabbed menu:</p>

<ul class="tab">
    <li><a href="#" class="tablinks" onclick="openCity(event, 'East')">East</a></li>
    <li><a href="#" class="tablinks" onclick="openCity(event, 'London')">London</a></li>
    <li><a href="#" class="tablinks" onclick="openCity(event, 'North%20East')">North East</a></li>
    <li><a href="#" class="tablinks" onclick="openCity(event, 'North%20West')">North West</a></li>
    <li><a href="#" class="tablinks" onclick="openCity(event, 'Northern%20Ireland')">Northern Ireland</a></li>
    <li><a href="#" class="tablinks" onclick="openCity(event, 'Scotland')">Scotland</a></li>
    <li><a href="#" class="tablinks" onclick="openCity(event, 'South%20East')">South East</a></li>
    <li><a href="#" class="tablinks" onclick="openCity(event, 'East%20Midlands')">East Midlands</a></li>
    <li><a href="#" class="tablinks" onclick="openCity(event, 'South%20West')">South West</a></li>
    <li><a href="#" class="tablinks" onclick="openCity(event, 'Wales')">Wales</a></li>
    <li><a href="#" class="tablinks" onclick="openCity(event, 'West%20Midlands')">West Midlands</a></li>
    <li><a href="#" class="tablinks" onclick="openCity(event, 'Yorkshire')">Yorkshire</a></li>

</ul>

<div id="East" class="tabcontent">
    <h3>East</h3>
    <ul><li><a href="#">Ampthill&Flitwick</a></li>
        <li><a href='http://groups.freecycle.org/BasildonUK'>Basildon</a></li>
        <li><a href='http://groups.freecycle.org/freecyclebedford'>Bedford</a></li>
        <li><a href='http://groups.freecycle.org/BenfleetUK'>Benfleet</a></li>
        <li><a href='http://groups.freecycle.org/Berkofreecycle'>Berkhamsted</a></li>  <li><a href='http://groups.freecycle.org/Biggleswade'>Biggleswade</a></li>  <li><a href='http://groups.freecycle.org/BillericayUK'>Billericay</a></li>  <li><a href='http://groups.freecycle.org/BishopsStortfordUK'>Bishops Stortford</a></li>  <li><a href='http://groups.freecycle.org/BraintreeUK'>Braintree</a></li>  <li><a href='http://groups.freecycle.org/freecycleBreckland'>Breckland</a></li>  <li><a href='http://groups.freecycle.org/BrentwoodUK'>Brentwood</a></li>  <li><a href='http://groups.freecycle.org/BroadlandFreecycle'>Broadland District</a></li>  <li><a href='http://groups.freecycle.org/BuryStEdmundsUK'>Bury St Edmunds</a></li>  <li><a href='http://groups.freecycle.org/BusheyUK'>Bushey</a></li>  <li><a href='http://groups.freecycle.org/cambridgefreecycle'>Cambridge</a></li>  <li><a href='http://groups.freecycle.org/CanveyIslandUK'>Canvey Island</a></li>  <li><a href='http://groups.freecycle.org/ChelmsfordFreecycleUK'>Chelmsford</a></li>  <li><a href='http://groups.freecycle.org/CheshuntWalthamCrossUK'>Cheshunt Waltham Cross</a></li>  <li><a href='http://groups.freecycle.org/ChorleywoodUK'>Chorleywood</a></li>  <li><a href='http://groups.freecycle.org/Clacton-on-SeaUK'>Clacton-on-Sea</a></li>  <li><a href='http://groups.freecycle.org/ColchesterUK'>Colchester</a></li>  <li><a href='http://groups.freecycle.org/Debenham-Framlingham'>Debenham - Framlingham</a></li>  <li><a href='http://groups.freecycle.org/DengiePeninsulaUK'>Dengie Peninsula</a></li>  <li><a href='http://groups.freecycle.org/FreecycleDunstable'>Dunstable</a></li>  <li><a href='http://groups.freecycle.org/eppingforestfreecycle'>Epping Forest</a></li>  <li><a href='http://groups.freecycle.org/fenlandfreecycle'>Fenland</a></li>  <li><a href='http://groups.freecycle.org/greatdunmow'>Great Dunmow</a></li>  <li><a href='http://groups.freecycle.org/greatyarmouthfreecycle'>Great Yarmouth</a></li>  <li><a href='http://groups.freecycle.org/HarlowUK'>Harlow</a></li>  <li><a href='http://groups.freecycle.org/HarpendenUK'>Harpenden</a></li>  <li><a href='http://groups.freecycle.org/HatfieldHerts'>Hatfield</a></li>  <li><a href='http://groups.freecycle.org/Haverhill'>Haverhill</a></li>  <li><a href='http://groups.freecycle.org/Hemel_UK'>Hemel Hempstead</a></li>  <li><a href='http://groups.freecycle.org/hemsby'>Hemsby</a></li>  <li><a href='http://groups.freecycle.org/hertford_freecycle'>Hertford</a></li>  <li><a href='http://groups.freecycle.org/HunstantonHeachamUK'>Hunstanton and Heacham</a></li>  <li><a href='http://groups.freecycle.org/freecycle_hunts'>Huntingdon</a></li>  <li><a href='http://groups.freecycle.org/Ipswich_Freecycle'>Ipswich</a></li>  <li><a href='http://groups.freecycle.org/freecyclekingslynn'>King's Lynn</a></li>  <li><a href='http://groups.freecycle.org/leighonseaUK'>Leigh on sea UK</a></li>  <li><a href='http://groups.freecycle.org/freecycleleighton-buzzard'>Leighton Buzzard</a></li>  <li><a href='http://groups.freecycle.org/letchworth'>Letchworth</a></li>  <li><a href='http://groups.freecycle.org/LintonUK'>Linton UK</a></li>  <li><a href='http://groups.freecycle.org/FreecycleLuton'>Luton</a></li>  <li><a href='http://groups.freecycle.org/NewmarketUK'>Newmarket</a></li>  <li><a href='http://groups.freecycle.org/FreecycleNorthNorfolk'>North Norfolk</a></li>  <li><a href='http://groups.freecycle.org/norwichukfreecycle'>Norwich</a></li>  <li><a href='http://groups.freecycle.org/freecyclepboro'>Peterborough</a></li>  <li><a href='http://groups.freecycle.org/PottersBar'>Potters Bar</a></li>  <li><a href='http://groups.freecycle.org/rayleighfreecycle'>Rayleigh</a></li>  <li><a href='http://groups.freecycle.org/freecycle_rickmansworth'>Rickmansworth</a></li>  <li><a href='http://groups.freecycle.org/RoystonUK'>Royston</a></li>  <li><a href='http://groups.freecycle.org/Freecycle_SaffronWalden'>Saffron Walden</a></li>  <li><a href='http://groups.freecycle.org/sandypottonUK'>Sandy and Potton UK</a></li>  <li><a href='http://groups.freecycle.org/Sawston'>Sawston</a></li>  <li><a href='http://groups.freecycle.org/SheffordandHenlow'>Shefford and Henlow</a></li>  <li><a href='http://groups.freecycle.org/southnorfolkfreecycle'>South Norfolk</a></li>  <li><a href='http://groups.freecycle.org/SouthendUK'>Southend-on-Sea</a></li>  <li><a href='http://groups.freecycle.org/StAlbansfreecycle'>St Albans</a></li>  <li><a href='http://groups.freecycle.org/stneotsfreecycle'>St. Neots</a></li>  <li><a href='http://groups.freecycle.org/stevenagefreecycle'>Stevenage</a></li>  <li><a href='http://groups.freecycle.org/stowmarket_freecycle'>Stowmarket</a></li>  <li><a href='http://groups.freecycle.org/SudburyUK'>Sudbury & Hadleigh</a></li>  <li><a href='http://groups.freecycle.org/Thurrock_West_Freecycle'>Thurrock(West) - Grays, South Ockendon & Tilbury</a></li>  <li><a href='http://groups.freecycle.org/Tring'>Tring</a></li>  <li><a href='http://groups.freecycle.org/WalthamAbbey'>Waltham Abbey</a></li>  <li><a href='http://groups.freecycle.org/freecycle_watford'>Watford</a></li>  <li><a href='http://groups.freecycle.org/waveneyfreecycle'>Waveney</a></li>  <li><a href='http://groups.freecycle.org/wgcfreecycle'>Welwyn Garden City</a></li>  <li><a href='http://groups.freecycle.org/wosfreecycle'>Westcliff-on-Sea</a></li>  <li><a href='http://groups.freecycle.org/WickfordUK'>Wickford</a></li>  <li><a href='http://groups.freecycle.org/wixamsUK'>Wixams Bedfordshire UK</a></li>  </ul>
    <p></p>
</div>

<div id="London" class="tabcontent">
    <h3>London</h3>
    <p>List...</p>
</div>

<div id="North%20East" class="tabcontent">
    <h3>North East</h3>
    <p>Tokyo is the capital of Japan.</p>
</div>

<div id="North%20West" class="tabcontent">
    <h3>North West</h3>
    <p>London is the capital city of England.</p>
</div>

<div id="Northern%20Ireland" class="tabcontent">
    <h3>Northern Ireland</h3>
    <p>Paris is the capital of France.</p>
</div>

<div id="Scotland" class="tabcontent">
    <h3>Scotland</h3>
    <p>Tokyo is the capital of Japan.</p>
</div>

<div id="South%20East" class="tabcontent">
    <h3>South East</h3>
    <p>London is the capital city of England.</p>
</div>

<div id="East%20Midlands" class="tabcontent">
    <h3>East Midlands</h3>
    <p>Paris is the capital of France.</p>
</div>

<div id="South%20West" class="tabcontent">
    <h3>South West</h3>
    <p>Tokyo is the capital of Japan.</p>
</div>

<div id="Wales" class="tabcontent">
    <h3>Wales</h3>
    <p>London is the capital city of England.</p>
</div>

<div id="West%20Midlands" class="tabcontent">
    <h3>West Midlands</h3>
    <p>Paris is the capital of France.</p>
</div>

<div id="Yorkshire" class="tabcontent">
    <h3>Yorkshire</h3>
    <p>Tokyo is the capital of Japan.</p>
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

</body>
</html>
