<!DOCTYPE html>
<html lang="ru">
<head>
    <?php include 'head.php'?>
    <script>
        $(function() {
            <?php if ($_GET['tour_id']): ?>
                $('.opacity_popup, .popup_order_success').fadeIn();
            <?php endif;?>
            if (checkClassOrder()) $('.order_form .send_request').addClass('success');
            else $('.order_form .send_request').removeClass('success');

            $('.input_order').on("change keyup", function() {
                if (checkClassOrder()) $('.order_form .send_request').addClass('success');
                else $('.order_form .send_request').removeClass('success');
                if ($(this).attr('name') == 'user_email'){
                    if (!isValidEmailAddress($(this).val())) $(this).addClass('error');
                    else $(this).removeClass('error');
                }
                else {
                    $(this).removeClass('error');
                }
            });
            $('.order_form').on("submit", function() {
                return validateFormOrder();
            });
            $('.order_form .send_request').on("mouseover", function() {
                if ($(this).hasClass('success')) {
                    var tag_i = $(this).find('i');
                    tag_i.stop(true, true).animate({'margin-left': 32+'px'}, 200, function() {
                        tag_i.stop(true, true).animate({'margin-left': 14+'px'}, 200);
                    });
                }
            });
        });
        function validateFormOrder() {
            var user_name = $('.order_form input[name=user_name]').val();
            var user_email = $('.order_form input[name=user_email]').val();
            var phone = $('.order_form input[name=phone]').val();
            var valid = true;

            if (user_name.trim() == '') { $('.order_form input[name=user_name]').addClass('error'); valid = false; }
            else $('.order_form input[name=user_name]').removeClass('error');

            if (user_email.trim() == '' || !isValidEmailAddress(user_email)) { $('.order_form input[name=user_email]').addClass('error'); valid = false; }
            else $('.order_form input[name=user_email]').removeClass('error');

            if (phone.trim() == '') { $('.order_form input[name=phone]').addClass('error'); valid = false; }
            else $('.order_form input[name=phone]').removeClass('error');

            return valid;
        }
        function checkClassOrder() {
            var user_name = $('.order_form input[name=user_name]').val();
            var user_email = $('.order_form input[name=user_email]').val();
            var phone = $('.order_form input[name=phone]').val();
            var valid = true;

            if (user_name.trim() == '') valid = false;
            if (user_email.trim() == '' || !isValidEmailAddress(user_email)) valid = false;
            if (phone.trim() == '') valid = false;
            return valid;
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
                    <div class="bid_wrapper">
                        <div class="price_hold">
                            <span>4 400 <i class="euro"></i></span>
                            <a href="#" class="to_order">Заяка<i></i></a>
                        </div>
                        <div class="dates">
                            <p>12—17 апреля</p>
                            <p>17—22 апреля</p>
                        </div>
                        <div class="various_payment">
                            <p>Варианты оплаты:</p>
                            <p><a href="#">банковский перевод<i></i></a></p>
                            <p><a href="#" class="pay_card">картой онлайн<i></i></a></p>
                            <p>картой в офисе</p>
                            <p>наличными в офисе</p>
                        </div>
                    </div>
                    <div class="description_cost">
                        <div class="text_hold">
                            <div class="title">В СТОИМОСТЬ ВКЛЮЧЕНО</div>
                            Завтраки на вилле, где организовано проживание; обеды и ужины в лучших ресторанах
                            региона.<br><br>
                            3 кулинарных мастер-класса с итальянскими шеф-поварами.<br><br>
                            Участие в празднествах:
                            <ul>
                                <li>12—17 апреля — <i>Domenica delle Palme</i> (или Вербное Воскресенье в русской православной традиции);</li>
                                <li>17—22 апреля — <i>Scoppio del Carro</i> (старинный флорентийский ритуал Взрыв повозки, проходящий в день празднования Пасхи).</li>
                            </ul>
                            Посещение знаковых мест Тосканы: Флоренция, Сиена, Монтепульчано, Ареццо, Кортона со
                            знатоками региона.<br><br>
                            Дегустации местных продуктов в хозяйствах региона, экскурсии на винодельни, сыроварни,
                            энотеки, рынки, а также посещение фермерского рынка.<br><br>
                            Транспортное обслуживание (комфортный микроавтобус на 8 человек).<br><br>
                            Перевод с итальянского и английского языков на русский в течение всего путешествия.<br><br>
                            Предоставление подробных рецептов с детализацией приготовления.<br><br>
                            Дипломы и подарки.
                        </div>
                        <div class="text_hold last">
                            <div class="title">ДОПОЛНИТЕЛЬНО ОПЛАЧИВАЮТСЯ</div>
                            Виза и авиабилеты Москва — Рим (туда и обратно). Медицинский страховой полис
                            выезжающего за рубеж. (Если необходимо, компания-партнёр, с которой у нас заключён
                            контракт, поможет с оформлением всех нужных документов.)
                        </div>
                    </div>
                    <nav class="travel_nav dark_links">
                        <ul>
                            <li><a href="#" class="program"><i></i>Программа</a></li>
                            <li><a href="#" class="photos"><i></i>Фотографии 14</a></li>
                            <li><a href="#" class="region"><i></i>Регион</a></li>
                            <li><a href="#" class="reviews"><i></i>Отзывы</a></li>
                            <li><a href="#" class="cost active"><i></i>Стоимость</a></li>
                            <li class="empty"></li>
                        </ul>
                    </nav>
                    <div class="clear"></div>
                </div>
            </div>
        </div>
        <?php include 'side-panel.php'?>
    </div>
    <?php include 'popup.php'?>
    <div class="img_wrapper">

    </div>
</body>
</html>