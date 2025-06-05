<?php require "views/partials/head.php"; ?>

<h1>Topics</h1>
<ol>
    <!-- looping over the topics and rendering each topic and linking it to its view -->
    <?php foreach ($topics as $topic) : ?>
        <li><a href="<?= $topic["url"]; ?>"><?= $topic["title"]; ?></a></li>
    <?php endforeach ?>
</ol>

<!-- the general nav from this step to next step -->
<hr style="margin-top: 4rem;">
<div style="display: flex; justify-content: space-between;">
    <a href="/index.php">Home</a>
    <a href="/3.notes-mini-project/index.php">Next: Notes - Mini Project</a>
</div>
<?php require "views/partials/footer.php"; ?>