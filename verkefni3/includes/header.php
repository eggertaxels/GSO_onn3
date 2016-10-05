<header>
<?php $currentPage = basename($_SERVER['SCRIPT_FILENAME']); ?>
    <figure>
        <?php include($_SERVER['DOCUMENT_ROOT'] . "/2t/1811992029/GSO_onn3/verkefni3/includes/images.php"); ?>
        <img class="mynd_header" src="<?php echo $images[1]['img_url']; ?>" alt="Header image">
        <h1 class="texti_header"><?php echo $images[1]['caption']; ?></h1>
    </figure>
 <ul id="nav">
 <a href="index.php"><li <?php if ($currentPage == 'index.php') {
 echo 'id="here"';} ?>>Home</li></a>
 <a href="myndir.php"><li <?php if ($currentPage == 'myndir.php') {
 echo 'id="here"';} ?>>Myndir</li></a>
 </ul>
</header>