<?php
//require_once('connection.php');
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
    <?php
       include "sql/dbcon.php";
	   include "sql/query.php";
    ?>
    <header>
        <ul class="menu">
            <a class="valin" href="index.php"><li>Myndir</li></a>
            <a href="baeta.php"><li>Bæta við Mynd</li></a>
        </ul>
    </header>
    <h1>Byrjum á csv myndum:</h1>
    <hr>
    <br>
<?php 
/* how to extract the values from a CSV file into a multidimensional associative array using fopen() and fgetcsv().*/

/* CSV skráin: 
			There should be no space after the comma. If you add a space, it’s considered to be the first character of a data field. 
			Each line in a CSV file must have the same number of items. 
*/
$file = fopen('myndir.csv', 'r');  // r fyrir lesréttindi

// get the first row from the CSV file to use as titles
// fgetcsv() gets the current line from a CSV file and converts it into an array
// 
$titles = fgetcsv($file);

// initialize an empty array for the values that will be extracted from the CSV data
$users = [];

// fgetcsv() moves to the next line

/*
The conditional statement uses the count() method to find out how many elements are in
the array. If there’s only one, and the value of the first element is null, the continue keyword
returns to the top of the loop without executing the next line.
*/
while (($data = fgetcsv($file)) !== false) {
    
    // fgetcsv() returns an array with a single null value if it encounters a blank line
    // annars gætum við fengið meldingu í array_combine() ef null element.
    if (count($data) == 1 && is_null($data[0])) {
        continue;
    }
    // array_combine() creates an associative array using
    // the first array as array keys and the second as values
    // $users[] er multidimensional array, sem bætir við einu fylki í einu í while lykkjunni.
    $users[] = array_combine($titles, $data);
}
fclose($file);

for ($x = 0; $x <= count($users)-1; $x++) {
    echo "<h1>{$users[$x]['title']}</h1>";
    echo "<img src={$users[$x]['img']}>";
    echo "<br>";
}
    echo "<br>";
    echo "<hr>";
?>
    <h1>Förum núna yfir í Json:</h1>
    <hr>
    <br>
    <?php 
    $string_json = file_get_contents('myndir.json');
    $json_myndir = json_decode($string_json, true);
    //print_r($json_myndir['myndirArray'][1]['img'])
    for ($x = 0; $x <= count($json_myndir['myndirArray'])-1; $x++) {
        echo "<h1>{$json_myndir['myndirArray'][$x]['title']}</h1>";
        echo "<img src={$json_myndir['myndirArray'][$x]['img']}>";
        echo "<br>";
    }
    echo "<br>";
    echo "<hr>";
    ?>
    <h1>Förum núna yfir í SQL Database:</h1>
    <hr>
    <br>
    <?php 
		# birtir töflu með player og score
		foreach ($myndir_sql as $entry) {
			echo '<h1>'.$entry[0].'</h1>';
            echo "<img src={$entry[1]}>";
		}
        echo "<br>";
        echo "<hr>";
	 ?>
</body>
</html>