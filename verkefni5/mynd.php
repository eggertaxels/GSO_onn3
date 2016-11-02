<?php
session_start();
// if session variable not set, redirect to login page
if (!isset($_SESSION['authenticated'])) {
 header('Location: http://tsuts.tskoli.is/2t/1811992029/GSO_onn3/verkefni5/session.php');
 exit;
}
?>
<?php
// Ath. hér eru harðkóðar lausnir notaðar til einföldunar sem sýnidæmi.

// Athugum hvort búið er að smella á mynd (query string). 
if(isset($_GET['mynd'])){

    print_r($_GET); // Skoðum GET

    // Sækjum gildi úr GET
    $id = $_GET["mynd"];
        if($id == 1){
            $img = "myndir/mynd1.jpg";
            $expire = time()+(60*60*24*7); // látum lifa í 1 viku.
            // búum til cookie til að senda með page request næst til miðlara
            setcookie("pic1", $img, $expire);
        }
        if($id == 2){
            $img = "myndir/mynd2.jpg";
            $expire = time()+(60*60*24*7); // látum lifa í 1 viku.
            // búum til cookie til að senda með page request næst til miðlara
            setcookie("pic2", $img, $expire);
        } 
        if($id == 3){
            $img = "myndir/mynd3.jpg";
            $expire = time()+(60*60*24*7); // látum lifa í 1 viku.
            // búum til cookie til að senda með page request næst til miðlara
            setcookie("pic3", $img, $expire);
        }
        if($id == 4){
            $img = "myndir/mynd4.jpg";
            $expire = time()+(60*60*24*7); // látum lifa í 1 viku.
            // búum til cookie til að senda með page request næst til miðlara
            setcookie("pic4", $img, $expire);
        }
        if($id == 5){
            $img = "myndir/mynd5.jpg";
            $expire = time()+(60*60*24*7); // látum lifa í 1 viku.
            // búum til cookie til að senda með page request næst til miðlara
            setcookie("pic1", $img, $expire);
        }
        if($id == 6){
            $img = "myndir/mynd6.jpg";
            $expire = time()+(60*60*24*7); // látum lifa í 1 viku.
            // búum til cookie til að senda með page request næst til miðlara
            setcookie("pic2", $img, $expire);
        } 
        if($id == 7){
            $img = "myndir/mynd7.jpg";
            $expire = time()+(60*60*24*7); // látum lifa í 1 viku.
            // búum til cookie til að senda með page request næst til miðlara
            setcookie("pic3", $img, $expire);
        }
        if($id == 8){
            $img = "myndir/mynd8.jpg";
            $expire = time()+(60*60*24*7); // látum lifa í 1 viku.
            // búum til cookie til að senda með page request næst til miðlara
            setcookie("pic4", $img, $expire);
        }
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
        <a href="myndir.php"><button class="button" style="vertical-align:middle"><span>Back </span></button></a>
        <div class="adalmyndir">
            <?php 

                if($_GET["mynd"] == 1){
                    $img = "http://tsuts.tskoli.is/2t/1811992029/GSO_onn3/verkefni5/myndir/mynd1.jpg";
                    echo "<img src={$img}>";
                    echo "<ul>
                    <li>Bolti</li>
                    <li>Oft notaður í íþróttir</li>
                    </ul>";
                }
                if($_GET["mynd"] == 2){
                    $img = "http://tsuts.tskoli.is/2t/1811992029/GSO_onn3/verkefni5/myndir/mynd2.jpg";
                    echo "<img src={$img}>"; 
                    echo "<ul>
                    <li>Camel</li>
                    <li>Geta lifað án vatns í langan tíma</li>
                    </ul>";
                }
                if($_GET["mynd"] == 3){
                    $img = "http://tsuts.tskoli.is/2t/1811992029/GSO_onn3/verkefni5/myndir/mynd3.jpg";
                    echo "<img src={$img}>"; 
                    echo "<ul>
                    <li>Croco</li>
                    <li>Eitt af hættulegustu dýrum heims</li>
                    </ul>";
                }
                if($_GET["mynd"] == 4){
                    $img = "http://tsuts.tskoli.is/2t/1811992029/GSO_onn3/verkefni5/myndir/mynd4.jpg";
                    echo "<img src={$img}>"; 
                    echo "<ul>
                    <li>MEME</li>
                    <li>Underrated</li>
                    </ul>";
                }
                if($_GET["mynd"] == 5){
                    $img = "http://tsuts.tskoli.is/2t/1811992029/GSO_onn3/verkefni5/myndir/mynd5.jpg";
                    echo "<img src={$img}>";
                    echo "<ul>
                    <li>Disney karakter</li>
                    <li>Vinsæll</li>
                    </ul>";
                }
                if($_GET["mynd"] == 6){
                    $img = "http://tsuts.tskoli.is/2t/1811992029/GSO_onn3/verkefni5/myndir/mynd6.jpg";
                    echo "<img src={$img}>"; 
                    echo "<ul>
                    <li>Earth</li>
                    <li>You live here</li>
                    </ul>";
                }
                if($_GET["mynd"] == 7){
                    $img = "http://tsuts.tskoli.is/2t/1811992029/GSO_onn3/verkefni5/myndir/mynd7.jpg";
                    echo "<img src={$img}>"; 
                    echo "<ul>
                    <li>Ninja</li>
                    <li>Silent but deadly</li>
                    </ul>";
                }
                if($_GET["mynd"] == 8){
                    $img = "http://tsuts.tskoli.is/2t/1811992029/GSO_onn3/verkefni5/myndir/mynd8.jpg";
                    echo "<img src={$img}>"; 
                    echo "<ul>
                    <li>Penguin</li>
                    <li>Kunna ekki að fljúga</li>
                    </ul>";
                }
        ?>
        </div>
        
    </body>
    <footer>
        <?php require './includes/footer.php'; ?>
    </footer>
</html>