<div class="title-main">
185
</div>

<div class="text">
Dveře se otevřou do pokoje, který ještě nedávno někdo obýval. Na stole stojí nedopité šálky kávy a&nbsp;u&nbsp;zdi je opřená penumatika z&nbsp;předního kola motocyklu - ráfek leží na zemi. Někdo zřejmě spravoval trhlinu. Na stole leží také brašna s&nbsp;nářidím, ve které najdeš masívní štípací kleště a&nbsp;rozhodneš se vzít je s&nbsp;sebou. Pokud jsi to ještě neudělal, můžeš otevřít protější dveře (otoč na <b>72</b>), nebo můžeš z&nbsp;domu odejít (otoč na <b>246</b>).
</div>

<?php
if (nenavstivil_rockville_pokoj_pravy()) {
	echo "<div class=\"link\">\n";
	echo "<a href=\"game.php?action=1\">Prozkoumat vedlejší pokoj</a>\n";
	echo "</div>\n";
}
?>

<div class="link">
<a href="game.php?action=2">Opustit dům</a>
</div>

<?php
include 'post.php';
?>