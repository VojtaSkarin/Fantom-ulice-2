<div class="title-main">
295
</div>

<div class="text">
Auto zabrzdí a&nbsp;zvedne oblak prachu. Ve zpětném zrcátku vidíš oba motorkáře běžet do úkrytu, než mina exploduje. Pak vybuchne a&nbsp;zničí kolo, ale uvnitř auta slyšíš jen tlumenou ránu. Ztrácíš 2&nbsp;body PANCÍŘE.

<?php
if ($_SESSION['pricina'] == 1) {
	$_SESSION['smrt'] = true;
	
	echo "</div>\n";
	echo "\n";
	echo "<div class=\"text\">\n";
	echo "Výbuch miny Interceptor zničil.\n";
	echo "</div>\n";
	
	include 'death-link.php';
	
} else {
	echo "Ještě než se prach usadí, začnou motorkáři střílet z&nbsp;kulometů na svých motorkách: Jsi pro ně snadný terč. Hoď jednou kostkou a&nbsp;výsledek odečti od svého PANCÍŘE.";
	
	if ($_SESSION['pancir_ted'] <= 0) {
		$_SESSION['smrt'] = true;
		
		echo "</div>\n";
		echo "\n";
		echo "<div class=\"text\">\n";
		echo "Střelba z kulometů Interceptor zničila.\n";
		echo "</div>\n";
	
		include 'death-link.php';
	
	} else {
		echo " Usoudíš, že budeš muset opustit auto a&nbsp;čelit jim. Stiskneš spoušť kulometu Interceptoru a&nbsp;kryt palbou se vysoukáš ven. Vklouzneš do blízkého křoví s&nbsp;vytaženým revolverem a&nbsp;přemýšlíš, zda tě viděli. <i>Zkus své štěstí.</i> Pokud máš štěstí, otoč na <b>122</b>. Máš-li smůlu, otoč na <b>329</b>.";
		echo "</div>\n";
		
		include 'fortune-link.php';
	}
}
?>

<?php
include 'post.php';
?>