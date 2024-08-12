<?php require "partials/head.php" ?>

<?php require "partials/nav.php" ?>

<?php  require "partials/banner.php" ?>

    <main class="container">
       <?php foreach ($notes as $note) : ?>
            <li>
                    <a href="/notes?id=<?= $note['id'] ?>" class="text-blue-500 hover:underline">

                        <?= $note['body'] ?>

                    </a>

            </li>;

        <?php endforeach; ?>
    </main>


<?php require "partials/footer.php"?>