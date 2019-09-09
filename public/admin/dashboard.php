<?php
    require_once (__DIR__ . '/../../bootstrap.php');
    redirect_unless_admin();

    partial('header', ['title' => 'Tableau de bord'])
?>

<div class="flex max-w-5xl w-full mx-auto mt-8">


    <nav class="mr-6 w-48 flex-shrink-0 py-8 ">
        <div class="flex flex-col">
            <li class="list-none hover-underline"><a href="/admin/dashboard.php" class="w-full m-1 py-3 px-4 text-gray-800 hover:text-black">Tableau de bord</a></li>
            <li class="list-none hover-underline"><a href="/admin/products.php" class="w-full m-1 py-3 px-4 text-gray-800 hover:text-black">Produits</a></li>
            <li class="list-none hover-underline"><a href="#" class="w-full m-1 py-3 px-4 text-gray-800 hover:text-black">Commandes</a></li>
            <li class="list-none hover-underline"><a href="#" class="w-full m-1 py-3 px-4 text-gray-800 hover:text-black">Clients</a></li>
            <li class="list-none hover-underline"><a href="#" class="w-full m-1 py-3 px-4 text-gray-800 hover:text-black">Statistiques</a></li>
            <form method="post" action="/admin/logout.php" class="list-none"><a href="#" class="w-full m-1 py-3 px-4 text-gray-800 hover:text-black">
                <button>Déconnexion</button>
            </form>
        </div>
    </nav>

    <main class="bg-white shadow-xl p-8">
        <h1 class="text-xl mb-4">Bienvenue sur votre tableau de bord</h1>
    </main>

</div>




<?php partial('footer') ?>