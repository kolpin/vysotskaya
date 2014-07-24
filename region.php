<!DOCTYPE html>
<html lang="ru">
<head>
    <?php include 'head.php'?>
    <script>
        var current_img = 0,
            click = true;
        $(function() {
            $('.mini_photos a').on("click", function() {
                $('.opacity_popup').show();
                current_img = $(this).data('img');
                showMiniGallery(current_img);
                $('.img_wrapper').fadeIn();
                return false;
            });
            $('.img_wrapper .close_img').hover(function() {
                $('.img_wrapper .opacity').stop(true, true).fadeIn(300);
            }, function() {
                $('.img_wrapper .opacity').stop(true, true).fadeOut(300);
            });
            $('.img_wrapper .close_img, .opacity_popup').on("click", function() {
                $('.opacity_popup, .img_wrapper').fadeOut();
                return false;
            });
            $('.img_wrapper .next').on("click", function() {
                if (!click) return false;
                click = false;
                current_img++;

                if (current_img > $('.img_wrapper img').length) current_img = 1;
                showMiniGallery(current_img);
                return false;
            });
            $('.img_wrapper .prev').on("click", function() {
                if (!click) return false;
                click = false;
                current_img--;

                if (current_img < 1) current_img = $('.img_wrapper img').length;
                showMiniGallery(current_img);
                return false;
            });
        });
        function showMiniGallery(img) {
            $('.img_wrapper img').removeClass('active');
            $('.img_wrapper img[data-image='+img+']').addClass('active');

            $('.img_wrapper img').stop().animate({opacity: 0}, 500, function() {});
            $('.img_wrapper img[data-image='+img+']').stop().animate({opacity: 1}, 500, function() {
                click = true;
            });
        }
        $.preloadImages = function () {
            var images = (typeof arguments[0] == 'object') ? arguments[0] : arguments;
            for (var i = 0; i < images.length; i++) {
                $("<img>").attr("src", images[i]);
            }
        }
    </script>
</head>
<body>
    <div class="main">
        <div class="inner">
            <?php include 'header.php'?>
            <div class="inner_content">
                <div class="left_margin">
                    <h1 class="name_personal"><a href="#"></a>ЗАТЕРЯННЫЙ МИР ТОСКАНЫ</h1>
                </div>
                <div class="relative">
                    <div class="mini_photos">
                        <a href="#" data-img="1">
                            <img src="img/tmp/mi1.png" />
                            <span class="opacity_img"></span>
                            <span class="see"></span>
                        </a>
                        <a href="#" data-img="2">
                            <img src="img/tmp/mi2.png" />
                            <span class="opacity_img"></span>
                            <span class="see"></span>
                        </a>
                        <a href="#" data-img="3">
                            <img src="img/tmp/mi3.png" />
                            <span class="opacity_img"></span>
                            <span class="see"></span>
                        </a>
                        <a href="#" data-img="4">
                            <img src="img/tmp/mi4.png" />
                            <span class="opacity_img"></span>
                            <span class="see"></span>
                        </a>
                        <a href="#" data-img="5">
                            <img src="img/tmp/mi5.png" />
                            <span class="opacity_img"></span>
                            <span class="see"></span>
                        </a>
                        <a href="#" data-img="6">
                            <img src="img/tmp/mi6.png" />
                            <span class="opacity_img"></span>
                            <span class="see"></span>
                        </a>
                        <a href="#" data-img="7">
                            <img src="img/tmp/mi7.png" />
                            <span class="opacity_img"></span>
                            <span class="see"></span>
                        </a>
                        <div class="clear"></div>
                        <div class="country_ico">
                            <div class="italy"></div>
