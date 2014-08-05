<!DOCTYPE html>
<html lang="ru">
<head>
    <?php include 'head.php'?>
    <script src='js/jquery-ui.min.js'></script>
    <script>
        $(function() {
            $(window).on('resize', function () {
                var wrapper_width = parseInt($('body').width() - 80),
                    wrapper_height = parseInt($('body').height()) - 145;
                    abs_width = (wrapper_width <= 1000) ? (1000 - wrapper_width)*2+wrapper_width : 1000,
                    abs_height = (wrapper_width >= 735) ? (735 - wrapper_height)*2+wrapper_height : 735;

                $('.map_wrapper').width(wrapper_width).height(wrapper_height);
                $('.abs_wrapper').css({
                    'width'      : 50+abs_width+'px',
                    'height'     : 50+abs_height+'px',
                    'margin-top' : -(abs_height/2)+'px',
                    'margin-left' : -(abs_width/2)+'px'
                });
            }).trigger("resize");
            $('.drag_image').draggable({
                cursor: "grab",
                containment: 'parent'

            });
            $('#map_iceland').mouseover(function() {
                $('.hover_country.ice').css({'backgroundPosition': '0 0', 'color': '#99c65f'});
            }).mouseout(function() {
                $('.hover_country.ice').css({'backgroundPosition': '0 -63px', 'color': '#5e5e5e'});
            });
            $('#map_sweden').mouseover(function() {
                $('.hover_country.swe').css({'backgroundPosition': '0 0', 'color': '#99c65f'});
            }).mouseout(function() {
                $('.hover_country.swe').css({'backgroundPosition': '0 -246px', 'color': '#5e5e5e'});
            });
            $('#map_latvia').mouseover(function() {
                $('.hover_country.lat').css({'backgroundPosition': '0 0', 'color': '#99c65f'});
            }).mouseout(function() {
                $('.hover_country.lat').css({'backgroundPosition': '0 -40px', 'color': '#5e5e5e'});
            });
            $('#map_britain').mouseover(function() {
                $('.hover_country.bri').css({'backgroundPosition': '0 0', 'color': '#99c65f'});
            }).mouseout(function() {
                $('.hover_country.bri').css({'backgroundPosition': '0 -172px', 'color': '#5e5e5e'});
            });
            $('#map_belgium').mouseover(function() {
                $('.hover_country.bel').css({'backgroundPosition': '0 0', 'color': '#99c65f'});
            }).mouseout(function() {
                $('.hover_country.bel').css({'backgroundPosition': '0 -35px', 'color': '#5e5e5e'});
            });
            $('#map_georgia').mouseover(function() {
                $('.hover_country.geo').css({'backgroundPosition': '0 0', 'color': '#99c65f'});
            }).mouseout(function() {
                $('.hover_country.geo').css({'backgroundPosition': '0 -39px', 'color': '#5e5e5e'});
            });
            $('#map_slovakia').mouseover(function() {
                $('.hover_country.slo').css({'backgroundPosition': '0 0', 'color': '#99c65f'});
            }).mouseout(function() {
                $('.hover_country.slo').css({'backgroundPosition': '0 -76px', 'color': '#5e5e5e'});
            });
            $('#map_italy').mouseover(function() {
                $('.hover_country.ita').css({'backgroundPosition': '0 0', 'color': '#99c65f'});
            }).mouseout(function() {
                $('.hover_country.ita').css({'backgroundPosition': '0 -184px', 'color': '#5e5e5e'});
            });
            $('#map_france').mouseover(function() {
                $('.hover_country.fra').css({'backgroundPosition': '0 0', 'color': '#99c65f'});
            }).mouseout(function() {
                $('.hover_country.fra').css({'backgroundPosition': '0 -177px', 'color': '#5e5e5e'});
            });
            $('#map_spain').mouseover(function() {
                $('.hover_country.spa').css({'backgroundPosition': '0 0', 'color': '#99c65f'});
            }).mouseout(function() {
                $('.hover_country.spa').css({'backgroundPosition': '0 -141px', 'color': '#5e5e5e'});
            });
            $('#map_marokko').mouseover(function() {
                $('.hover_country.mar').css({'backgroundPosition': '0 0', 'color': '#99c65f'});
            }).mouseout(function() {
                $('.hover_country.mar').css({'backgroundPosition': '0 -103px', 'color': '#5e5e5e'});
            });
            $('#map_israel').mouseover(function() {
                $('.hover_country.isr').css({'backgroundPosition': '0 0', 'color': '#99c65f'});
            }).mouseout(function() {
                $('.hover_country.isr').css({'backgroundPosition': '0 -50px', 'color': '#5e5e5e'});
            });

            $('.poly').on('click', function() {
                var id = $(this).attr('id');
                $('.tours_pp').hide();
                $('.popup_'+id).show();
                $('.opacity_popup, .popup_tours').fadeIn();
                $(window).trigger('resize');
                return false;
            });
            $('.close_tours').on('click', function() {
                $('.opacity_popup, .popup_tours').fadeOut();
                return false;
            });
            $(this).keydown(function(eventObject){
                if (eventObject.which == 27) {
                    $('.opacity_popup, .popup_tours').fadeOut();
                }
            });
        });
    </script>
