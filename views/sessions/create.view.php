<?php
require __DIR__ . '/../partials/head.view.php';
require __DIR__ . '/../partials/nav.view.php';
?>

<div class="content">
    <div class="heading">
        <h1>Log in here!</h1>
    </div>
    <div class="register-main">
        <form action="/login" method="POST">
            <label for="email">Insert your email here</label>
            <input type="text" name="email" id="email">
            <label for="password">Insert your password here</label>
            <input type="password" name="password" id="password">
            <input type="submit" name="sub" id="sub" value="Log in">
        </form>
    </div>
</div>


<?php
require __DIR__ . '/../partials/footer.view.php';
