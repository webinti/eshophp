<?php
    require_once (__DIR__ . '/../../bootstrap.php');
    redirect_unless_admin();

    partial('header_admin', ['title' => 'Tableau de bord'])
?>

<h1 class="text-xl">Bienvenue sur le tableau de bord</h1>


<?php partial('footer_admin') ?>