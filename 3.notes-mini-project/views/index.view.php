<?php require("partials/head.php") ?>


<div class="max-w-xl mx-auto bg-white dark:bg-gray-800 p-8 mt-10 rounded-lg shadow">
    <h1 class="text-2xl font-bold text-gray-800 dark:text-gray-100 mb-2"><?= htmlspecialchars($heading) ?></h1>
    <p class="text-gray-600 dark:text-gray-300 mb-6">Take notes and keep your thoughts organized.</p>
    <form class="space-y-4" method="post" action="/3.notes-mini-project/notes">
        <input type="text" name="title" placeholder="Note title" required
            class="w-full px-3 py-2 border border-gray-300 dark:border-gray-600 rounded focus:outline-none focus:ring-2 focus:ring-blue-400 dark:bg-gray-900 dark:text-gray-100">
        <textarea name="description" rows="4" placeholder="Your note..." required
            class="w-full px-3 py-2 border border-gray-300 dark:border-gray-600 rounded focus:outline-none focus:ring-2 focus:ring-blue-400 dark:bg-gray-900 dark:text-gray-100"></textarea>
        <button type="submit"
            class="px-6 py-2 bg-blue-600 text-white rounded hover:bg-blue-700 transition">Add Note</button>
    </form>
    <!-- Notes list will go here in the future -->

    <h2 class="text-xl font-semibold text-gray-800 dark:text-gray-100 mt-8 mb-4">Notes</h2>
    <ol class="space-y-3">
        <?php foreach ($notes as $index => $note): ?>
            <a href="/3.notes-mini-project/note?id=<?= $note["id"] ?>" class="bg-gray-100 dark:bg-gray-700 rounded shadow-sm dark:text-white flex items-center group">
                <li class="p-4 bg-gray-100 dark:bg-gray-700 rounded shadow-sm dark:text-white flex items-center group-hover:text-blue-500 group-hover:underline">
                    <form method="post" action="/3.notes-mini-project/note/toggle-done" class="mr-3">
                        <input type="hidden" name="note_id" value="<?= htmlspecialchars($note['id']) ?>">
                        <input type="checkbox" name="done" onchange="this.form.submit()" <?= $note['done'] ? 'checked' : '' ?> title="Mark as done">
                    </form>
                    <div class="line-clamp-1 <?php $note["done"] ? "overline" : "" ?>"><?= htmlspecialchars($note['title']) ?></div>
                </li>
            </a>
        <?php endforeach ?>
    </ol>
</div>


<?php require("partials/footer.php") ?>