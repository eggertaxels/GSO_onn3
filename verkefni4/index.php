<html>
    <head>
        <?php include './includes/head.php'; ?>
        <?php require($_SERVER['DOCUMENT_ROOT'] . "/2t/1811992029/GSO_onn3/verkefni4/includes/title.php"); ?>
        <title>Verkefni 4 - <?php echo "{$title}"; ?></title>
    </head>
    <body>
        <?php require './includes/header.php'; ?>
        <?php
// define variables and set to empty values
$myndaheitiErr = $myndaslodErr = $birtaErr = "";
$myndaheiti = $myndaslod = $birta = $com = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  if (empty($_POST["myndaheiti"])) {
    $myndaheitiErr = "Myndaheiti is required";
  } else {
    $myndaheiti = test_input($_POST["myndaheiti"]);
  }
  
  if (empty($_POST["myndaslod"])) {
    $myndaslodErr = "Myndaslod is required";
  } else {
    $myndaslod = test_input($_POST["myndaslod"]);
  }
    
  if (empty($_POST["website"])) {
    $website = "";
  } else {
    $website = test_input($_POST["website"]);
  }

  if (empty($_POST["com"])) {
    $com = "";
  } else {
    $com = test_input($_POST["com"]);
  }

  if (empty($_POST["birta"])) {
    $birtarErr = "Birta is required";
  } else {
    $birta = test_input($_POST["birta"]);
  }
}

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
?>
        <form action="process.php" method="post">
            <fieldset>
                Myndaheiti <input type="text" name="myndaheiti" required><span class="error">* <?php echo $myndaheitiErr;?></span><br>
                Slóð á mynd <input type="text" name="myndaslod" required><span class="error">* <?php echo $myndaslodErr;?></span><br>
                <textarea name="com" placeholder="Text here"></textarea><br>
                Birta mynd eða ekki:<br>
                <input type="radio" name="birta" value="ja" checked required>Birta
                <input type="radio" name="birta" value="nei" required>Ekki Birta<span class="error">* <?php echo $birtaErr;?></span><br>
                <input type="submit">
            </fieldset>  
        </form>
    </body>
    <footer>
        <?php require './includes/footer.php'; ?>
    </footer>
</html>