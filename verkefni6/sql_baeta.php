<?php
    include "sql/dbcon.php";
    $lysing3 = $_POST['myndaheiti3'];
    $mynd3 = $_POST['myndaslod3'];
    if(!empty($lysing3) && !empty($mynd3)) 
    {
        $sql = 'INSERT INTO images(imageName, imagePath)VALUES(:lysing,:mynd)'; 

        $q = $pdo->prepare($sql);

        try{
            $q->bindValue(':lysing',$lysing3);
            $q->bindValue('mynd',$mynd3);

            $q->execute();  
        }
        //
        catch (PDOException $ex){
            echo 'Það tókst ekki að skrifa í gagnagrunn: '.$ex->getMessage();
        }

    }
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
    <h1>Þú hefur bætti við SQL mynd</h1>
    <h1><a href="index.php">Fara aftur heim</a></h1>
    <br>
</body>
</html>