<!--                            <div class="belgium"></div>-->
<!--                            <div class="georgia"></div>-->
<!--                            <div class="israel"></div>-->
<!--                            <div class="iceland"></div>-->
<!--                            <div class="spain"></div>-->
<!--                            <div class="latvia"></div>-->
<!--                            <div class="marokko"></div>-->
<!--                            <div class="france"></div>-->
<!--                            <div class="france_provance"></div>-->
<!--                            <div class="sweden"></div>-->
<!--                            <div class="austria"></div>-->
<!--                            <div class="great_britain"></div>-->
<!--                            <div class="gonkong"></div>-->
<!--                            <div class="switzerland"></div>-->
                        </div>
                    </div>
                    <div class="description_region">
                        Антикварные улочки Ареццо, театральная площадь Сиены, средневековые башни
                        Сансеполькро — все это архитектурные жемчужины, вписанные в идеальный тосканский
                        пейзаж. В мире не так уж много мест, которые могут примерить на себя эпитет
                        «идеальное», но Тоскана — как раз из их числа.<br><br>
                        Тосканская кухня — вещь в себе. Её приёмы просты, как детский букварь, и эффективны
                        за счёт высочайшего качества ингредиентов. Знаменитый тосканский пресный хлеб,
                        ноздреватая буханка со звенящей корочкой, — краеугольный камень доброй половины
                        местных кулинарных достижений. Даже спагетти тосканцы нередко приправляют
                        сухарями, а солью сдабривают ветчину прошутто, которую в соседней Парме считают
                        излишне солёной. Но в этом-то и есть хороший вкус: солёная ветчина и пресный хлеб
                        на тарелке создают идеальную пару. Искать гармонию в повседневной простоте — тут
                        тосканцы впереди планеты всей.<br><br>
                        Может, это и «кухня бедняков» (как часто называют тосканский рацион), но она требует
                        для себя только самого лучшего: оливковое масло с прогретых солнцем холмов, овечьи
                        сыры из Пистойи и Пиенцы, трюфели из Сан-Миниато, молочная ягнятина из Мареммы,
                        сало из Колоннаты, каштаны из Муджелло — эти деликатесы запросто встречаются друг
                        с другом на любом деревенском рынке.<br><br>
                        Тоскана — еще и ведущий итальянский винный регион. Виноград здесь когда-то растили
                        во славу Сената и граждан Рима, так что в своём ремесле виноделы знают толк. Кьянти во
                        фляге с соломенной оплеткой давно стало «рабочей лошадкой» всех итальянских
                        ресторанов-эмигрантов за границей. А вот с аристократическим <i>Vino Nobile di
                        Montepulciano</i>, великолепным <i>Brunello di Montalcino</i>, не говоря уже о «Супертоскане»
                        в лице <i>Sassicaia</i>, <i>Ornellaia</i>, <i>Masseto</i> куда увлекательнее охотиться на местности, изучая
                        с хорошим гидом экспозицию виноградников и винотек. Там, где вино, бывает ещё и сыр;
                        например, овечий пекорино с темной корочкой, омытой молодым вином, попробовав
                        который впору и вовсе просить у местных властей временный вид на жительство.
                    </div>
                    <nav class="travel_nav dark_links">
                        <ul>
                            <li><a href="#" class="program"><i></i>Программа</a></li>
                            <li><a href="#" class="photos"><i></i>Фотографии 14</a></li>
                            <li><a href="#" class="region active"><i></i>Регион</a></li>
                            <li><a href="#" class="reviews"><i></i>Отзывы</a></li>
                            <li><a href="#" class="cost"><i></i>Стоимость</a></li>
                            <li class="empty"></li>
                        </ul>
                        <a href="#" class="features">Почитайте отзывы<br>наших участников<i></i></a>
                    </nav>
                    <div class="clear"></div>
                    <div class="img_wrapper">
                        <a href="#" class="close_img"></a>

                        <div class="half_opacity_right">
                            <a href="#" class="next"></a>
                        </div>


                        <div class="half_opacity_left">
                            <a href="#" class="prev"></a>
                        </div>
                        <div class="opacity"></div>

                        <img src="img/tmp/region/1.jpg" data-image="1"/>
                        <img src="img/tmp/region/2.jpg" data-image="2"/>
                        <img src="img/tmp/region/3.jpg" data-image="3"/>
                        <img src="img/tmp/region/4.jpg" data-image="4"/>
                        <img src="img/tmp/region/5.jpg" data-image="5"/>
                        <img src="img/tmp/region/6.jpg" data-image="6"/>
                        <img src="img/tmp/region/7.jpg" data-image="7"/>
                        <script>
                            $(function() {
                                $.preloadImages(
                                    "img/tmp/region/1.jpg",
                                    "img/tmp/region/2.jpg",
                                    "img/tmp/region/3.jpg",
                                    "img/tmp/region/4.jpg",
                                    "img/tmp/region/5.jpg",
                                    "img/tmp/region/6.jpg",
                                    "img/tmp/region/7.jpg"
                                );
                            })
                        </script>
                    </div>
                </div>
            </div>
        </div>
        <?php include 'side-panel.php'?>
    </div>
    <?php include 'popup.php'?>
</body>
</html>