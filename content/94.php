<div class="title-main">
94
</div>

<?php
$_SESSION['podminka'] = $_SESSION['bodce'] > 0 || $_SESSION['olej'] > 0;
?>

<div class="text">
Jen tak tak se ti podaří proklouznout kolem Jaguáru; pak sešlápneš plyn až k&nbsp;podlaze. V&nbsp;zrcátku vidíš, že se za tebou pustila tři auta. Pokud ti ještě zbyl zásobník s&nbsp;železnými bodci nebo kanystr oleje, otoč na <b>328</b>. Pokud už nic z&nbsp;toho nemáš, otoč na <b>284</b>.
</div>

<?php
include 'check-condition-link.php';
?>

<?php
include 'post.php';
?>