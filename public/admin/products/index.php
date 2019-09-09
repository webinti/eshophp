<?php
require_once (__DIR__ . '/../../../bootstrap.php');
redirect_unless_admin();

partial('header_admin', ['title' => 'Liste de produits'])
?>


    <div class="flex items-center mb-4">
        <h1 class="text-xl mb-4">Liste de produits</h1>
        <button class="ml-3 bg-green-500 text-xs text-white px-2 py-1 uppercase -mt-4 outline-none" onclick="location.href='/admin/products/add.php';">Ajouter un produit</button>
    </div>






    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusantium, aperiam blanditiis commodi consectetur culpa deleniti doloribus eos esse est facere facilis ipsa quos reprehenderit sequi similique ut velit veniam voluptatum.lorem</p>



<?php partial('footer_admin') ?>