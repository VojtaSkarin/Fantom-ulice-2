<div class="title-main">
15
</div>
<div class="text">
Přistoupíš k muži a promluvíš na něj. Zhasne hořádk a říká: &bdquo;Tahle práce v pouštním vedru dá pěkně zabrat. Na druhé straně mě většina lidí nechává na pokoji a můžu pracovat v&nbsp;klidu. Nejsem na ničí straně a je mi jedno, čí vozidlo opravím. Pokud chceš, abych odstranil škody na tvém autě, bude tě to stát 200 kreditů.&ldquo; Pokud můžeš tuto cenu zaplatit a chceš své auto opravit, otoč na <b>169</b>. Pokud chceš jeho nabídku odmítnout a pokračovat v cestě na jih, otoč na <b>259</b>.
</div>

<?php
if ($_SESSION['kredity'] >= 200) {
	echo '<div class="link">';
	echo '<a href="game.php?action=1">Přijmout nabídku</a>';
	echo '</div>';
}
?>

<div class="link">
<a href="game.php?action=2">Pokračovat na jih</a>
</div>

<?php
include 'post.php';
?>