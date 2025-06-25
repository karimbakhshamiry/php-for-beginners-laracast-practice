<?php require("partials/head.php") ?>

<div class="max-w-xl mx-auto bg-white dark:bg-gray-800 p-8 mt-10 rounded-lg shadow">
    <h1 class="text-4xl font-bold text-red-600 dark:text-red-400 mb-4 flex items-center">
        <svg class="w-10 h-10 mr-2 text-red-600 dark:text-red-400" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
            <circle cx="12" cy="12" r="10" stroke="currentColor" stroke-width="2" fill="none"/>
            <path stroke="currentColor" stroke-width="2" d="M9.17 9.17l5.66 5.66m0-5.66l-5.66 5.66"/>
        </svg>
        404
    </h1>
    <p class="text-xl text-gray-800 dark:text-gray-100 mb-2"><?= $abort_title ?></p>
    <p class="text-gray-600 dark:text-gray-300 mb-6"><?= $abort_subtitle ?></p>
    <a href="/3.notes-mini-project/" class="inline-block px-6 py-2 bg-red-600 dark:bg-red-500 text-white rounded hover:bg-red-700 dark:hover:bg-red-600 transition">Go Home</a>
</div>

<?php require("partials/footer.php") ?>