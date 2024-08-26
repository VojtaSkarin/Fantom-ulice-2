<div class="title-main">
233
</div>

<div class="text">
Když si ošetříš zranění, zjistíš, že v&nbsp;místnosti není kromě smetí a&nbsp;rozbitého nábytku nic; byla tu zjevně nalíčená na vetřelce. Ztrácíš 1&nbsp;bod ŠTĚSTÍ. Pokud jsi to ještě neudělal, můžeš otevřít protější dveře (otoč na <b>185</b>), nebo můžeš z&nbsp;domu odejít (otoč na <b>246</b>).
</div>

<?php
if (nenavstivil_rockville_pokoj_levy()) {
	echo "<div class=\"link\">\n";
	echo "<a href=\"game.php?action=1\">Prozkoumat druhou místnost</a>\n";
	echo "</div>\n";
}
?>

<div class="link">
<a href="game.php?action=2">Odejít</a>
</div>

<?php
include 'post.php';
?>