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
                    $img = "http://tsuts.tskoli.is/2t/1811992029/GSO_onn3/verkefni4/myndir/ball.jpg";
                    echo "<img src={$img}>";
                    echo "<ul>
                    <li>Bolti</li>
                    <li>Oft notaður í íþróttir</li>
                    </ul>";
                }
                if($_GET["mynd"] == 2){
                    $img = "http://tsuts.tskoli.is/2t/1811992029/GSO_onn3/verkefni4/myndir/camel.jpg";
                    echo "<img src={$img}>"; 
                    echo "<ul>
                    <li>Camel</li>
                    <li>Geta lifað án vatns í langan tíma</li>
                    </ul>";
                }
                if($_GET["mynd"] == 3){
                    $img = "http://tsuts.tskoli.is/2t/1811992029/GSO_onn3/verkefni4/myndir/croco.jpg";
                    echo "<img src={$img}>"; 
                    echo "<ul>
                    <li>Croco</li>
                    <li>Eitt af hættulegustu dýrum heims</li>
                    </ul>";
                }
                if($_GET["mynd"] == 4){
                    $img = "http://tsuts.tskoli.is/2t/1811992029/GSO_onn3/verkefni4/myndir/penguin.jpg";
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