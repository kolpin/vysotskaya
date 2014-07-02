<!DOCTYPE html>
<html lang="ru">
<head>
    <?php include 'head.php'?>
    <script src='js/jquery.montage.min.js'></script>
    <script>
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
        })
    </script>
</head>
<body>
<div class="main">
    <div class="inner">
        <?php include 'header.php'?>
        <div class="relative">
            <div class="select_wrap">
                <ul class="select_nav">
                    <li><a href="#" class="img active"></a></li>
                    <li><a href="#" class="map"></a></li>
                    <li><a href="#" class="calendar"></a></li>
                </ul>
            </div>
            <div class="relative">
                <div class="am-container" id="am-container">
                    <a href="#">
                        <img src="img/tmp/images/1.jpg">
                        <span class="title"><i></i>Позитано и Неаполь<br>с Юлией Высоцкой</span>
                        <span class="opacity"></span>
                    </a>
                    <a href="#">
                        <img src="img/tmp/images/2.jpg">
                        <span class="title"><i></i>Тоскана<br>с Юлией Высоцкой</span>
                        <span class="opacity"></span>
                    </a>
                    <a href="#">
                        <img src="img/tmp/images/3.jpg">
                        <span class="title"><i></i>Западная<br>Швеция</span>
                        <span class="opacity"></span>
                        <span class="new"></span>
                    </a>
                    <a href="#">
                        <img src="img/tmp/images/4.jpg">
                        <span class="title"><i></i>Гастрономия,<br>искусство, культура</span>
                        <span class="opacity"></span>
                    </a>
                    <a href="#">
                        <img src="img/tmp/images/5.jpg">
                        <span class="title"><i></i>Изысканный<br>Пьемонт</span>
                        <span class="opacity"></span>
                    </a>
                    <a href="#">
                        <img src="img/tmp/images/6.jpg">
                        <span class="title"><i></i>Затерянный мир<br>Тосканы</span>
                        <span class="opacity"></span>
                    </a>
                    <a href="#">
                        <img src="img/tmp/images/7.jpg">
                        <span class="title"><i></i>Умбрия — Тоскана</span>
                        <span class="opacity"></span>
                    </a>
                    <a href="#">
                        <img src="img/tmp/images/8.jpg">
                        <span class="title"><i></i>Манящий Прованс</span>
                        <span class="opacity"></span>
                        <span class="new"></span>
                    </a>
                    <a href="#">
                        <img src="img/tmp/images/9.jpg">
                        <span class="title"><i></i>Дордонь — Бордо</span>
                        <span class="opacity"></span>
                    </a>
                    <a href="#">
                        <img src="img/tmp/images/10.jpg">
                        <span class="title"><i></i>Бордо</span>
                        <span class="opacity"></span>
                    </a>
                    <a href="#">
                        <img src="img/tmp/images/11.jpg">
                        <span class="title"><i></i>Сказочный<br>Марракеш</span>
                        <span class="opacity"></span>
                        <span class="new"></span>
                        <span class="weekend"></span>
                    </a>
                    <a href="#">
                        <img src="img/tmp/images/12.jpg">
                        <span class="title"><i></i>Касабланка — Марракеш:<br>океан и кухня</span>
                        <span class="opacity"></span>
                        <span class="new"></span>
                        <span class="weekend"></span>
                    </a>
                    <a href="#">
                        <img src="img/tmp/images/13.jpg">
                        <span class="title"><i></i>Вкус Фландрии</span>
                        <span class="opacity"></span>
                    </a>
                    <a href="#">
                        <img src="img/tmp/images/14.jpg">
                        <span class="title"><i></i>И Бог создал<br>женщину</span>
                        <span class="opacity"></span>
                    </a>
                    <a href="#">
                        <img src="img/tmp/images/15.jpg">
                        <span class="title"><i></i>Секреты<br>Каталонии</span>
                        <span class="opacity"></span>
                    </a>
                    <a href="#">
                        <img src="img/tmp/images/16.jpg">
                        <span class="title"><i></i>Бельгия<br>в стиле модерн</span>
                        <span class="opacity"></span>
                    </a>
                    <a href="#">
                        <img src="img/tmp/images/17.jpg">
                        <span class="title"><i></i>Страна сыра и вина</span>
                        <span class="opacity"></span>
                    </a>
                    <a href="#">
                        <img src="img/tmp/images/18.jpg">
                        <span class="title"><i></i>Спа-гурме-уикенд<br>в Израиле</span>
                        <span class="opacity"></span>
                    </a>
                    <a href="#">
                        <img src="img/tmp/images/19.jpg">
                        <span class="title"><i></i>Гурме-уикенд<br>в Бордо</span>
                        <span class="opacity"></span>
                    </a>
                    <a href="#">
                        <img src="img/tmp/images/20.jpg">
                        <span class="title"><i></i>Словения — Хорватия</span>
                        <span class="opacity"></span>
                    </a>
                    <a href="#">
                        <img src="img/tmp/images/21.jpg">
                        <span class="title"><i></i>Гастрономический<br>Лондон</span>
                        <span class="opacity"></span>
                    </a>
                    <a href="#">
                        <img src="img/tmp/images/22.jpg">
                        <span class="title"><i></i>Эко-гурме-уикенд<br>в Латвии</span>
                        <span class="opacity"></span>
                    </a>
                    <a href="#">
                        <img src="img/tmp/images/23.jpg">
                        <span class="title"><i></i>Тепло ледяной<br>Исландии</span>
                        <span class="opacity"></span>
                    </a>
                    <a href="#" class="soon">
                        <img src="img/tmp/images/24.jpg">
                        <span class="title">Скоро</span>
                        <span class="opacity"></span>
                    </a>
                    <a href="#" class="soon">
                        <img src="img/tmp/images/25.jpg">
                        <span class="title">Скоро</span>
                        <span class="opacity"></span>
                    </a>
                    <a href="#">
                        <img src="img/tmp/images/26.jpg">
                        <span class="title"><i></i>Гастрономическая<br>Грузия</span>
                        <span class="opacity"></span>
                    </a>
                    <a href="#">
                        <img src="img/tmp/images/27.jpg">
                        <span class="title"><i></i>Многоголосие кухонь</span>
                        <span class="opacity"></span>
                    </a>
                </div>
                <div class="clear"></div>
            </div>
        </div>
    </div>
    <?php include 'side-panel.php'?>
</div>
<?php include 'popup.php'?>
</body>
</html>