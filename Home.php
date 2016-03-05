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
    <p>List...</p>
</div>

<div id="London" class="tabcontent">
    <h3>London</h3>
    <p>List...</p>
</div>

<div id="Tokyo" class="tabcontent">
    <h3>Tokyo</h3>
    <p>Tokyo is the capital of Japan.</p>
</div>

<div id="London" class="tabcontent">
    <h3>London</h3>
    <p>London is the capital city of England.</p>
</div>

<div id="Paris" class="tabcontent">
    <h3>Paris</h3>
    <p>Paris is the capital of France.</p>
</div>

<div id="Tokyo" class="tabcontent">
    <h3>Tokyo</h3>
    <p>Tokyo is the capital of Japan.</p>
</div>

<div id="London" class="tabcontent">
    <h3>London</h3>
    <p>London is the capital city of England.</p>
</div>

<div id="Paris" class="tabcontent">
    <h3>Paris</h3>
    <p>Paris is the capital of France.</p>
</div>

<div id="Tokyo" class="tabcontent">
    <h3>Tokyo</h3>
    <p>Tokyo is the capital of Japan.</p>
</div>

<div id="London" class="tabcontent">
    <h3>London</h3>
    <p>London is the capital city of England.</p>
</div>

<div id="Paris" class="tabcontent">
    <h3>Paris</h3>
    <p>Paris is the capital of France.</p>
</div>

<div id="Tokyo" class="tabcontent">
    <h3>Tokyo</h3>
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
