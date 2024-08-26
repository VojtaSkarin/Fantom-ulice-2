<?php
$hod = rand(1, 6) + rand(1, 6);

$_SESSION['pancir_ted'] = max($_SESSION['pancir_ted'] - $hod, 0);
?>