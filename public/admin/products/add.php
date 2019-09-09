<?php
require_once (__DIR__ . '/../../../bootstrap.php');
redirect_unless_admin();

partial('header_admin', ['title' => 'Ajouter un produit'])
?>


    <div class="flex items-center mb-4">
        <h1 class="text-xl mb-4">Ajouter un produit</h1>
    </div>

    <form method="post">
        <p class="mb-4 max-w-xs">
            <label for="name" class="block text-sm">Nom du produit</label>
            <input type="text" name="name" id="name" class="border px-4 py-1 focus:border-black w-full" value="<?= $previous_inputs['name'] ?? '' ?>" required>
        </p>
        <p class="mb-4 max-w-xs">
            <label for="description" class="block text-sm">Description du produit</label>
            <textarea name="description" id="description" class="border px-4 py-1 focus:border-black w-full h-32" required></textarea>
        </p>
        <p class="mb-4 max-w-xs">
            <button class="bg-green-500 text-white mt-6 p-2 w-full uppercase">Ajouter</button>
        </p>
    </form>



<?php partial('footer_admin') ?>