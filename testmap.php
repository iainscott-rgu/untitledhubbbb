<html>
<head>




    <?php

    $conn = new PDO ( "sqlsrv:server = tcp:bbsqldb.database.windows.net,1433; Database = SQL_BB", "teamdsqldb", "Sql20022016*");
    $conn->setAttribute( PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION );
    try{
    $st = $conn-> query("SELECT * FROM [B&B] WHERE [city] = 'Aberdeen'");


    foreach($st->fetchAll() as $row)




    $maplocation = array();
    $maplocation [] = array(
        'lat' => '$row[latitude]',
        'lng' => '$row[longitude]',

    );
    $maplocation [] = array(
        'lat' => '$row[latitude]',
        'lng' => '$row[longitude]',

    );

    $doc = new DOMDocument();
    $doc->formatOutput = true;

    $r = $doc->createElement( "maplocation" );
    $doc->appendChild( $r );

    foreach( $maplocation as $maplocation )
    {
        $b = $doc->createElement( "location" );

        $lat = $doc->createElement( "lat" );
        $lat->appendChild(
            $doc->createTextNode( $location['lat'] )
        );
        $b->appendChild( $lat );

        $lng = $doc->createElement( "lng" );
        $lng->appendChild(
            $doc->createTextNode( $location['lng'] )
        );
        $b->appendChild( $lng );

        $r->appendChild( $b );
    }

    echo $doc->saveXML();

    ?>












</head>

</body>

</html>