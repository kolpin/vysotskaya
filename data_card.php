<!DOCTYPE html>
<html lang="ru">
<head>
    <?php include 'head.php'?>
    <script>
        $(function() {
            if (checkClassDataCard()) $('.data_card_form .button_next').addClass('success');
            else $('.data_card_form .button_next').removeClass('success');

            $('.input_contacts').on("change keyup", function() {
                if (checkClassDataCard()) $('.data_card_form .button_next').addClass('success');
                else $('.data_card_form .button_next').removeClass('success');
                $(this).removeClass('error');
            });
            $('.data_card_form').on("submit", function() {
                return validateFormDataCard();
            });
            $('.data_card_form .button_next').on("mouseover", function() {
                if ($(this).hasClass('success')) {
                    var tag_i = $(this).find('i');
                    tag_i.stop(true, true).animate({'margin-left': 32+'px'}, 200, function() {
                        tag_i.stop(true, true).animate({'margin-left': 14+'px'}, 200);
                    });
                }
            });
        });
        function validateFormDataCard() {
            var symb = $('.selection li a.active').data('symbol');
            var name_bank = $('.data_card_form input[name=name_bank]').val();
            var month = $('.data_card_form input[name=month]').val();
            var year = $('.data_card_form input[name=year]').val();
            var name_card = $('.data_card_form input[name=name_card]').val();
            var code = $('.data_card_form input[name=code]').val();
            var valid = true;

            if (name_bank.trim() == '') { $('.data_card_form input[name=name_bank]').addClass('error'); valid = false; }
            else $('.data_card_form input[name=name_bank]').removeClass('error');

            if (symb == 's16') {
                var num_card_1 = $('.data_card_form input[name=num_card_1]').val();
                var num_card_2 = $('.data_card_form input[name=num_card_2]').val();
                var num_card_3 = $('.data_card_form input[name=num_card_3]').val();
                var num_card_4 = $('.data_card_form input[name=num_card_4]').val();

                if (num_card_1.trim() == '') { $('.data_card_form input[name=num_card_1]').addClass('error'); valid = false; }
                else $('.data_card_form input[name=num_card_1]').removeClass('error');
                if (num_card_2.trim() == '') { $('.data_card_form input[name=num_card_2]').addClass('error'); valid = false; }
                else $('.data_card_form input[name=num_card_2]').removeClass('error');
                if (num_card_3.trim() == '') { $('.data_card_form input[name=num_card_3]').addClass('error'); valid = false; }
                else $('.data_card_form input[name=num_card_3]').removeClass('error');
                if (num_card_4.trim() == '') { $('.data_card_form input[name=num_card_4]').addClass('error'); valid = false; }
                else $('.data_card_form input[name=num_card_4]').removeClass('error');
            }
            if (symb == 's14') {
                var num_card_5 = $('.data_card_form input[name=num_card_5]').val();
                var num_card_6 = $('.data_card_form input[name=num_card_6]').val();
                var num_card_7 = $('.data_card_form input[name=num_card_7]').val();

                if (num_card_5.trim() == '') { $('.data_card_form input[name=num_card_5]').addClass('error'); valid = false; }
                else $('.data_card_form input[name=num_card_5]').removeClass('error');
                if (num_card_6.trim() == '') { $('.data_card_form input[name=num_card_6]').addClass('error'); valid = false; }
                else $('.data_card_form input[name=num_card_6]').removeClass('error');
                if (num_card_7.trim() == '') { $('.data_card_form input[name=num_card_7]').addClass('error'); valid = false; }
                else $('.data_card_form input[name=num_card_7]').removeClass('error');
            }
            if (month.trim() == '') { $('.data_card_form input[name=month]').addClass('error'); valid = false; }
            else $('.data_card_form input[name=month]').removeClass('error');
            if (year.trim() == '') { $('.data_card_form input[name=year]').addClass('error'); valid = false; }
            else $('.data_card_form input[name=year]').removeClass('error');
            if (name_card.trim() == '') { $('.data_card_form input[name=name_card]').addClass('error'); valid = false; }
            else $('.data_card_form input[name=name_card]').removeClass('error');
            if (code.trim() == '') { $('.data_card_form input[name=code]').addClass('error'); valid = false; }
            else $('.data_card_form input[name=code]').removeClass('error');

            return valid;
        }
        function checkClassDataCard() {
            var symb = $('.selection li a.active').data('symbol');
            var name_bank = $('.data_card_form input[name=name_bank]').val();
            var month = $('.data_card_form input[name=month]').val();
            var year = $('.data_card_form input[name=year]').val();
            var name_card = $('.data_card_form input[name=name_card]').val();
            var code = $('.data_card_form input[name=code]').val();
            var valid = true;

            if (name_bank.trim() == '') valid = false;

            if (symb == 's16') {
                var num_card_1 = $('.data_card_form input[name=num_card_1]').val();
                var num_card_2 = $('.data_card_form input[name=num_card_2]').val();
                var num_card_3 = $('.data_card_form input[name=num_card_3]').val();
                var num_card_4 = $('.data_card_form input[name=num_card_4]').val();

                if (num_card_1.trim() == '') valid = false;
                if (num_card_2.trim() == '') valid = false;
                if (num_card_3.trim() == '') valid = false;
                if (num_card_4.trim() == '') valid = false;
            }
            if (symb == 's14') {
                var num_card_5 = $('.data_card_form input[name=num_card_5]').val();
                var num_card_6 = $('.data_card_form input[name=num_card_6]').val();
                var num_card_7 = $('.data_card_form input[name=num_card_7]').val();

                if (num_card_5.trim() == '') valid = false;
                if (num_card_6.trim() == '') valid = false;
                if (num_card_7.trim() == '') valid = false;
            }
            if (month.trim() == '') valid = false;
            if (year.trim() == '') valid = false;
            if (name_card.trim() == '') valid = false;
            if (code.trim() == '') valid = false;

            return valid;
        }
    </script>
