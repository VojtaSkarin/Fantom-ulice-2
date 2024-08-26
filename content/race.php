<?php
echo "<div class=\"title-main\">\n";
echo $_SESSION['kolo'] . ". kolo\n";
echo "</div>\n";

echo "<table class=\"enemies\">\n";
echo "<tr>\n";
echo "<td class=\"align-center\">\n";
echo "Ty\n";
echo "</td>\n";
echo "<td class=\"align-center\">\n";
echo "Soupeř\n";
echo "</td>\n";
echo "</tr>\n";
echo "<tr>\n";
echo "<td class=\"align-center\">\n";
echo $_SESSION['postup_ty'] . "\n";
echo "</td>\n";
echo "<td class=\"align-center\">\n";
echo $_SESSION['postup_protivnik'] . "\n";
echo "</td>\n";
echo "</tr>\n";
echo "</table>\n";

if ($_SESSION['postup_ty'] < 24 &&
	$_SESSION['postup_protivnik'] < 24)
{
	echo "<div class=\"link\">\n";
	echo "<a href=\"game.php?action=1\">";
	
	if ($_SESSION['pristi_cil'] == 0) {
		echo 'Soupeřův tah';
	} else {
		echo 'Tvůj tah';
	}
	
	echo "</a>\n";
	echo "</div>\n";
	
} else {
	if ($_SESSION['postup_ty'] >= 24) {
		echo "<div class=\"text\">\n";
		echo "Vyhrál jsi závod.\n";
		echo "</div>\n";
		
	} else {
		echo "<div class=\"text\">\n";
		echo "Prohrál jsi závod.\n";
		echo "</div>\n";
	}
	
	echo "<div class=\"link\">\n";
	echo "<a href=\"game.php?action=1\">Pokračovat</a>\n";
	echo "</div>\n";
}

include 'post.php';
?>