<!DOCTYPE html>
<html lang="ru">
<head>
    <?php include 'head.php'?>
    <script>
        $(function() {
            if (checkClassContactsInformation()) $('.cont_info .button_next').addClass('success');
            else $('.cont_info .button_next').removeClass('success');

            $('.input_contacts').on("change keyup", function() {
                if (checkClassContactsInformation()) $('.cont_info .button_next').addClass('success');
                else $('.cont_info .button_next').removeClass('success');
                $(this).removeClass('error');
            });
            $('.cont_info').on("submit", function() {
                return validateFormContactsInformation();
            });
            $('.cont_info .button_next').on("mouseover", function() {
                if ($(this).hasClass('success')) {
                    var tag_i = $(this).find('i');
                    tag_i.stop(true, true).animate({'margin-left': 32+'px'}, 200, function() {
                        tag_i.stop(true, true).animate({'margin-left': 14+'px'}, 200);
                    });
                }
            });
        });
        function validateFormContactsInformation() {
            var post_index = $('.cont_info input[name=post_index]').val();
            var country = $('.cont_info input[name=country]').val();
            var city = $('.cont_info input[name=city]').val();
            var address = $('.cont_info input[name=address]').val();
            var valid = true;

            if (post_index.trim() == '') { $('.cont_info input[name=post_index]').addClass('error'); valid = false; }
            else $('.cont_info input[name=post_index]').removeClass('error');

            if (country.trim() == '') { $('.cont_info input[name=country]').addClass('error'); valid = false; }
            else $('.cont_info input[name=country]').removeClass('error');

            if (city.trim() == '') { $('.cont_info input[name=city]').addClass('error'); valid = false; }
            else $('.cont_info input[name=city]').removeClass('error');

            if (address.trim() == '') { $('.cont_info input[name=address]').addClass('error'); valid = false; }
            else $('.cont_info input[name=address]').removeClass('error');

            return valid;
        }
        function checkClassContactsInformation() {
            var post_index = $('.cont_info input[name=post_index]').val();
            var country = $('.cont_info input[name=country]').val();
            var city = $('.cont_info input[name=city]').val();
            var address = $('.cont_info input[name=address]').val();
            var valid = true;
            if (post_index.trim() == '') valid = false;
            if (country.trim() == '') valid = false;
            if (city.trim() == '') valid = false;
            if (address.trim() == '') valid = false;
            return valid;
        }
    </script>
</head>
<body>
    <div class="main">
        <div class="inner">
            <?php include 'header_order.php'?>
            <div class="inner_content">
                <div class="relative">
                    <div class="left_margin"><h1 class="name_personal"><a href="#"></a>ДОП. КОНТАКТНАЯ ИНФОРМАЦИЯ</h1></div>
                    <div class="relative">
                        <div class="form_contacts">
                            <form class="cont_info">
                                <table>
                                    <tr>
                                        <td><input type="text" class="input_contacts post_index" name="post_index" /></td>
                                        <td class="title_td">— индекс места жительства</td>
                                    </tr>
                                    <tr>
                                        <td><input type="text" class="input_contacts" name="country" /></td>
                                        <td class="title_td">— страна проживания</td>
                                    </tr>
                                    <tr>
                                        <td><input type="text" class="input_contacts" name="city" /></td>
                                        <td class="title_td">— город проживания</td>
                                    </tr>
                                    <tr>
                                        <td><input type="text" class="input_contacts" name="address" /></td>
                                        <td class="title_td">— адрес места жительства</td>
                                    </tr>
                                </table>
                                <button class="button_next">Далее<i></i></button>
                            </form>
                        </div>
                        <div class="hint hint_index">
                            Если не можете вспомнить
                            индекс, воспользуйтесь сайтом
                            <a href="#">www.moscowindex.ru/rus/<i></i></a>
                            или поисковыми системами
                            (Яндекс и Google).
                        </div>
                        <div class="hint">
                            Напишите адрес, идентичный
                            тому, что был указан в договоре
                            с банком, выдавшим вам карту.
                        </div>
                        <div class="clear"></div>
                    </div>
                </div>
            </div>
        </div>
        <?php include 'side-panel.php'?>
    </div>
<?php include 'popup.php'?>
</body>
</html>