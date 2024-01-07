<?php
require __DIR__ . '/../partials/head.view.php';
require __DIR__ . '/../partials/nav.view.php';
?>

<div class="content">
    <div class="heading">
        <h1>Welcome to our blog!</h1>
        <p>Here you can read others blogs or write your own blog to get new experience!</p>
        <h2><a href="/blog/create">Create your own blog!</a></h2>
    </div>
    <div class="blog-main">
        <?php foreach ($blogs as $blog) : ?>
            <div class="blog">

                <div class="blog-query">
                    <div class="blog-user">
                        <h2>User</h2>
                        <h3><?= $blog['user']; ?></h3>
                    </div>
                    <div class="blog-title">
                        <h2>Title</h2>
                        <h3><a href=""><?= $blog['title']; ?></a></h3>
                    </div>
                </div>
                <div class="blog-box">
                    <div class="blog-text">
                        <a href="/blog/read?id=<?= $blog['id'] ?>">Click here to read this blog</a>z
                    </div>
                </div>


            </div>
        <?php endforeach; ?>
    </div>
</div>


<?php
require __DIR__ . '/../partials/footer.view.php';
