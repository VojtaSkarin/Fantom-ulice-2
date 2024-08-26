<div class="title-main">
345
</div>

<?php
$_SESSION['utocne_cislo_ja'] = rand(1, 6) + $_SESSION['umeni_boje_ted'];
$_SESSION['utocne_cislo_protivnik'] = rand(1, 6) + 7;
?>

<div class="text">
K&nbsp;útočníkovu velkému zklamání ti střela z&nbsp;kuše proletí nad hlavou. Vyskočíš na návěs a&nbsp;vrhneš se na něj dřív, než stačí kuši znovu nabít. Hoď jednou kostkou a&nbsp;přičti své UMĚNÍ BOJE. Hoď znovu a&nbsp;přičti 7 (útočníkovo UMĚNÍ BOJE). Pokud je tvůj výsledek stejný nebo větší než jeho, otoč na <b>74</b>. Pokud je tvůj výsledek menší než jeho, otoč na <b>226</b>.
</div>

<?php
include 'showdown-link.php';
?>

<?php
include 'post.php';
?>