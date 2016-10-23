<html>
    <head>
        <?php include './includes/head.php'; ?>
       <?php require($_SERVER['DOCUMENT_ROOT'] . "/2t/1811992029/GSO_onn3/verkefni4/includes/title.php"); ?>
        <title>Verkefni 4 - <?php echo "{$title}"; ?></title>
    </head>
    <body>
        <?php require './includes/header.php'; ?>
        <?php require($_SERVER['DOCUMENT_ROOT'] . "/2t/1811992029/GSO_onn3/verkefni4/includes/images.php"); ?>
		<div class="hopur_myndir">
            <a href="mynd.php?mynd=1"><img src="<?= $myndirSaman[0]['img_url']; ?>" alt="mynd"></a>
            <a href="mynd.php?mynd=2"><img src="<?= $myndirSaman[1]['img_url']; ?>" alt="mynd"></a>
            <a href="mynd.php?mynd=3"><img src="<?= $myndirSaman[2]['img_url']; ?>" alt="mynd"></a>
            <a href="mynd.php?mynd=4"><img src="<?= $myndirSaman[7]['img_url']; ?>" alt="mynd"></a>
		</div>
    </body>
    <footer>
        <?php require './includes/footer.php'; ?>
    </footer>
</html>