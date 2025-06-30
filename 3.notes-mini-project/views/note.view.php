<?php require("partials/head.php") ?>


<div class="max-w-xl mx-auto bg-white dark:bg-gray-800 p-8 mt-10 rounded-lg shadow">
    <a href="javascript:history.back()" class="inline-block mb-4 text-blue-600 hover:underline dark:text-blue-400">&larr; Back</a>
    <h1 class="text-2xl font-bold text-gray-800 dark:text-gray-100 mb-2"><?= htmlspecialchars($note['title']) ?></h1>
    <p class="text-gray-600 dark:text-gray-300 mb-4"><?= nl2br(htmlspecialchars($note['description'])) ?></p>
    <form method="post" action="/3.notes-mini-project/note/toggle-done" class="mt-4">
        <input type="hidden" name="note_id" value="<?= htmlspecialchars($note['id']) ?>">
        <input type="hidden" name="redirect_to" value="view_note">
        <input type="checkbox" name="done" <?= $note['done'] ? '' : 'checked' ?> class="hidden">
        <button type="submit"
            class="px-4 py-2 rounded 
                <?= $note['done'] ? 'bg-green-600 hover:bg-green-700' : 'bg-gray-400 hover:bg-gray-500' ?> 
                text-white transition">
            <?= $note['done'] ? 'Mark as Not Done' : 'Mark as Done' ?>
        </button>
    </form>
</div>


<?php require("partials/footer.php") ?>