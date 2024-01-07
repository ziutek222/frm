<body>
    <div class="container">
        <div class="navbar">
            <div class="logo">
                logo
            </div>
            <div class="go-to">
                <a href="/">Home</a>
                <a href="/blog">Blog</a>
                <a href="/contact">Contact</a>
                <a href="/about">About Us</a>
            </div>
            <div class="log-in">
                <?php if ($_SESSION['user'] ?? false) : ?>
                    <a class="user-center" href="/user/info"><?= $_SESSION['user']['email'] ?></a>
                <?php else : ?>
                    <a href="/login">Log in</a>
                    <a href="/register">Register</a>
                <?php endif; ?>
            </div>
        </div>