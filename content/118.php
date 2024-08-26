<div class="title-main">
118
</div>

<?php
$_SESSION['podminka'] = $_SESSION['palivo'] > 0;
?>

<div class="text">
Míle ubíhají a&nbsp;ukazatel paliva se znovu blíží k&nbsp;nule. Pokud jsi nedávno doplnil do kanystru benzín, otoč na <b>99</b>. Pokud už žádný benzín nemáš, otoč na <b>364</b>.
</div>

<?php
include 'check-condition-link.php';
?>

<?php
include 'post.php';
?>