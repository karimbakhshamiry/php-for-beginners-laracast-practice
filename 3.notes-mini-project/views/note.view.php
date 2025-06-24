<?php require("partials/head.php") ?>


<div class="max-w-xl mx-auto bg-white dark:bg-gray-800 p-8 mt-10 rounded-lg shadow">
    <p class="text-gray-600 dark:text-gray-300"><?= 
    nl2br(htmlspecialchars($note['value'])) ?></p>
</div>


<?php require("partials/footer.php") ?>