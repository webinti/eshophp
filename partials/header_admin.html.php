<?php
partial('header', ['title' => "$title - Admin"]);
redirect_unless_admin();

?>

<div class="flex max-w-5xl w-full mx-auto mt-8">


    <nav class="mr-6 w-48 flex-shrink-0 py-8 ">
        <div class="flex flex-col">
            <li class="list-none hover-underline"><img src="../img/icone.png" width="80" class="text-center"></li>
            <li class="list-none hover-underline <?= is_on_page('/admin/dashboard.php') ? 'bg-gray-300 rounded-lg' : '' ?>"><a href="/admin/dashboard.php" class="w-full m-1 py-3 px-4 text-gray-800 hover:text-black">Tableau de bord</a></li>
            <li class="list-none hover-underline mt-4 <?= is_on_directory('/admin/products/') ? 'bg-gray-300' : '' ?>"><a href="/admin/products/index.php" class="w-full m-1 py-3 px-4 text-gray-800 hover:text-black">Produits</a></li>
            <li class="list-none hover-underline mt-4 <?= is_on_page('/admin/orders.php') ? 'bg-gray-300' : '' ?>"><a href="#" class="w-full m-1 py-3 px-4 text-gray-800 hover:text-black">Commandes</a></li>
            <li class="list-none hover-underline mt-4 <?= is_on_page('/admin/customers.php') ? 'bg-gray-300' : '' ?>"><a href="#" class="w-full m-1 py-3 px-4 text-gray-800 hover:text-black">Clients</a></li>
            <li class="list-none hover-underline mt-4 <?= is_on_page('/admin/stats.php') ? 'bg-gray-300' : '' ?>"><a href="#" class="w-full m-1 py-3 px-4 text-gray-800 hover:text-black">Statistiques</a></li>
            <form method="post" action="/admin/logout.php" class="list-none mt-4"><a href="#" class="w-full m-1 py-3 px-4 text-gray-800 hover:text-black">
                    <button>Déconnexion</button>
            </form>
        </div>
    </nav>

    <main class="bg-white shadow-xl p-8">
