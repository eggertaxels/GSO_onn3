<html>
    <head>
        <?php include './includes/head.php'; ?>
        <?php require($_SERVER['DOCUMENT_ROOT'] . "/2t/1811992029/GSO_onn3/verkefni4/includes/title.php"); ?>
        <title>Verkefni 4 - <?php echo "{$title}"; ?></title>
    </head>
    <body>
        <?php require './includes/header.php'; ?>
        <?php 
            $myndaheiti = $_POST['myndaheiti'];
            $mynd = $_POST['myndaslod'];
            $lysing = $_POST['com'];
            
            if($_POST['birta'] == 'ja'){
                echo "<img src={$mynd}>";
            }
            else{
                echo "<h1>Þú valdir að ekki birta mynd</h1>";
            }
            echo "<h1>{$myndaheiti}</h1>";
            echo "<ul>
                <li>{$lysing}</li>
                </ul>";
        ?>
    </body>
    <footer>
        <?php require './includes/footer.php'; ?>
    </footer>
</html>