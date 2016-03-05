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
        background-color: #666699;
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
        text-decoration: none;
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

</body>
</html>
