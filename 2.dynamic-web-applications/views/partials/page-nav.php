<hr class="mt-16">
<nav class="flex justify-between items-center py-8">
    <?php if ($nav["previous"]["show"]) : ?>
        <a href="<?= $nav["previous"]["url"]; ?>"
            class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded transition-colors">
            <span class="text-sm">Previous:</span>
            <?= $nav["previous"]["title"]; ?>
        </a>
    <?php endif ?>

    <a href="/2.dynamic-web-applications/index.php"
        class="bg-gray-500 hover:bg-gray-700 text-white font-bold py-2 px-4 rounded transition-colors">
        Home
    </a>

    <a href="<?= $nav["next"]["url"]; ?>"
        class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded transition-colors">
        <span class="text-sm">Next:</span>
        <?= $nav["next"]["title"] ?>
    </a>
</nav>