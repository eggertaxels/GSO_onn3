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
    <h1>Bæta við csv mynd:</h1>
    <hr>
    <br>
    <form action="csv_baeta.php" method="post">
        <fieldset>
            <p>CSV</p>
            Myndaheiti <input type="text" name="myndaheiti" required><br>
            Slóð á mynd <input type="text" name="myndaslod" required><br>
            <input type="submit">
        </fieldset>  
    </form>
    <br>
    <hr>
    <h1>Bæta við Json mynd:</h1>
    <hr>
    <br>
    <form action="json_baeta.php" method="post">
        <fieldset>
            <p>JSON</p>
            Myndaheiti <input type="text" name="myndaheiti2" required><br>
            Slóð á mynd <input type="text" name="myndaslod2" required><br>
            <input type="submit">
        </fieldset>  
    </form>
    <br>
    <hr>
    <h1>Bæta við SQL mynd:</h1>
    <hr>
    <br>
    <form action="sql_baeta.php" method="post">
        <fieldset>
            <p>SQL</p>
            Myndaheiti <input type="text" name="myndaheiti3" required><br>
            Slóð á mynd <input type="text" name="myndaslod3" required><br>
            <input type="submit">
        </fieldset>  
    </form>
</body>
</html>