<?php require "partials/head.php" ?>

<?php require "partials/nav.php" ?>

<?php  require "partials/banner.php" ?>

    <main class="container">
                <p><a href="/lesson2/controllers/notes.php" class="text-blue-500 underline">Go back...</a></p>
                   <p> <?= $note['body'] ?></p>
    </main>


<?php require "partials/footer.php"?>