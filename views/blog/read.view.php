<?php
require __DIR__ . '/../partials/head.view.php';
require __DIR__ . '/../partials/nav.view.php';
?>

<div class="content">
    <div class="heading">
        <h1>Welcome to <?= $blog['user'] ?> blog!</h1>
        <a href="/blog/user?id=<?= 'niga' ?>">Read more from <?= $blog['user'] ?></a>
        <p><?= $blog['title'] ?></p>
    </div>
    <div class="blog-main">
        <div class="blog-content">
            <?= $blog['content'] ?>
        </div>
    </div>
</div>


<?php
require __DIR__ . '/../partials/footer.view.php';
