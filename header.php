<header>
    <div class="header_main">
        <?php if ($_SERVER['PHP_SELF'] == '/main.php'): ?>
            <div id="logo"></div>
        <?php else: ?>
            <a href="/" id="logo"></a>
        <?php endif;?>
        <nav class="main_nav">
            <ul>
                <li><a href="#" <?php if ($_SERVER['PHP_SELF'] == '/travel.php' || $_SERVER['PHP_SELF'] == '/photos.php' || $_SERVER['PHP_SELF'] == '/region.php' || $_SERVER['PHP_SELF'] == '/reviews.php' || $_SERVER['PHP_SELF'] == '/travel_images.php'): ?>class="active"<?php endif?>>Путешествия</a>
                <?php if ($_SERVER['PHP_SELF'] == '/video.php' || $_SERVER['PHP_SELF'] == '/travel.php' || $_SERVER['PHP_SELF'] == '/photos.php' || $_SERVER['PHP_SELF'] == '/region.php' || $_SERVER['PHP_SELF'] == '/reviews.php' || $_SERVER['PHP_SELF'] == '/certificate.php' || $_SERVER['PHP_SELF'] == '/travel_images.php'): ?>
                    <ul class="subs">
                        <li>
                            <a href="#" <?php if($_SERVER['PHP_SELF'] == '/certificate.php'): ?>class="active"<?php endif; ?>>Сертификат</a>
                        </li>
                        <li>
                            <a href="#" <?php if($_SERVER['PHP_SELF'] == '/video.php'): ?>class="active"<?php endif; ?>>Видео</a>
                        </li>
                    </ul>
                <?php endif;?>
                </li>
                <li><a href="#" <?php if ($_SERVER['PHP_SELF'] == '/company.php' || $_SERVER['PHP_SELF'] == '/personal.php'): ?>class="active"<?php endif?>>Компания</a></li>
                <li><a href="#" <?php if ($_SERVER['PHP_SELF'] == '/chef.php'): ?>class="active"<?php endif?>>Шеф-повара</a></li>
                <li><a href="#" <?php if ($_SERVER['PHP_SELF'] == '/partnerships.php' || $_SERVER['PHP_SELF'] == '/cooperation.php'): ?>class="active"<?php endif?>>Партнеры</a></li>
            </ul>
        </nav>
        <nav class="socials">
            <ul>
                <li class="no_margin_left"><a href="#" class="tripadvisor"></a></li>
                <li><a href="#" class="vk"></a></li>
                <li><a href="#" class="fb"></a></li>
                <li><a href="#" class="instagram"><span>491</span></a></li>
            </ul>
        </nav>
    </div>
</header>