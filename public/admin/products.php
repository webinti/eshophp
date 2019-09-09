<?php
require_once (__DIR__ . '/../../bootstrap.php');
redirect_unless_admin();

partial('header_admin', ['title' => 'Liste de produits'])
?>

<h1 class="text-xl">Liste de produits</h1>


<?php partial('footer_admin') ?>