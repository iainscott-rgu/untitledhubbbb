<html>
<head>



    <?php
    $city = $_POST['location'];
    $conn = new PDO ( "sqlsrv:server = tcp:bbsqldb.database.windows.net,1433; Database = SQL_BB", "teamdsqldb", "Sql20022016*");
    $conn->setAttribute( PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION );
    try{
        $st = $conn-> query("SELECT * FROM [B&B] WHERE [city] = '$city'");


        foreach($st->fetchAll() as $row) {
            $newhtml =
                <<<NEWHTML
                    <div class="table4">
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



    <?php






    $employees = array();
    $employees [] = array(
        'name' => 'Albert',
        'age' => '34',
        'salary' => "$10000"
    );
    $employees [] = array(
        'name' => 'Claud',
        'age' => '20',
        'salary' => "$2000"
    );

    $doc = new DOMDocument();
    $doc->formatOutput = true;

    $r = $doc->createElement( "employees" );
    $doc->appendChild( $r );

    foreach( $employees as $employee )
    {
        $b = $doc->createElement( "employee" );

        $name = $doc->createElement( "name" );
        $name->appendChild(
            $doc->createTextNode( $employee['name'] )
        );
        $b->appendChild( $name );

        $age = $doc->createElement( "age" );
        $age->appendChild(
            $doc->createTextNode( $employee['age'] )
        );
        $b->appendChild( $age );

        $salary = $doc->createElement( "salary" );
        $salary->appendChild(
            $doc->createTextNode( $employee['salary'] )
        );
        $b->appendChild( $salary );

        $r->appendChild( $b );
    }

    echo $doc->saveXML();

    ?>












</head>

</body>

</html>