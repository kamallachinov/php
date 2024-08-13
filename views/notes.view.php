<?php require "../views/partials/head.php" ?>

<?php require "../views/partials/nav.php" ?>

<?php require "../views/partials/banner.php" ?>

    <main class="container">
        <ul>
            <?php foreach ($notes as $note) : ?>
                <li>
                    <a href="/notes?id=<?= $note['id'] ?>" class="text-blue-500 hover:underline">

                        <?= htmlspecialchars($note['body']) ?>
                    </a>
                </li>;
            <?php endforeach; ?>
        </ul>

        <p class="mt-6">
            <a href="/lesson2/notes/create" class="text-blue-500 hover:underline bg-gray-200 py-2 px-4">Create Note</a>
        </p>

    </main>


<?php require "../views/partials/footer.php" ?>