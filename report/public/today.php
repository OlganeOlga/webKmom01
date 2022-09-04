<?php
include('../config/config.php');
$title = 'Om kurs och webbplatsen';
include('../view/header.php');
// Set the timezone to use
date_default_timezone_set('Europe/Stockholm');

// The date of today
$today = date('Y-m-d H:i:s');

// Name of the week day
$weekday = date('l');
?>
<main>
    <h1>Dagens datum och tide</h1>
    <p >Dagens datum är <?= $today ?> och idag är det <strong style="color:#cc7a00;"><?= $weekday ?></strong>.</p>

</main>
<?php include('../view/footer.php') ?>
