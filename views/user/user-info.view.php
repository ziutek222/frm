<?php
require __DIR__ . '/../partials/head.view.php';
require __DIR__ . '/../partials/nav.view.php';
?>

<div class="content">
    <div class="heading">
        <h1>Welcome <?= $_SESSION['user']['email'] ?>, this is your account</h1>
    </div>
    <div class="info-main">
        <div class="links">
            <a href="/user/center">Your user center</a>
            <form action="/logout" method="POST">
                <input type="hidden" name="_method" value="DELETE">
                <button id="sub">Log out</button>
            </form>
        </div>
        <div class="user-info">
            <h2>Profile info</h2>
            <ul>
                <li>Name: <?= $info['name'] ?></li>
                <li>Surname <?= $info['surname'] ?></li>
                <li>Email <?= $info['email'] ?></li>
                <li>Blogs posted:</li>
            </ul>
        </div>
    </div>

</div>


<?php
require __DIR__ . '/../partials/footer.view.php';
