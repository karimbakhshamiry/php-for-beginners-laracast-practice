<?php require("partials/head.php") ?>


<div class="max-w-xl mx-auto bg-white dark:bg-gray-800 p-8 mt-10 rounded-lg shadow">
    <a href="javascript:history.back()" class="inline-block mb-4 text-blue-600 hover:underline dark:text-blue-400">&larr; Back</a>
    <p class="text-gray-600 dark:text-gray-300"><?= nl2br(htmlspecialchars($note['value'])) ?></p>
</div>


<?php require("partials/footer.php") ?>