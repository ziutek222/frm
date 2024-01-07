<?php
require __DIR__ . '/../partials/head.view.php';
require __DIR__ . '/../partials/nav.view.php';
?>

<div class="content">
    <div class="heading">
        <h1>Welcome <?= $_SESSION['user']['email'] ?>, this is your user center</h1>
        <p>Here you can update, delete or create new blogs!</p>
    </div>
    <div class="center-main">
        <?php foreach ($blogs as $blog) : ?>
            <div class="user-blog">
                <div class="box1">
                    <?= $blog['title'] ?>
                </div>
                <div class="box2">

                </div>
            </div>
        <?php endforeach; ?>
    </div>


    <?php
    require __DIR__ . '/../partials/footer.view.php';
