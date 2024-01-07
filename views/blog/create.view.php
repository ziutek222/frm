<?php
require __DIR__ . '/../partials/head.view.php';
require __DIR__ . '/../partials/nav.view.php';
?>

<div class="content">
    <div class="heading">
        <h1>Welcome in blog creating section!</h1>
        <p>Share your experience with other peoples!</p>
    </div>
    <div class="blog-create">
        <form action="/blog" method="POST">
            <div class="box">
                <div class="create-user">
                    <label for="user">Insert your username!</label>
                    <input type="text" name="user" id="user">
                </div>
                <div class="create-title">
                    <label for="title">Name your blog!</label>
                    <input type="text" name="title" id="title">
                </div>
            </div>
            <div class="create-content">
                <label for="content">Add some content!</label>
                <textarea name="content" id="content" cols="100" rows="30"></textarea>
                <input type="submit" value="Publish" id="sub" name="sub">
            </div>
        </form>
    </div>
</div>
</div>


<?php
require __DIR__ . '/../partials/footer.view.php';
