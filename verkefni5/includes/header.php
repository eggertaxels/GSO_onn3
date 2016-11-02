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
<?php
    $visits = 1;
    if (isset($_COOKIE["visits"])) {
        $visits = (int)$_COOKIE["visits"];
    }
    setcookie("visits", $visits + 1, time() + (60 * 60 * 24 * 30));
    if($visits < 2)
    {
        echo "<h1>You have never visited this site before</h1>";
    }
    else{
        echo "<h1>Þú aftur? This site has been reloaded {$visits} times</h1>";
    }
?>