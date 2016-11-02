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
        <title>Verkefni 5 - <?php echo "{$title}"; ?></title>
    </head>
    <body>
        <?php require './includes/header.php'; ?>
        <form action="process.php" method="post">
            <fieldset>
                Myndaheiti <input type="text" name="myndaheiti" required><br>
                Slóð á mynd <input type="text" name="myndaslod" required><br>
                <textarea name="com" placeholder="Text here"></textarea><br>
                Birta mynd eða ekki:<br>
                <input type="radio" name="birta" value="ja" checked required>Birta
                <input type="radio" name="birta" value="nei" required>Ekki Birta<br>
                <input type="submit">
            </fieldset>  
        </form>
    </body>
    <footer>
        <?php require './includes/footer.php'; ?>
    </footer>
</html>