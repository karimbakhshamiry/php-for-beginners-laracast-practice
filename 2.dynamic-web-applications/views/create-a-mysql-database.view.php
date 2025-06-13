<?php require "views/partials/head.php"; ?>

<h3 class="text-2xl font-bold mb-6"><?= $heading; ?></h3>

<div class="bg-white shadow-lg rounded-xl p-8 mb-10 border border-gray-200">
    <p class="text-gray-700 mb-2">
        To get started with MySQL, install it on your PC. You can use GUI tools like
        <a href="https://dbeaver.io/download/" class="font-semibold text-blue-700 hover:underline" target="_blank" rel="noopener">DBeaver</a> or
        <a href="https://tableplus.com/download" class="font-semibold text-blue-700 hover:underline" target="_blank" rel="noopener">TablePlus</a> to create a database, or use the command line.
    </p>
    <div class="bg-blue-50 border-l-4 border-blue-400 p-4 rounded">
        <p class="text-blue-800">
            For MySQL installation instructions, please refer to official documentation or online resources.
        </p>
    </div>
    <div>
        <p class="mb-1 text-gray-800">For a short tutorial, visit:</p>
        <a
            href="https://laracasts.com/series/php-for-beginners-2023-edition/episodes/16"
            class="inline-block text-blue-600 hover:text-blue-800 hover:underline break-all"
            target="_blank" rel="noopener">
            https://laracasts.com/series/php-for-beginners-2023-edition/episodes/16
        </a>
    </div>
</div>
<?php require "views/partials/page-nav.php"; ?>
<?php require "views/partials/footer.php"; ?>