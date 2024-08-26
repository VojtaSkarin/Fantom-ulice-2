<div class="title-main">
40
</div>

<div class="text">
Než doběhneš ke kamiónu, Pekelný pes už stačí nastartovat. Když sahá pro pistoli, vyskočíš a&nbsp;chytíš se kliky dveří. Jeho UMĚNÍ BOJE je 6. Je-li tvé UMĚNÍ BOJE stejné nebo vyšší, otoč na <b>81</b>. Pokud je tvé UMĚNÍ BOJE menší než 6, otoč na <b>296</b>.
</div>

<?php
$_SESSION['utocne_cislo_ja'] = $_SESSION['umeni_boje_ted'];
$_SESSION['utocne_cislo_protivnik'] = 6;

include 'showdown-link.php';
?>

<?php
include 'post.php';
?>