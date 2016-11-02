<?php
session_start();
// if session variable not set, redirect to login page
if (!isset($_SESSION['authenticated']) || $_SESSION['authenticated'] != 'Lalli Mus') {
 header('Location: http://tsuts.tskoli.is/2t/1811992029/GSO_onn3/verkefni5/session.php');
 exit;
}
?>
<html>
    <head>
        <?php include './includes/head.php'; ?>
       <?php require($_SERVER['DOCUMENT_ROOT'] . "/2t/1811992029/GSO_onn3/verkefni4/includes/title.php"); ?>
        <title>Verkefni 4 - <?php echo "{$title}"; ?></title>
    </head>
    <body>
        <?php require './includes/header.php'; ?>
        
        <?php require($_SERVER['DOCUMENT_ROOT'] . "/2t/1811992029/GSO_onn3/verkefni4/includes/images.php"); ?>
        <div class="nyskodad">
            <?php
                $stack = array();
                $output = "<h1>Nýlega skoðað</h1>";
                $mynd = "";
                echo $output;
                // athugum hvort cookie er til
                if(isset($_COOKIE['pic1'])){
                    // sækjum gildið úr cookie   
                    $mynd = $_COOKIE["pic1"]; 	   
                    // birtum mynd
                    if(count($stack) < 4)
                    {
                        array_unshift($stack, "$mynd");
                    }
                    else{
                        $fruit = array_pop($stack);
                        array_unshift($stack, "$mynd");
                    } 
                } 
                if(isset($_COOKIE['pic2'])){
                    // sækjum gildið úr cookie   
                    $mynd = $_COOKIE["pic2"]; 	   
                    // birtum mynd
                    if(count($stack) < 4)
                    {
                        array_unshift($stack, "$mynd");
                    }
                    else{
                        $fruit = array_pop($stack);
                        array_unshift($stack, "$mynd");
                    }
                } 
                if(isset($_COOKIE['pic3'])){
                    // sækjum gildið úr cookie   
                    $mynd = $_COOKIE["pic3"]; 	   
                    // birtum mynd
                    if(count($stack) < 4)
                    {
                        array_unshift($stack, "$mynd");
                    }
                    else{
                        $fruit = array_pop($stack);
                        array_unshift($stack, "$mynd");
                    }
                } 
                if(isset($_COOKIE['pic4'])){
                    // sækjum gildið úr cookie   
                    $mynd = $_COOKIE["pic4"]; 	   
                    // birtum mynd
                    if(count($stack) < 4)
                    {
                        array_unshift($stack, "$mynd");
                    }
                    else{
                        $fruit = array_pop($stack);
                        array_unshift($stack, "$mynd");
                    } 
                }
                if(isset($_COOKIE['pic5'])){
                    // sækjum gildið úr cookie   
                    $mynd = $_COOKIE["pic5"]; 	   
                    // birtum mynd
                    if(count($stack) < 4)
                    {
                        array_unshift($stack, "$mynd");
                    }
                    else{
                        $fruit = array_pop($stack);
                        array_unshift($stack, "$mynd");
                    }
                } 
                if(isset($_COOKIE['pic6'])){
                    // sækjum gildið úr cookie   
                    $mynd = $_COOKIE["pic6"]; 	   
                    // birtum mynd
                    if(count($stack) < 4)
                    {
                        array_unshift($stack, "$mynd");
                    }
                    else{
                        $fruit = array_pop($stack);
                        array_unshift($stack, "$mynd");
                    } 
                } 
                if(isset($_COOKIE['pic7'])){
                    // sækjum gildið úr cookie   
                    $mynd = $_COOKIE["pic7"]; 	   
                    // birtum mynd
                    if(count($stack) < 4)
                    {
                        array_unshift($stack, "$mynd");
                    }
                    else{
                        $fruit = array_pop($stack);
                        array_unshift($stack, "$mynd");
                    }
                } 
                if(isset($_COOKIE['pic8'])){
                    // sækjum gildið úr cookie   
                    $mynd8 = $_COOKIE["pic8"]; 	   
                    // birtum mynd
                    if(count($stack) < 4)
                    {
                        array_unshift($stack, "$mynd8");
                    }
                    else{
                        $fruit = array_pop($stack);
                        array_unshift($stack, "$mynd8");
                    } 
                }
                //print_r($stack);
                $arrlength = count($stack);
                natsort($stack);
                for($x = 0; $x < $arrlength; $x++) {
                    echo "<img src=\"{$stack[$x]}\">";
                }
            ?>
        </div>
        <h1>Myndir</h1>
		<div class="hopur_myndir">
            <a href="mynd.php?mynd=1"><img src="<?= $myndirSaman[0]['img_url']; ?>" alt="mynd"></a>
            <a href="mynd.php?mynd=2"><img src="<?= $myndirSaman[1]['img_url']; ?>" alt="mynd"></a>
            <a href="mynd.php?mynd=3"><img src="<?= $myndirSaman[2]['img_url']; ?>" alt="mynd"></a>
            <a href="mynd.php?mynd=4"><img src="<?= $myndirSaman[3]['img_url']; ?>" alt="mynd"></a>
            <a href="mynd.php?mynd=5"><img src="<?= $myndirSaman[4]['img_url']; ?>" alt="mynd"></a>
            <a href="mynd.php?mynd=6"><img src="<?= $myndirSaman[5]['img_url']; ?>" alt="mynd"></a>
            <a href="mynd.php?mynd=7"><img src="<?= $myndirSaman[6]['img_url']; ?>" alt="mynd"></a>
            <a href="mynd.php?mynd=8"><img src="<?= $myndirSaman[7]['img_url']; ?>" alt="mynd"></a>
		</div>
    </body>
    <footer>
        <?php require './includes/footer.php'; ?>
    </footer>
</html>