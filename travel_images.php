<!DOCTYPE html>
<html lang="ru">
<head>
    <?php include 'head.php'?>
    <script src='js/jquery.montage.min.js'></script>
    <script>
//        var current_img = 0,
//            click = true;
        $(function() {
            var $container 	= $('#am-container'),
                $wrap_imgs  = $('#am-container a'),
                $imgs		= $container.find('img').hide(),
                totalImgs	= $imgs.length,
                cnt			= 0;

            $wrap_imgs.each(function(i) {
                var $img	= $('img', this);
                var $title	= $('.title', this);
                $('<img/>').load(function() {
                    ++cnt;
                    if( cnt === totalImgs ) {
                        $imgs.show();
                        $container.montage({
                            fillLastRow				: true,
                            alternateHeight			: true,
                            minw                    : 198,
                            minh                    : 198,
                            alternateHeightRange	: {
                                min	: 198,
                                max	: 398
                            },
                            alternateWidthRange	: {
                                min	: 198,
                                max	: 598
                            }
                        });
                    }
                }).attr('src',$img.attr('src'));
                $title.css({'margin-top': -($title.height()/2)+'px', 'margin-left': -($title.width()/2)+'px'});
            });

//            $('.am-container a').on("click", function() {
//                $('.opacity_popup').show();
//                current_img = $(this).data('img');
//                showMiniGallery(current_img);
//                $('.img_wrapper').fadeIn();
//                return false;
//            });
//            $('.img_wrapper .close_img').hover(function() {
//                $('.img_wrapper .opacity').stop(true, true).fadeIn(300);
//            }, function() {
//                $('.img_wrapper .opacity').stop(true, true).fadeOut(300);
//            });
//            $('.img_wrapper .close_img, .opacity_popup').on("click", function() {
//                $('.opacity_popup, .img_wrapper').fadeOut();
//                return false;
//            });
//            $('.img_wrapper .next').on("click", function() {
//                if (!click) return false;
//                click = false;
//                current_img++;
//
//                if (current_img > $('.img_wrapper img').length) current_img = 1;
//                showMiniGallery(current_img);
//                return false;
//            });
//            $('.img_wrapper .prev').on("click", function() {
//                if (!click) return false;
//                click = false;
//                current_img--;
//
//                if (current_img < 1) current_img = $('.img_wrapper img').length;
//                showMiniGallery(current_img);
//                return false;
//            });
        });
//        function showMiniGallery(img) {
//            $('.img_wrapper img').removeClass('active');
//            $('.img_wrapper img[data-image='+img+']').addClass('active');
//
//            $('.img_wrapper img').stop().animate({opacity: 0}, 500, function() {});
//            $('.img_wrapper img[data-image='+img+']').stop().animate({opacity: 1}, 500, function() {
//                click = true;
//            });
//        }
    </script>
