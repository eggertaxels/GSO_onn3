<html>
    <head>
        <?php include './includes/head.php'; ?>
       <?php require($_SERVER['DOCUMENT_ROOT'] . "/2t/1811992029/GSO_onn3/verkefni3/includes/title.php"); ?>
        <title>Verkefni 3 - <?php echo "{$title}"; ?></title>
    </head>
    <body>
        <?php require './includes/header.php'; ?>
        <?php require($_SERVER['DOCUMENT_ROOT'] . "/2t/1811992029/GSO_onn3/verkefni3/includes/images.php"); ?>
		<div class="hopur_myndir">
			<?php require($_SERVER['DOCUMENT_ROOT'] . "/2T/0506992429/GSO2B3U/Verkefni-3/includes/images.php"); ?>
			<img src="<?= $myndirSaman[0]['img_url']; ?>" alt="Random Mynd">
			<img src="<?= $myndirSaman[1]['img_url']; ?>" alt="Random Mynd">
			<img src="<?= $myndirSaman[2]['img_url']; ?>" alt="Random Mynd">
			<img src="<?= $myndirSaman[3]['img_url']; ?>" alt="Random Mynd">
		</div>
    </body>
    <footer>
        <?php require './includes/footer.php'; ?>
    </footer>
</html>