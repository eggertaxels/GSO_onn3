<?php
    $lysing = $_POST['myndaheiti'];
    $mynd = $_POST['myndaslod'];
    $csv = [
        [
            $lysing,
            $mynd,
        ]
    ];
    $file = fopen('myndir.csv', 'a+');

    foreach ($csv as $row) {
        fputcsv($file, $row);
    }

    fclose($file);
?>
<!DOCTYPE html>
<html>
<head>
	<title>Verkefni 6</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="verkefni6.css">
    <link rel="stylesheet" href="normalize.css">
</head>
<body>
    <header>
        <ul class="menu">
            <a class="valin" href="index.php"><li>Myndir</li></a>
            <a href="baeta.php"><li>Bæta við Mynd</li></a>
        </ul>
    </header>
    <h1>Þú hefur bætti við mynd</h1>
    <h1><a href="index.php">Fara aftur heim</a></h1>
</body>
</html>