</head>
<body>
<div class="main">
    <div class="inner">
        <?php include 'header.php'?>
        <div class="relative">
            <div class="select_wrap">
                <ul class="select_nav">
                    <li><span class="img active"></span></li>
                    <li><a href="#" class="map"></a></li>
                    <li><a href="#" class="calendar"></a></li>
                </ul>
            </div>
            <div class="relative">
                <div class="am-container" id="am-container">
                    <a href="#" data-img="1">
                        <img src="img/tmp/images/1.jpg">
                        <span class="title"><i></i>Позитано и Неаполь<br>с Юлией Высоцкой</span>
                        <span class="opacity"></span>
                    </a>
                    <a href="#" data-img="2">
                        <img src="img/tmp/images/2.jpg">
                        <span class="title"><i></i>Тоскана<br>с Юлией Высоцкой</span>
                        <span class="opacity"></span>
                    </a>
                    <a href="#" data-img="3">
                        <img src="img/tmp/images/3.jpg">
                        <span class="title"><i></i>Западная<br>Швеция</span>
                        <span class="opacity"></span>
                        <span class="new"></span>
                    </a>
                    <a href="#" data-img="4">
                        <img src="img/tmp/images/4.jpg">
                        <span class="title"><i></i>Гастрономия,<br>искусство, культура</span>
                        <span class="opacity"></span>
                    </a>
                    <a href="#" data-img="5">
                        <img src="img/tmp/images/5.jpg">
                        <span class="title"><i></i>Изысканный<br>Пьемонт</span>
                        <span class="opacity"></span>
                    </a>
                    <a href="#" data-img="6">
                        <img src="img/tmp/images/6.jpg">
                        <span class="title"><i></i>Затерянный мир<br>Тосканы</span>
                        <span class="opacity"></span>
                    </a>
                    <a href="#" data-img="7">
                        <img src="img/tmp/images/7.jpg">
                        <span class="title"><i></i>Умбрия — Тоскана</span>
                        <span class="opacity"></span>
                    </a>
                    <a href="#" data-img="8">
                        <img src="img/tmp/images/8.jpg">
                        <span class="title"><i></i>Манящий Прованс</span>
                        <span class="opacity"></span>
                        <span class="new"></span>
                    </a>
                    <a href="#" data-img="9">
                        <img src="img/tmp/images/9.jpg">
                        <span class="title"><i></i>Дордонь — Бордо</span>
                        <span class="opacity"></span>
                    </a>
                    <a href="#" data-img="10">
                        <img src="img/tmp/images/10.jpg">
                        <span class="title"><i></i>Бордо</span>
                        <span class="opacity"></span>
                    </a>
                    <a href="#" data-img="11">
                        <img src="img/tmp/images/11.jpg">
                        <span class="title"><i></i>Сказочный<br>Марракеш</span>
                        <span class="opacity"></span>
                        <span class="new"></span>
                        <span class="weekend"></span>
                    </a>
                    <a href="#" data-img="12">
                        <img src="img/tmp/images/12.jpg">
                        <span class="title"><i></i>Касабланка — Марракеш:<br>океан и кухня</span>
                        <span class="opacity"></span>
                        <span class="new"></span>
                        <span class="weekend"></span>
                    </a>
                    <a href="#" data-img="13">
                        <img src="img/tmp/images/13.jpg">
                        <span class="title"><i></i>Вкус Фландрии</span>
                        <span class="opacity"></span>
                    </a>
                    <a href="#" data-img="14">
                        <img src="img/tmp/images/14.jpg">
                        <span class="title"><i></i>И Бог создал<br>женщину</span>
                        <span class="opacity"></span>
                    </a>
                    <a href="#" data-img="15">
                        <img src="img/tmp/images/15.jpg">
                        <span class="title"><i></i>Секреты<br>Каталонии</span>
                        <span class="opacity"></span>
                    </a>
                    <a href="#" data-img="16">
                        <img src="img/tmp/images/16.jpg">
                        <span class="title"><i></i>Бельгия<br>в стиле модерн</span>
                        <span class="opacity"></span>
                    </a>
                    <a href="#" data-img="17">
                        <img src="img/tmp/images/17.jpg">
                        <span class="title"><i></i>Страна сыра и вина</span>
                        <span class="opacity"></span>
                    </a>
                    <a href="#" data-img="18">
                        <img src="img/tmp/images/18.jpg">
                        <span class="title"><i></i>Спа-гурме-уикенд<br>в Израиле</span>
                        <span class="opacity"></span>
                    </a>
                    <a href="#" data-img="19">
                        <img src="img/tmp/images/19.jpg">
                        <span class="title"><i></i>Гурме-уикенд<br>в Бордо</span>
                        <span class="opacity"></span>
                    </a>
                    <a href="#" data-img="20">
                        <img src="img/tmp/images/20.jpg">
                        <span class="title"><i></i>Словения — Хорватия</span>
                        <span class="opacity"></span>
                    </a>
                    <a href="#" data-img="21">
                        <img src="img/tmp/images/21.jpg">
                        <span class="title"><i></i>Гастрономический<br>Лондон</span>
                        <span class="opacity"></span>
                    </a>
                    <a href="#" data-img="22">
                        <img src="img/tmp/images/22.jpg">
                        <span class="title"><i></i>Эко-гурме-уикенд<br>в Латвии</span>
                        <span class="opacity"></span>
                    </a>
                    <a href="#" data-img="23">
                        <img src="img/tmp/images/23.jpg">
                        <span class="title"><i></i>Тепло ледяной<br>Исландии</span>
                        <span class="opacity"></span>
                    </a>
                    <a href="#" class="soon" data-img="24">
                        <img src="img/tmp/images/24.jpg">
                        <span class="title">Скоро</span>
                        <span class="opacity"></span>
                    </a>
                    <a href="#" class="soon" data-img="25">
                        <img src="img/tmp/images/25.jpg">
                        <span class="title">Скоро</span>
                        <span class="opacity"></span>
                    </a>
                    <a href="#" data-img="26">
                        <img src="img/tmp/images/26.jpg">
                        <span class="title"><i></i>Гастрономическая<br>Грузия</span>
                        <span class="opacity"></span>
                    </a>
                    <a href="#" data-img="27">
                        <img src="img/tmp/images/27.jpg">
                        <span class="title"><i></i>Многоголосие кухонь</span>
                        <span class="opacity"></span>
                    </a>
                </div>
                <div class="clear"></div>
