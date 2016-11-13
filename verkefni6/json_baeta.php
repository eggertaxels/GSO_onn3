<?php
    $lysing2 = $_POST['myndaheiti2'];
    $mynd2 = $_POST['myndaslod2'];
    //get from file
    $jso = file_get_contents('myndir.json');
    //dceode object from file
    $obj = json_decode($jso);
    //display error
    if (!$obj) trigger_error('JSON FAIL: ' .  json_last_error(), E_USER_ERROR);

    // CREATE SOME NEW DATA TO APPEND TO THE komp ARRAY
    $new = new StdClass;
    $new->title = $lysing2;
    $new->img = $mynd2;

    // INJECT SOME DATA INTO THE OBJECT
    $obj->myndirArray[] = $new;


    // RENDER THE NEW JSON STRING
    //encode back to json for storage
    $final_obj = json_encode($obj);
    file_put_contents('myndir.json', $final_obj);
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
    <br>
    <?php
    //print_r($data);
    ?>
</body>
</html>