<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="icon"
          type="image/png"
          href="assets/b&bicon.png">
    <link type="text/css" rel="stylesheet" href="style.css"/>
    <link href='https://fonts.googleapis.com/css?family=Roboto' rel='stylesheet' type='text/css'>
    <title>Booking: theB&Bhub</title>
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

<section class="spacer" id="spacer">


</section>

<section class="container" id="featured">
    <div class="centre">

        <p>Enter your room details...</p>
    </div>
</section>

<section class="container" id="content2">

    <form>

        <table class="table3">

            <tr><td class="small"><p>* Required Fields</p></td></tr>

            <tr>

                <td><label for="bbid">B&B ID: *</label></td>
                <td><input type="text" id="bbid" class="inputform" name="bbid" value="Enter your B&B ID" required /></td>


                <td><label for="price">Price: *</label></td>
                <td><input type="text" id="price" class="inputform" name="price" value="Enter price per night" required /></td>

            </tr>
            <tr>
                <td><label for="roomname">Room Name: *</label></td>
                <td><input type="text" id="roomname" class="inputform" name="roomname" value="Enter a name for your room" required /></td>

                <td>
                    <label for="numberofpeople">Nbr. of People: *</label></td>
                <td><input type="text" id="numberofpeople" class="inputform" name="numberofpeople" placeholder=" How many Adults" size="20" maxlength="20" required /></td>

            </tr>
            <tr>

                <td><label for="roomdescription">Room Description: *</label></td>
                <td><input type="text" id="roomdescription" class="inputform" name="roomdescription" value="Enter a room description" required /></td>

                <td>
                    <label for="imageurl">Image URL: *</label></td>
                <td><input type="text" id="imageurl" class="inputform" name="imageurl" placeholder=" Enter image url" size="30" maxlength="50" required /></td>




            </tr>
            <tr>
                <td colspan="4"><p align="right" ><input id="submit" type="submit" value="Submit" class="submit" /></p></td>
            </tr>
        </table></form>

</section>
<section class="spacer" id="spacer">


</section>
<section class="container" id="featured">
    <div class="centre">

        <p>That's you all signed up!</p>
    </div>
</section>


<body>




<main>
    <!--onsubmit="return validateOwner(this);"  javascript method-->
    <div class="">

<?php
/**
 * Created by PhpStorm.
 * User: 9540730
 * Date: 25/02/2016
 * Time: 13:45
 */


//$ownerid= $_POST['ownerid'];   [ownerid] '".$ownerid."',
$title =$_POST['title'];
$firstname= $_POST['firstname'];
$surname= $_POST['surname'];
$email= $_POST['email'];
$password= $_POST['password'];
$password2= $_POST['password2'];
$address= $_POST['address'];
$address2= $_POST['address2'];
$telephone= $_POST['telephone'];



$conn = new PDO ( "sqlsrv:server = tcp:bbsqldb.database.windows.net,1433; Database = SQL_BB", "teamdsqldb", "Sql20022016*");
$conn->setAttribute( PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION );

try {
    $st1 = "INSERT INTO Owner ([title], [firstname], [surname], [email], [address], [password], [telephone]) VALUES ('".$title."', '".$firstname."', '".$surname."', '".$email."', '".$address."', '".$password."', '".$telephone."')";
    $conn->exec($st1);

}catch(PDOException $e)
{
    print"$e";
}



?>

<table class="table1">
<?php
$conn = new PDO ( "sqlsrv:server = tcp:bbsqldb.database.windows.net,1433; Database = SQL_BB", "teamdsqldb", "Sql20022016*");
$conn->setAttribute( PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION );
try{
    $st = $conn-> query("SELECT * FROM [Owner]");
    foreach($st->fetchAll() as $row) {
        $newhtml =
            <<<NEWHTML
            <tr>
                   <td>{$row[firstname]}</td>
                    <td>{$row[surname]}</td>
            </tr>
NEWHTML;

        print($newhtml);
    }
    echo "";
}
catch(PDOException $e)
{print"$e";}
?>
</table>

</main>




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
