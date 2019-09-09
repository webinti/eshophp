<?php

require_once (__DIR__ . '/../../bootstrap.php');

if ($_SESSION['admin'] ?? null) {
    redirect('/admin/dashboard.php');
}

if (is_post()) {
    $query = pdo()->prepare('SELECT * FROM admins WHERE name = ?');
    $query->execute([$_POST['name']]);
    $admin = $query->fetch();

    if ($admin and password_verify($_POST['password'], $admin['password'])) {
        $_SESSION['admin'] = $admin;
        redirect('/admin/dashboard.php');
    } else {
        $_SESSION['previous_errors']['credentials'] = 'Votre identifiant ou votre mot de passe ne sont pas corrects';
        $_SESSION['previous_inputs']['name'] = $_POST['name'];
        redirect('/admin/login.php');
    }
}


?>

<?php partial('header', ['title' => 'Connexion admin']) ?>



<div class="w-screen h-screen flex justify-center items-start bg-gray-200">

    <div class="bg-white shadow-lg p-8 mt-20">
        <h1 class="text-xl mb-4">Connectez-vous à l'administration</h1>
        <form method="post">
            <?php if (isset($previous_errors['credentials'])): ?>
                <p class="border border-red-100 w-full bg-red-200 text-red-900 mb-4 p-2 text-sm">
                    <?= $previous_errors['credentials'] ?>
                </p>
            <?php endif ?>
            <p class="mb-4">
                <label for="name" class="block text-sm">Nom :</label>
                <input type="text" name="name" id="name" class="border px-4 py-1 focus:border-black w-full" value="<?= $previous_inputs['name'] ?? '' ?>" required>
            </p>
            <p>
                <label for="password" class="block text-sm">Mot de passe :</label>
                <input type="password" name="password" id="password" class="border px-4 py-1 focus:border-black w-full" required>
            </p>
            <p>
                <button class="bg-green-500 text-white mt-6 p-2 w-full">Connexion</button>
            </p>
            <p class="text-center mt-4">
                <a href="#" class="text-sm text-pink-700 "> Mot de passe oublié ?</a>
            </p>
        </form>
    </div>



</div>



<?php partial('footer') ?>