</head>
<body>
    <div class="main">
        <div class="inner">
            <?php include 'header_order.php'?>
            <div class="inner_content ord">
                <div class="relative">
                    <div class="left_margin">
                        <h1 class="name_personal"><a href="#"></a>Данные карты</h1>
                    </div>
                    <div class="relative">
                        <div class="form_data_card">
                            <ul class="selection">
                                <li>
                                    <a href="#" class="visa" data-symbol="s16"><i></i>Visa</a>
                                </li>
                                <li>
                                    <a href="#" class="mastercard" data-symbol="s16"><i></i>Mastercard</a>
                                </li>
                                <li>
                                    <a href="#" class="dinersclub" data-symbol="s14"><i></i>Diners club</a>
                                </li>
                                <li>
                                    <a href="#" class="jcb" data-symbol="s16"><i></i>JCB</a>
                                </li>
                            </ul>
                            <form class="data_card_form">
                                <table>
                                    <tr>
                                        <td><input type="text" class="input_contacts" name="name_bank"/></td>
                                        <td class="title_td">— банк, выдавший карту</td>
                                    </tr>
                                    <tr class="number_card td_s16">
                                        <td>
                                            <input type="text" class="input_contacts four_symbol" maxlength="4" name="num_card_1" />
                                            <input type="text" class="input_contacts four_symbol" maxlength="4" name="num_card_2" />
                                            <input type="text" class="input_contacts four_symbol" maxlength="4" name="num_card_3" />
                                            <input type="text" class="input_contacts four_symbol" maxlength="4" name="num_card_4" />
                                        </td>
                                        <td class="title_td">— номер карты (16 цифр)</td>
                                    </tr>
                                    <tr class="number_card td_s14">
                                        <td>
                                            <input type="text" class="input_contacts four_symbol" maxlength="4" name="num_card_5" />
                                            <input type="text" class="input_contacts six_symbol" maxlength="6" name="num_card_6" />
                                            <input type="text" class="input_contacts four_symbol" maxlength="4" name="num_card_7" />
                                        </td>
                                        <td class="title_td">— номер карты (14 цифр)</td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <input type="text" class="input_contacts two_symbol" maxlength="2" name="month" />
                                            <input type="text" class="input_contacts two_symbol" maxlength="2" name="year" />
                                        </td>
                                        <td class="title_td">— срок действия карты (месяц и год)</td>
                                    </tr>
                                    <tr>
                                        <td><input type="text" class="input_contacts" name="name_card" /></td>
                                        <td class="title_td">— держатель карты (латиницей)</td>
                                    </tr>
                                    <tr>
                                        <td><input type="text" class="input_contacts three_symbol" maxlength="3" name="code" /></td>
                                        <td class="title_td">— код безопасности (три цифры)</td>
                                    </tr>
                                </table>
                                <button class="button_next">Далее<i></i></button>
                            </form>
                        </div>
                        <div class="hint data_card hr">
                            Мы гарантируем полную
                            безопасность вашего интернет-
                            платежа. Передача информации
                            происходит по закрытым
                            банковским каналам с высшим
                            уровнем надёжности. Передача
                            ваших данных третьим лицам
                            исключена.
                        </div>
                        <div class="hint data_card">
                            Если оплата не произошла,
                            пожалуйста, свяжитесь с вашим
                            персональным менеджером,
                            или позвоните нам в офис —<br>
                            +7 495 989-48-91. Мы поможем
                            решить все вопросы.
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