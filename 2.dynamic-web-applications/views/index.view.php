<?php require "views/partials/head.php"; ?>

<h1 class="text-3xl font-bold mb-6">Topics</h1>
<div class="bg-white shadow-lg rounded-xl p-8 mb-10 border border-gray-200">
    <ol class="list-decimal list-inside space-y-2">
        <?php foreach ($topics as $topic) : ?>
            <li>
                <a href="<?= $topic["url"]; ?>" class="text-blue-600 hover:text-blue-800 hover:underline">
                    <?= $topic["title"]; ?>
                </a>
            </li>
        <?php endforeach ?>
    </ol>

    <hr class="my-16 border-gray-200">

    <div class="flex justify-between">
        <a href="/index.php" class="px-4 py-2 bg-gray-100 hover:bg-gray-200 rounded-md transition-colors">
            Home
        </a>
        <a href="/3.notes-mini-project/index.php" class="px-4 py-2 bg-blue-600 text-white hover:bg-blue-700 rounded-md transition-colors">
            Next: Notes - Mini Project
        </a>
    </div>
</div>
<?php require "views/partials/footer.php"; ?>