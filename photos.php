<!DOCTYPE html>
<html lang="ru">
<head>
    <?php include 'head.php'?>
    <script src='js/photos_slider.js'></script>
</head>
<body>
    <div class="main">
        <div class="inner">
            <?php include 'header.php'?>
            <div class="inner_content photos">
                <div class="left_margin">
                    <h1 class="name_personal"><a href="#"></a>ЗАТЕРЯННЫЙ МИР ТОСКАНЫ</h1>
                </div>
                <div class="relative" style="">
                    <div class="photos_wrap">
                        <a href="#" class="fly-box" data-img="1">
                            <img src="img/tmp/i1.png" alt="" />
                            <span class="see"></span>
                            <span class="opacity_img"></span>
                        </a>
                        <a href="#" class="fly-box" data-img="2">
                            <img src="img/tmp/i2.png" alt="" />
                            <span class="see"></span>
                            <span class="opacity_img"></span>
                        </a>
                        <a href="#" class="fly-box" data-img="3">
                            <img src="img/tmp/i3.png" alt="" />
                            <span class="see"></span>
                            <span class="opacity_img"></span>
                        </a>
                        <a href="#" class="fly-box" data-img="4">
                            <img src="img/tmp/i4.png" alt="" />
                            <span class="see"></span>
                            <span class="opacity_img"></span>
                        </a>
                        <a href="#" class="fly-box" data-img="5">
                            <img src="img/tmp/i5.png" alt="" />
                            <span class="see"></span>
                            <span class="opacity_img"></span>
                        </a>
                        <a href="#" class="fly-box" data-img="6">
                            <img src="img/tmp/i6.png" alt="" />
                            <span class="see"></span>
                            <span class="opacity_img"></span>
                        </a>
                        <a href="#" class="fly-box" data-img="7">
                            <img src="img/tmp/i7.png" alt="" />
                            <span class="see"></span>
                            <span class="opacity_img"></span>
                        </a>
                        <a href="#" class="fly-box" data-img="8">
                            <img src="img/tmp/i8.png" alt="" />
                            <span class="see"></span>
                            <span class="opacity_img"></span>
                        </a>
                        <a href="#" class="fly-box" data-img="9">
                            <img src="img/tmp/i9.png" alt="" />
                            <span class="see"></span>
                            <span class="opacity_img"></span>
                        </a>
                        <a href="#" class="fly-box" data-img="10">
                            <img src="img/tmp/i10.png" alt="" />
                            <span class="see"></span>
                            <span class="opacity_img"></span>
                        </a>
                        <a href="#" class="fly-box" data-img="11">
                            <img src="img/tmp/i11.png" alt="" />
                            <span class="see"></span>
                            <span class="opacity_img"></span>
                        </a>
                        <a href="#" class="fly-box" data-img="12">
                            <img src="img/tmp/i12.png" alt="" />
                            <span class="see"></span>
                            <span class="opacity_img"></span>
                        </a>
                        <a href="#" class="fly-box" data-img="13">
                            <img src="img/tmp/i13.png" alt="" />
                            <span class="see"></span>
                            <span class="opacity_img"></span>
                        </a>
                    </div>
                    <nav class="travel_nav dark_links">
                        <ul>
                            <li><a href="#" class="program"><i></i>Программа</a></li>
                            <li><span class="photos active"><i></i>Фотографии 13</span></li>
                            <li><a href="#" class="region"><i></i>Регион</a></li>
                            <li><a href="#" class="reviews"><i></i>Отзывы</a></li>
                            <li><a href="#" class="cost"><i></i>Стоимость</a></li>
                            <li class="empty"></li>
                        </ul>
                        <div class="photos_reg"><a href="#" class="features">Познакомьтесь<br>с особенностями региона<i></i></a></div>
                    </nav>
                    <div class="clear"></div>
                </div>
            </div>
            <div class="photo_slider">
                <a href="#" class="close_img"></a>

                <div class="half_opacity_right">
                    <a href="#" class="next"></a>
                </div>


                <div class="half_opacity_left">
                    <a href="#" class="prev"></a>
                </div>


                <div class="opacity"></div>
                <div class="jcarousel_full">
                    <ul>
                        <li><img src="img/tmp/photos/1.jpg" width="1500" height="1150" class="images" data-img="1" /></li>
                        <li><img src="img/tmp/photos/2.jpg" width="2500" height="1667" class="images" data-img="2" /></li>
                        <li><img src="img/tmp/photos/3.jpg" width="2500" height="1423" class="images" data-img="3" /></li>
                        <li><img src="img/tmp/photos/4.jpg" width="1600" height="1065" class="images" data-img="4" /></li>
                        <li><img src="img/tmp/photos/5.jpg" width="2500" height="1654" class="images" data-img="5" /></li>
                        <li><img src="img/tmp/photos/6.jpg" width="1900" height="1225" class="images" data-img="6" /></li>
                        <li><img src="img/tmp/photos/7.jpg" width="2500" height="1675" class="images" data-img="7" /></li>
                        <li><img src="img/tmp/photos/8.jpg" width="2500" height="1664" class="images" data-img="8" /></li>
                        <li><img src="img/tmp/photos/9.jpg" width="2500" height="1652" class="images" data-img="9" /></li>
                        <li><img src="img/tmp/photos/10.jpg" width="1900" height="1188" class="images" data-img="10" /></li>
                        <li><img src="img/tmp/photos/11.jpg" width="2500" height="1424" class="images" data-img="11" /></li>
                        <li><img src="img/tmp/photos/12.jpg" width="1900" height="2020" class="images" data-img="12" /></li>
                        <li><img src="img/tmp/photos/13.jpg" width="1900" height="1188" class="images" data-img="13" /></li>
                    </ul>
                </div>
                <p class="jcarousel-pagination"></p>
                <script>
                    $(function() {
                        $.preloadImages(
                            "img/tmp/photos/1.jpg",
                            "img/tmp/photos/2.jpg",
                            "img/tmp/photos/3.jpg",
                            "img/tmp/photos/5.jpg",
                            "img/tmp/photos/6.jpg",
                            "img/tmp/photos/7.jpg",
                            "img/tmp/photos/8.jpg",
                            "img/tmp/photos/9.jpg",
                            "img/tmp/photos/10.jpg",
                            "img/tmp/photos/11.jpg",
                            "img/tmp/photos/12.jpg",
                            "img/tmp/photos/13.jpg"
                        );
                    })
                </script>
            </div>
        </div>
        <?php include 'side-panel.php'?>
    </div>
    <?php include 'popup.php'?>
</body>
</html>