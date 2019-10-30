<?php
    require_once (__DIR__ . '/../../bootstrap.php');
    redirect_unless_admin();

    partial('header_admin', ['title' => 'Tableau de bord'])
?>

<h1 class="text-xl">Bienvenue sur le tableau de bord</h1>

<p class="mt-8">
    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer consectetur efficitur sem, vitae tristique odio. Vivamus mollis convallis massa at mattis. Nullam ut aliquam mauris. Sed hendrerit tempor elit vitae accumsan. Integer maximus laoreet nisl id fringilla. Curabitur felis justo, lacinia et eros efficitur, pulvinar tincidunt nibh. Nulla facilisi. Phasellus at diam mattis, hendrerit sem sit amet, interdum erat. Sed condimentum sollicitudin purus, eget scelerisque nisl ornare id. Aliquam erat volutpat. Duis cursus dictum gravida. Sed sed quam ut quam pharetra bibendum. Sed dui velit, scelerisque non turpis a, dignissim elementum erat. Nullam at luctus neque, sed pharetra justo. Vestibulum finibus metus a mauris malesuada fringilla.

    Pellentesque sodales lacus vulputate nisi tincidunt egestas. Integer purus nisi, iaculis eget imperdiet et, pulvinar sed mi. Duis vel massa vel ipsum pharetra bibendum. Phasellus quis erat viverra, accumsan ante nec, interdum odio. Integer mollis tincidunt purus sit amet vulputate. Nullam finibus at augue aliquet sollicitudin. Sed tincidunt odio lacus, id viverra lorem efficitur sed. Suspendisse ut nisl ipsum. Duis eget blandit purus.
</p>
<?php partial('footer_admin') ?>