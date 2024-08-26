<div class="title-main">
35
</div>

<div class="text">
Je to souboj nervů mezi tebou a&nbsp;řidičem Fordu. Obě auta se bok po boku řítí k&nbsp;mostu. Hoď jednou kostkou, přičti své UMĚNÍ BOJE a&nbsp;poznamenej si výsledek. Hoď znovu kostkou a přičti 8 (UMĚNÍ BOJE řidiče Fordu). Pokud je tvůj výsledek větší nebo roven výsledku tvého soupeře, otoč na <b>379</b>. Pokud je tvůj výsledek menší než jeho, otoč na <b>51</b>.
</div>

<?php
$_SESSION['utocne_cislo_ja'] = rand(1, 6) + $_SESSION['umeni_boje_ted'];
$_SESSION['utocne_cislo_protivnik'] = rand(1, 6) + 8;
?>

<?php
include 'showdown-link.php';
?>

<?php
include 'post.php';
?>