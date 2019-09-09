<?php
require_once (__DIR__ . '/../../bootstrap.php');
redirect_unless_admin();

partial('header', ['title' => 'Liste de produits'])
?>



<?php partial('footer') ?>