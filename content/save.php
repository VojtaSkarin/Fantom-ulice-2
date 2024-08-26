<?php
session_start();

header('Content-Description: File Transfer');
header('Content-Type: application/octet-stream');
header("Cache-Control: no-cache, must-revalidate");
header("Expires: 0");
header('Content-Disposition: attachment; filename=fantom_save_' . time() . '.dat');

echo json_encode($_SESSION);
?>