<?php require "partials/head.php" ?>

<?php require "partials/nav.php" ?>

<?php require "partials/banner.php" ?>

    <main class="container">
        <ul>
            <?php foreach ($notes as $note) : ?>
                <li>
                    <a href="/notes?id=<?= $note['id'] ?>" class="text-blue-500 hover:underline">

                        <?= $note['body'] ?>
                    </a>
                </li>;
            <?php endforeach; ?>
        </ul>

        <p class="mt-6">
            <a href="/lesson2/notes/create" class="text-blue-500 hover:underline bg-gray-200 py-2 px-4">Create Note</a>
        </p>

    </main>


<?php require "partials/footer.php" ?>