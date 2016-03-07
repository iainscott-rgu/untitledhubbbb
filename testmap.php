<html>
<head>

    <?php

    function parseToXML($htmlStr)
    {
        $xmlStr=str_replace('<','&lt;',$htmlStr);
        $xmlStr=str_replace('>','&gt;',$xmlStr);
        $xmlStr=str_replace('"','&quot;',$xmlStr);
        $xmlStr=str_replace("'",'&#39;',$xmlStr);
        $xmlStr=str_replace("&",'&amp;',$xmlStr);
        return $xmlStr;
    }

    $conn = new PDO ( "sqlsrv:server = tcp:bbsqldb.database.windows.net,1433; Database = SQL_BB", "teamdsqldb", "Sql20022016*");
    $conn->setAttribute( PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION );

    $st = $conn->query("SELECT [latitude], [longitude] FROM [B&B] WHERE [city] = 'Aberdeen'");


    echo '<markers>';

    foreach ($st->fetchAll() as $row) {

        echo '<marker ';
        echo 'name="' . parseToXML($row['bbname']) . '" ';
        echo 'address="' . parseToXML($row['address']) . '" ';
        echo 'lat="' . $row['latitude'] . '" ';
        echo 'lng="' . $row['longitude'] . '" ';
        echo '/>';
    }


    echo '</markers>';



    ?>

</head>
<body>
</body>

</html>