</head>
<body>
<div class="main" style="min-width: inherit">
    <div class="inner">
        <?php include 'header.php'?>
        <div class="relative">
            <div class="select_wrap">
                <ul class="select_nav" style="z-index: 99">
                    <li><a href="#" class="img"></a></li>
                    <li><span class="map active"></span></li>
                    <li><a href="#" class="calendar"></a></li>
                </ul>
            </div>
            <div class="relative map_wrapper">
                <div class="abs_wrapper">
                    <div class="drag_image">
                        <a href="#" class="hover_country ice"><span>Исландия</span></a>
                        <a href="#" class="hover_country swe"><span>Швеция</span></a>
                        <a href="#" class="hover_country lat"><span>Латвия</span></a>
                        <a href="#" class="hover_country bri"><span>Велико-<br>британия</span></a>
                        <a href="#" class="hover_country bel"><span>Бельгия</span></a>
                        <a href="#" class="hover_country geo"><span>Грузия</span></a>
                        <a href="#" class="hover_country slo"><span>Словения —<br>Хорватия</span></a>
                        <a href="#" class="hover_country ita"><span>Италия</span></a>
                        <a href="#" class="hover_country fra"><span>Франция</span></a>
                        <a href="#" class="hover_country spa"><span>Испания</span></a>
                        <a href="#" class="hover_country mar"><span>Марокко</span></a>
                        <a href="#" class="hover_country isr"><span>Израиль</span></a>
                        <div class="names_country fin">Финляндия</div>
                        <div class="names_country rus">Россия</div>
                        <div class="names_country pol">Польша</div>
                        <div class="names_country ukr">Украина</div>
                        <div class="names_country swi">Швей-<br>цария</div>
                        <div class="names_country rom">Румыния</div>
                        <div class="names_country gre">Греция</div>
                        <div class="names_country tur">Турция</div>
                        <div class="names_country arm">Армения</div>
                        <div class="names_country gonk">Гонконг</div>
                        <img src="img/map_image_real.png" style="opacity: 0" usemap="#map">
                        <map name="map">
                            <area class="poly" id="map_iceland" shape="poly" coords="236, 95, 240, 89, 235, 86, 233, 79, 228, 79, 221, 82, 200, 74, 193, 78, 193, 71, 191, 60, 179, 60, 174, 66, 169, 67, 180, 76, 179, 82, 165, 79, 170, 86, 177, 92, 179, 98, 170, 98, 165, 98, 169, 105, 177, 107, 178, 115, 195, 124, 200, 120, 207, 124, 218, 119, 225, 122, 232, 118, 238, 114, 239, 109, 240, 107" />
                            <area class="poly" id="map_sweden" shape="poly" coords="472, 53, 488, 65, 495, 81, 498, 94, 501, 107, 494, 111, 488, 111, 481, 123, 485, 134, 479, 148, 454, 176, 453, 190, 453, 203, 469, 216, 469, 222, 465, 224, 466, 229, 453, 239, 450, 266, 456, 261, 448, 281, 442, 283, 429, 282, 427, 294, 417, 296, 414, 291, 411, 284, 411, 279, 415, 276, 403, 249, 400, 238, 401, 231, 406, 229, 406, 220, 412, 215, 416, 211, 411, 197, 417, 190, 411, 182, 411, 160, 410, 158, 414, 149, 418, 142, 424, 144, 428, 140, 424, 134, 430, 123, 432, 113, 431, 106, 436, 107, 438, 101, 443, 95, 444, 89, 441, 83, 447, 80, 447, 74, 453, 72, 454, 67, 463, 66, 469, 63" />
                            <area class="poly" id="map_latvia" shape="poly" coords="494, 281, 492, 268, 496, 263, 496, 256, 505, 251, 513, 260, 520, 261, 523, 255, 521, 249, 524, 245, 534, 243, 541, 247, 545, 249, 550, 248, 555, 251, 555, 254, 559, 261, 563, 269, 558, 272, 558, 276, 552, 277, 550, 280, 544, 281, 541, 275, 534, 275, 530, 271, 524, 274, 504, 273, 498, 276" />
                            <area class="poly" id="map_britain" shape="poly" coords="240, 212, 227, 225, 224, 236, 233, 240, 231, 251, 224, 259, 221, 266, 205, 275, 211, 282, 217, 276, 221, 285, 226, 289, 229, 286, 237, 278, 249, 285, 250, 301, 247, 308, 235, 301, 229, 312, 236, 314, 232, 321, 218, 324, 221, 331, 227, 330, 231, 339, 209, 352, 212, 358, 223, 353, 230, 359, 240, 352, 256, 357, 266, 357, 274, 360, 291, 352, 281, 348, 283, 345, 293, 338, 295, 332, 291, 322, 283, 321, 279, 294, 273, 291, 273, 282, 271, 278, 274, 273, 266, 262, 269, 254, 276, 244, 280, 240, 276, 237, 264, 233, 263, 226, 271, 222, 276, 216, 293, 202, 300, 187, 292, 187, 289, 200, 280, 208, 271, 209, 264, 218, 257, 215, 246, 224" />
                            <area class="poly" id="map_belgium" shape="poly" coords="301, 359, 307, 355, 312, 357, 325, 355, 330, 358, 335, 363, 338, 374, 337, 380, 331, 382, 333, 388, 330, 391, 322, 383, 322, 377, 315, 380, 315, 375, 308, 369, 305, 365, 300, 365" />
                            <area class="poly" id="map_georgia" shape="poly" coords="798, 443, 803, 435, 810, 436, 821, 432, 822, 439, 836, 440, 832, 445, 844, 450, 841, 453, 832, 454, 824, 453, 821, 458, 802, 468, 796, 468, 790, 464, 790, 468, 774, 471, 778, 464, 775, 458, 770, 454, 766, 453, 761, 449, 754, 450, 748, 447, 752, 442, 763, 443, 772, 442, 784, 438" />
                            <area class="poly" id="map_slovakia" shape="poly" coords="417, 449, 415, 453, 418, 457, 416, 460, 421, 465, 416, 469, 418, 476, 422, 479, 437, 492, 446, 499, 448, 503, 453, 502, 456, 509, 477, 517, 463, 501, 454, 494, 450, 490, 451, 486, 443, 478, 445, 472, 449, 475, 456, 471, 468, 474, 480, 472, 481, 477, 484, 476, 486, 470, 480, 459, 469, 461, 449, 444, 433, 448, 428, 451" />
                            <area class="poly" id="map_italy" shape="poly" coords="338, 452, 334, 455, 338, 461, 337, 465, 332, 465, 332, 469, 337, 474, 332, 480, 335, 484, 342, 485, 341, 490, 347, 492, 355, 481, 364, 485, 369, 490, 375, 493, 375, 498, 377, 506, 385, 517, 349, 544, 342, 543, 343, 549, 346, 556, 343, 566, 342, 573, 347, 578, 353, 573, 360, 575, 360, 565, 362, 558, 365, 551, 360, 542, 389, 521, 400, 536, 406, 538, 418, 540, 421, 548, 428, 551, 434, 552, 433, 558, 438, 563, 443, 562, 451, 583, 445, 587, 442, 593, 415, 598, 409, 595, 400, 596, 398, 603, 435, 623, 437, 614, 436, 604, 442, 598, 450, 599, 451, 593, 457, 590, 455, 585, 460, 581, 464, 583, 465, 577, 461, 571, 454, 568, 459, 560, 463, 553, 473, 558, 477, 565, 483, 559, 471, 548, 445, 535, 449, 531, 440, 527, 425, 522, 419, 504, 405, 491, 400, 478, 403, 474, 399, 469, 404, 465, 407, 466, 410, 461, 420, 461, 417, 448, 404, 444, 402, 438, 388, 439, 385, 444, 382, 440, 377, 446, 370, 451, 366, 444, 363, 456, 355, 446, 347, 455" />
                            <area class="poly" id="map_france" shape="poly" coords="338, 452, 335, 455, 338, 461, 333, 466, 331, 470, 335, 474, 331, 478, 333, 484, 340, 485, 343, 489, 362, 508, 365, 514, 362, 517, 365, 520, 358, 535, 353, 522, 351, 516, 359, 511, 340, 492, 330, 496, 326, 501, 318, 501, 293, 489, 283, 494, 281, 498, 281, 506, 278, 506, 268, 505, 259, 497, 252, 495, 248, 497, 235, 491, 230, 486, 226, 485, 223, 479, 237, 452, 237, 443, 243, 434, 236, 426, 231, 417, 233, 412, 230, 410, 233, 407, 227, 405, 217, 396, 211, 396, 212, 391, 210, 387, 212, 383, 218, 381, 224, 384, 229, 381, 232, 387, 245, 388, 247, 381, 243, 379, 248, 371, 256, 371, 252, 375, 265, 382, 270, 377, 279, 374, 286, 371, 288, 363, 294, 359, 301, 358, 300, 364, 305, 365, 306, 369, 315, 373, 314, 380, 318, 381, 321, 376, 323, 383, 327, 387, 330, 390, 338, 393, 341, 398, 348, 397, 355, 403, 348, 425, 344, 428, 338, 427, 338, 431, 328, 442, 328, 447, 333, 444, 337, 444" />
                            <area class="poly" id="map_spain" shape="poly" coords="151, 451, 156, 458, 173, 461, 185, 466, 187, 470, 200, 472, 208, 474, 217, 480, 226, 480, 228, 484, 238, 493, 250, 497, 254, 496, 266, 506, 274, 508, 280, 507, 280, 511, 281, 517, 278, 520, 270, 520, 261, 526, 252, 526, 245, 529, 246, 532, 228, 544, 226, 552, 226, 558, 232, 561, 245, 561, 272, 549, 276, 553, 284, 550, 290, 550, 289, 555, 278, 556, 272, 562, 265, 556, 248, 564, 227, 564, 220, 570, 214, 576, 211, 581, 204, 579, 200, 581, 198, 586, 191, 591, 185, 589, 179, 590, 172, 585, 165, 586, 160, 584, 155, 585, 149, 585, 139, 590, 130, 581, 131, 571, 126, 564, 118, 562, 123, 551, 127, 545, 128, 538, 136, 534, 132, 525, 135, 521, 139, 523, 140, 514, 146, 508, 146, 502, 157, 494, 154, 486, 148, 486, 142, 483, 135, 481, 135, 476, 128, 477, 132, 467, 128, 465, 131, 461, 129, 454, 141, 455" />
                            <area class="poly" id="map_marokko" shape="poly" coords="131, 598, 140, 596, 145, 607, 150, 611, 156, 606, 170, 610, 174, 607, 190, 618, 191, 628, 188, 640, 191, 645, 191, 650, 187, 655, 166, 654, 162, 657, 156, 657, 153, 662, 155, 670, 134, 669, 129, 680, 120, 682, 104, 680, 89, 682, 69, 687, 66, 698, 1, 696, 18, 692, 46, 685, 59, 672, 56, 661, 64, 645, 73, 642, 69, 636, 96, 624, 106, 624, 124, 610" />
                            <area class="poly" id="map_israel" shape="poly" coords="738, 642, 733, 670, 735, 674, 746, 691, 745, 681, 747, 668, 746, 661, 743, 666, 740, 666, 741, 658, 740, 651, 745, 651, 747, 646, 744, 641" />
                        </map>

                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php include 'side-panel.php'?>
