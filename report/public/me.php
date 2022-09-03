<?php

include('../config/config.php');
$title = 'Om kurs och webbplatsen';
// Set the timezone to use
date_default_timezone_set('Europe/Stockholm');

// The date of today
$today = date('Y-m-d H:i:s');

// Name of the week day
$weekday = date('l');

include('../view/header.php');
?>
<body>
    <main>
        <h1>Om Mig Själv</h1>
        <p>Hej!
        Mitt namn är Olga, jag föddes i fördetta Sovjet Union och blev student under de svåra 90-talet av förra århundrande. Det var ändå roligt: jag pluggade på vad jag gillade mest, på utvecklingsbiologi. Så rullade det på, jag blev doktorand och fick PhD titel. Så rullade det på, jag blev doktorand och fick PhD titel. Sedan träffade jag min man och det ändrade mitt liv. Jag ville heller vara hemma med barn än fortsätta med karriären. 
        Nu blev barn ganska stora och jag upptäckte att jag fortfarande vill göra roliga grejer och använda min hjärna. Så blev det att jag började med programmering. SPÄNNANDE!
        </p>
        <img src="img/moomin_mamma.png" width="300" class="me" alt="Bild på mig">
        <p>Dagens datum är <?= $today ?> och idag är det <?= $weekday ?>.</p>
    </main>
</body>
<?php include('../view/footer.php') ?>