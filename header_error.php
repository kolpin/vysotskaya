<header>
    <div class="header_main">
        <?php if ($_SERVER['PHP_SELF'] == '/e403.php' || $_SERVER['PHP_SELF'] == '/e500.php'): ?>
            <div id="logo_error"></div>
        <?php elseif($_SERVER['PHP_SELF'] == '/e404.php' || $_SERVER['PHP_SELF'] == '/e504.php'): ?>
            <a href="/" id="logo"></a>
        <?php endif;?>
    </div>
</header>