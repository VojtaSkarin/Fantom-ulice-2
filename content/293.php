<div class="title-main">
293
</div>

<?php
$_SESSION['podminka'] = in_array('boxer', $_SESSION['vybaveni']);
?>

<div class="text">
Pokud máš boxer, otoč na <b>56</b>. Pokud boxer nemáš, otoč na <b>125</b>.
</div>

<?php
include 'check-condition-link.php';
?>

<?php
include 'post.php';
?>