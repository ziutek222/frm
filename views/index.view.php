<?php
require 'partials/head.view.php';
require 'partials/nav.view.php';
?>

<div class="content">
    <div class="heading">
        <h1>Hello <?= $_SESSION['user']['email'] ?? 'guest' ?>, you are on Home page</h1>
        <p>jakies gowno txt</p>
        <div class="bottom-heading">
            <div class="get-started">
                <a href="">Get Started</a>
            </div>
            <div class="learn-more">
                <a href="">Learn more</a>
            </div>

        </div>

    </div>
</div>


<?php
require 'partials/footer.view.php';