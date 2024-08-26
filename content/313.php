<div class="title-main">
313
</div>

<?php
$_SESSION['podminka'] = $_SESSION['kola'] > 0;
?>

<div class="text">
Jednu pneumatiku jsi schopen zalepit Penumolepem, ale druhá je nadranc. Pokud máš rezervní kolo, otoč na <b>19</b>. Pokud už jsi obě rezervy použil, otoč na <b>336</b>.
</div>

<?php
include 'check-condition-link.php';
?>

<?php
include 'post.php';
?>