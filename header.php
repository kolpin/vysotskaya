<header>
    <div class="header_main">
        <?php if ($_SERVER['PHP_SELF'] == '/main.php'): ?>
            <div id="logo"></div>
        <?php else: ?>
            <a href="/" id="logo"></a>
        <?php endif;?>
        <nav class="main_nav">
            <ul>
                <li>
                    <?php if ($_SERVER['PHP_SELF'] == '/travel.php'): ?>
                        <span>Путешествия</span>
                    <?php else: ?>
                        <a href="#" <?php if ($_SERVER['PHP_SELF'] == '/cost.php' || $_SERVER['PHP_SELF'] == '/photos.php' || $_SERVER['PHP_SELF'] == '/region.php' || $_SERVER['PHP_SELF'] == '/reviews.php' || $_SERVER['PHP_SELF'] == '/travel_images.php' || $_SERVER['PHP_SELF'] == '/calendar.php' || $_SERVER['PHP_SELF'] == '/travel_map.php'): ?>class="active"<?php endif?>>Путешествия</a>
                    <?php endif?>
                <?php if ($_SERVER['PHP_SELF'] == '/video.php' || $_SERVER['PHP_SELF'] == '/travel.php' || $_SERVER['PHP_SELF'] == '/photos.php' || $_SERVER['PHP_SELF'] == '/region.php' || $_SERVER['PHP_SELF'] == '/reviews.php' || $_SERVER['PHP_SELF'] == '/certificate.php' || $_SERVER['PHP_SELF'] == '/travel_images.php' || $_SERVER['PHP_SELF'] == '/calendar.php' || $_SERVER['PHP_SELF'] == '/travel_map.php'): ?>
                    <ul class="subs">
                        <li>
                            <?php if($_SERVER['PHP_SELF'] == '/certificate.php'): ?>
                                <span>Сертификат</span>
                            <?php else: ?>
                                <a href="#">Сертификат</a>
                            <?php endif;?>
                        </li>
                        <li>
                            <?php if($_SERVER['PHP_SELF'] == '/video.php'): ?>
                                <span>Видео</span>
                            <?php else: ?>
                                <a href="#">Видео</a>
                            <?php endif?>
                        </li>
                    </ul>
                <?php endif;?>
                </li>
                <li>
                    <?php if ($_SERVER['PHP_SELF'] == '/company.php'):?>
                        <span>Компания</span>
                    <?php else: ?>
                        <a href="#" <?php if ($_SERVER['PHP_SELF'] == '/personal.php'): ?>class="active"<?php endif?>>Компания</a>
                    <?php endif;?>
                </li>
                <li>
                    <?php if ($_SERVER['PHP_SELF'] == '/chef.php'): ?>
                        <span>Шеф-повара</span>
                    <?php else: ?>
                        <a href="#">Шеф-повара</a>
                    <?php endif?>
                </li>
                <li>
                    <?php if ($_SERVER['PHP_SELF'] == '/partnerships.php'):?>
                        <span>Партнеры</span>
                    <?php else: ?>
                        <a href="#" <?php if ($_SERVER['PHP_SELF'] == '/cooperation.php'): ?>class="active"<?php endif?>>Партнеры</a>
                    <?php endif?>
                </li>
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