<!--                <div class="img_wrapper">-->
<!--                    <a href="#" class="close_img"></a>-->
<!---->
<!--                    <div class="half_opacity_right">-->
<!--                        <a href="#" class="next"></a>-->
<!--                    </div>-->
<!---->
<!---->
<!--                    <div class="half_opacity_left">-->
<!--                        <a href="#" class="prev"></a>-->
<!--                    </div>-->
<!--                    <div class="opacity"></div>-->
<!---->
<!--                    <img src="img/tmp/images/1.jpg" data-image="1"/>-->
<!--                    <img src="img/tmp/images/2.jpg" data-image="2"/>-->
<!--                    <img src="img/tmp/images/3.jpg" data-image="3"/>-->
<!--                    <img src="img/tmp/images/4.jpg" data-image="4"/>-->
<!--                    <img src="img/tmp/images/5.jpg" data-image="5"/>-->
<!--                    <img src="img/tmp/images/6.jpg" data-image="6"/>-->
<!--                    <img src="img/tmp/images/7.jpg" data-image="7"/>-->
<!--                    <img src="img/tmp/images/8.jpg" data-image="8"/>-->
<!--                    <img src="img/tmp/images/9.jpg" data-image="9"/>-->
<!--                    <img src="img/tmp/images/10.jpg" data-image="10"/>-->
<!--                    <img src="img/tmp/images/11.jpg" data-image="11"/>-->
<!--                    <img src="img/tmp/images/12.jpg" data-image="12"/>-->
<!--                    <img src="img/tmp/images/13.jpg" data-image="13"/>-->
<!--                    <img src="img/tmp/images/14.jpg" data-image="14"/>-->
<!--                    <img src="img/tmp/images/15.jpg" data-image="15"/>-->
<!--                    <img src="img/tmp/images/16.jpg" data-image="16"/>-->
<!--                    <img src="img/tmp/images/17.jpg" data-image="17"/>-->
<!--                    <img src="img/tmp/images/18.jpg" data-image="18"/>-->
<!--                    <img src="img/tmp/images/19.jpg" data-image="19"/>-->
<!--                    <img src="img/tmp/images/20.jpg" data-image="20"/>-->
<!--                    <img src="img/tmp/images/21.jpg" data-image="21"/>-->
<!--                    <img src="img/tmp/images/22.jpg" data-image="22"/>-->
<!--                    <img src="img/tmp/images/23.jpg" data-image="23"/>-->
<!--                    <img src="img/tmp/images/24.jpg" data-image="24"/>-->
<!--                    <img src="img/tmp/images/25.jpg" data-image="25"/>-->
<!--                    <img src="img/tmp/images/26.jpg" data-image="26"/>-->
<!--                    <img src="img/tmp/images/27.jpg" data-image="27"/>-->
<!--                </div>-->
            </div>
        </div>
    </div>
    <?php include 'side-panel.php'?>
</div>
<?php include 'popup.php'?>
</body>
</html>