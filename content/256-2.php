<div class="title-main">
256
</div>

<div class="text">
Ačkoli ošklivě krvácíš, podaří se ti dostat se ke svému autu. Ztrácíš další 1&nbsp;bod STAMINY.

<?php
if ($_SESSION['stamina_ted'] <= 0) {
	$_SESSION['smrt'] = true;
	
	echo "</div>\n";
	echo "\n";
	echo "<div class=\"text\">\n";
	echo "Vykrvácel jsi.\n";
	echo "</div>\n";
	
	include 'death-link.php';
	
} else {
	echo "Sesuneš se na sedadlo a&nbsp;otevřeš jeden z&nbsp;balíčků v&nbsp;Med-Kitu. Zanedlouho jsou tvé rány ošetřeny - vyjmeš broky, nastříkáš vrstvu syntetické pokožky a&nbsp;zakryješ obvazem. Když nastartuješ, pustíš spojku a&nbsp;vyjedeš z&nbsp;města, hned se cítíš lépe (otoč na <b>34</b>).\n";
	echo "</div>\n";
	echo "\n";
	echo "<div class=\"link\">\n";
	echo "<a href=\"game.php?action=1\">Otočit na <b>34</b></a>\n";
	echo "</div>\n";
}
?>

<?php
include 'post.php';
?>