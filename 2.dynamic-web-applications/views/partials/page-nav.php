<hr style="margin-top: 4rem;">
<div style="display: flex; justify-content: space-between;">
    <?php if ($nav["previous"]["show"]) : ?>
        <a href="<?= $nav["previous"]["url"]; ?>">Previous: <?= $nav["previous"]["title"]; ?></a>
    <?php endif ?>
    <a href="/2.dynamic-web-applications/index.php">Home</a>
    <a href="<?= $nav["next"]["url"]; ?>">Next: <?= $nav["next"]["title"] ?></a>
</div>