<div class="title-main">
296
</div>

<?php
$_SESSION['condition'] = in_array('neprůstřelná vesta', $_SESSION['vybaveni']);
?>

<div class="text">
Muž uchopí pistoli a&nbsp;vystřelí na tebe. Pokud máš neprůstřelnou vestu, otoč na <b>174</b>. Pokud ji nemáš, otoč na <b>263</b>.
</div>

<?php
include 'check-condition-link.php';
?>

<?php
include 'post.php';
?>