</div>
<?php include 'popup.php'?>
<div class="popup popup_tours">
    <div class="padding_form">
        <div class="tours_pp popup_map_italy">
            <h1 class="title_popup title_country_h1"><a href="#" class="close_tours"></a>Италия</h1>
            <div class="scroll">
                <div class="scroll_tour_wrap">
                    <ul class="schedule">
                        <li>
                            <a href="#">Позитано и Неаполь с Юлией Высоцкой<i></i></a>
                            <p>10—17 мая</p>
                        </li>
                        <li>
                            <a href="#">Тоскана с Юлией Высоцкой<i></i></a>
                            <p>24—31 мая</p>
                            <p>24 июня — 1 июля</p>
                        </li>
                        <li>
                            <a href="#">Затерянный мир Тосканы<i></i></a>
                            <p>12—17 апреля</p>
                            <p>17—22 апреля</p>
                        </li>
                        <li>
                            <a href="#">Изысканный Пьемонт<i></i></a>
                            <p>17—23 ноября</p>
                            <p>24—30 ноября</p>
                        </li>
                        <li>
                            <a href="#">Умбрия — Тоскана<i></i></a>
                            <p>22—28 июня</p>
                            <p>6—12 июля</p>
                            <p>20—26 июля</p>
                            <p>7—13 сентября</p>
                            <p>21—27 сентября</p>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="tours_pp popup_map_france">
            <h1 class="title_popup title_country_h1"><a href="#" class="close_tours"></a>Франция</h1>
            <div class="scroll">
                <div class="scroll_tour_wrap">
                    <ul class="schedule">
                        <li>
                            <a href="#">Позитано и Неаполь с Юлией Высоцкой<i></i></a>
                            <p>10—17 мая</p>
                        </li>
                        <li>
                            <a href="#">Умбрия — Тоскана<i></i></a>
                            <p>22—28 июня</p>
                            <p>6—12 июля</p>
                            <p>20—26 июля</p>
                            <p>7—13 сентября</p>
                            <p>21—27 сентября</p>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="tours_pp popup_map_spain">
            <h1 class="title_popup title_country_h1"><a href="#" class="close_tours"></a>Испания</h1>
            <div class="scroll">
                <div class="scroll_tour_wrap">
                    <ul class="schedule">
                        <li>
                            <p>Туров нет</p>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="tours_pp popup_map_marokko">
            <h1 class="title_popup title_country_h1"><a href="#" class="close_tours"></a>Марокко</h1>
            <div class="scroll">
                <div class="scroll_tour_wrap">
                    <ul class="schedule">
                        <li>
                            <a href="#">Позитано и Неаполь с Юлией Высоцкой<i></i></a>
                            <p>10—17 мая</p>
                        </li>
                        <li>
                            <a href="#">Тоскана с Юлией Высоцкой<i></i></a>
                            <p>24—31 мая</p>
                            <p>24 июня — 1 июля</p>
                        </li>
                        <li>
                            <a href="#">Затерянный мир Тосканы<i></i></a>
                            <p>12—17 апреля</p>
                            <p>17—22 апреля</p>
                        </li>
                        <li>
                            <a href="#">Изысканный Пьемонт<i></i></a>
                            <p>17—23 ноября</p>
                            <p>24—30 ноября</p>
                        </li>
                        <li>
                            <a href="#">Умбрия — Тоскана<i></i></a>
                            <p>22—28 июня</p>
                            <p>6—12 июля</p>
                            <p>20—26 июля</p>
                            <p>7—13 сентября</p>
                            <p>21—27 сентября</p>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="tours_pp popup_map_slovakia">
            <h1 class="title_popup title_country_h1"><a href="#" class="close_tours"></a>Словения - Хорватия</h1>
            <div class="scroll">
                <div class="scroll_tour_wrap">
                    <ul class="schedule">
                        <li>
                            <p>Туров нет</p>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="tours_pp popup_map_georgia">
            <h1 class="title_popup title_country_h1"><a href="#" class="close_tours"></a>Грузия</h1>
            <div class="scroll">
                <div class="scroll_tour_wrap">
                    <ul class="schedule">
                        <li>
                            <p>Туров нет</p>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="tours_pp popup_map_israel">
            <h1 class="title_popup title_country_h1"><a href="#" class="close_tours"></a>Израиль</h1>
            <div class="scroll">
                <div class="scroll_tour_wrap">
                    <ul class="schedule">
                        <li>
                            <p>Туров нет</p>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="tours_pp popup_map_belgium">
            <h1 class="title_popup title_country_h1"><a href="#" class="close_tours"></a>Бельгия</h1>
            <div class="scroll">
                <div class="scroll_tour_wrap">
                    <ul class="schedule">
                        <li>
                            <p>Туров нет</p>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="tours_pp popup_map_britain">
            <h1 class="title_popup title_country_h1"><a href="#" class="close_tours"></a>Великобритания</h1>
            <div class="scroll">
                <div class="scroll_tour_wrap">
                    <ul class="schedule">
                        <li>
                            <p>Туров нет</p>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="tours_pp popup_map_iceland">
            <h1 class="title_popup title_country_h1"><a href="#" class="close_tours"></a>Исладия</h1>
            <div class="scroll">
                <div class="scroll_tour_wrap">
                    <ul class="schedule">
                        <li>
                            <p>Туров нет</p>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="tours_pp popup_map_sweden">
            <h1 class="title_popup title_country_h1"><a href="#" class="close_tours"></a>Швеция</h1>
            <div class="scroll">
                <div class="scroll_tour_wrap">
                    <ul class="schedule">
                        <li>
                            <p>Туров нет</p>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="tours_pp popup_map_latvia">
            <h1 class="title_popup title_country_h1"><a href="#" class="close_tours"></a>Латвия</h1>
            <div class="scroll">
                <div class="scroll_tour_wrap">
                    <ul class="schedule">
                        <li>
                            <p>Туров нет</p>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
</body>
</html>