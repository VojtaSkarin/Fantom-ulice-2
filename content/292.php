<div class="title-main">
292
</div>

<?php
$_SESSION['podminka'] = $_SESSION['rakety'] > 0;
?>

<div class="text">
Pokud máš ještě nějakou raketu, otoč na <b>31</b>. Pokud už ti žádná raketa nezbývá, otoč na <b>173</b>.
</div>

<?php
include 'check-condition-link.php';
?>

<?php
include 'post.php';
?>