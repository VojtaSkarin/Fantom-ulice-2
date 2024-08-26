<div class="title-main">
198
</div>

<?php
$_SESSION['podminka'] = in_array('štípací kleště', $_SESSION['vybaveni']);
?>

<div class="text">
Dostanete se k plotu z&nbsp;ostnatého drátu a&nbsp;za ním vidíte osm aut. Zakroucený drát je příliš nízko, než abyste se pod ním dokázali protáhnout a&nbsp;nezachytili se o něj. Pokud máš štípací kleště, otoč na <b>85</b>. Pokud je nemáš, otoč na <b>255</b>.
</div>

<?php
include 'check-condition-link.php';
?>

<?php
include 'post.php';
?>