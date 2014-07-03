<!DOCTYPE html>
<html lang="ru">
<head>
    <?php include 'head.php'?>
    <script>
        $(function() {
            $('.date_travel').hover(function() {
                var line = $(this).data('line');
                $('.'+line).addClass('line_hover');
            }, function() {
                $('.calendar table tr.lines td div').removeClass('line_hover');
            })
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
                    <li><a href="#" class="img"></a></li>
                    <li><a href="#" class="map"></a></li>
                    <li><a href="#" class="calendar active"></a></li>
                </ul>
            </div>
            <div class="relative calendar_wrap">
                <h1 class="calendar_title">Май 2014</h1>
                <div class="relative">
                    <a href="#" class="prev_month"><i></i>апрель</a>
                    <a href="#" class="next_month">июнь<i></i></a>
                    <div class="cal_wrap">
                        <div class="calendar">
                            <table>
                                <tr>
                                    <td class="last_next_month">28</td>
                                    <td>&nbsp;</td>
                                    <td class="last_next_month">29</td>
                                    <td>&nbsp;</td>
                                    <td class="last_next_month">30</td>
                                    <td>&nbsp;</td>
                                    <td>1</td>
                                    <td>&nbsp;</td>
                                    <td>2</td>
                                    <td>&nbsp;</td>
                                    <td class="weekend">3</td>
                                    <td>&nbsp;</td>
                                    <td class="weekend">4</td>
                                </tr>
                                <tr class="lines">
                                    <td>&nbsp;</td>
                                    <td>&nbsp;</td>
                                    <td>&nbsp;</td>
                                    <td>&nbsp;</td>
                                    <td>
                                        <div class="gray"></div>
                                    </td>
                                    <td>
                                        <div class="gray"></div>
                                    </td>
                                    <td>
                                        <div class="gray"></div>
                                        <div class="light_gray line_1"></div>
                                    </td>
                                    <td>
                                        <div class="gray"></div>
                                        <div class="light_gray line_1"></div>
                                    </td>
                                    <td>
                                        <div class="gray"></div>
                                        <div class="light_gray line_1"></div>
                                    </td>
                                    <td>
                                        <div class="gray"></div>
                                        <div class="light_gray line_1"></div>
                                    </td>
                                    <td>
                                        <div class="gray"></div>
                                        <div class="light_gray line_1"></div>
                                    </td>
                                    <td>
                                        <div class="gray"></div>
                                        <div class="light_gray line_1"></div>
                                    </td>
                                    <td>
                                        <div class="gray"></div>
                                        <div class="light_gray line_1"></div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>5</td>
                                    <td>&nbsp;</td>
                                    <td>6</td>
                                    <td>&nbsp;</td>
                                    <td>7</td>
                                    <td>&nbsp;</td>
                                    <td>8</td>
                                    <td>&nbsp;</td>
                                    <td>9</td>
                                    <td>&nbsp;</td>
                                    <td class="weekend">10</td>
                                    <td>&nbsp;</td>
                                    <td class="weekend">11</td>
                                </tr>
                                <tr class="lines">
                                    <td>
                                        <div></div>
                                        <div></div>
                                        <div class="gray"></div>
                                        <div class="light_gray line_1"></div>
                                    </td>
                                    <td>
                                        <div></div>
                                        <div></div>
                                        <div></div>
                                        <div class="light_gray line_1"></div>
                                    </td>
                                    <td>
                                        <div></div>
                                        <div></div>
                                        <div></div>
                                        <div class="light_gray line_1"></div>
                                    </td>
                                    <td>
                                        <div></div>
                                        <div></div>
                                        <div></div>
                                        <div class="light_gray line_1"></div>
                                    </td>
                                    <td>
                                        <div class="gray line_2"></div>
                                        <div></div>
                                        <div></div>
                                        <div class="light_gray line_1"></div>
                                    </td>
                                    <td>
                                        <div class="gray line_2"></div>
                                        <div></div>
                                        <div></div>
                                        <div></div>
                                    </td>
                                    <td>
                                        <div class="gray line_2"></div>
                                        <div class="light_gray line_3"></div>
                                    </td>
                                    <td>
                                        <div class="gray line_2"></div>
                                        <div class="light_gray line_3"></div>
                                    </td>
                                    <td>
                                        <div class="gray line_2"></div>
                                        <div class="light_gray line_3"></div>
                                    </td>
                                    <td>
                                        <div class="gray line_2"></div>
                                        <div class="light_gray line_3"></div>
                                    </td>
                                    <td>
                                        <div class="gray line_2"></div>
                                        <div class="light_gray line_3"></div>
                                        <div class="gray"></div>
                                    </td>
                                    <td>
                                        <div class="gray line_2"></div>
                                        <div class="light_gray line_3"></div>
                                        <div class="gray"></div>
                                    </td>
                                    <td>
                                        <div class="gray line_2"></div>
                                        <div class="light_gray line_3"></div>
                                        <div class="gray"></div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>12</td>
                                    <td>&nbsp;</td>
                                    <td>13</td>
                                    <td>&nbsp;</td>
                                    <td>14</td>
                                    <td>&nbsp;</td>
                                    <td>15</td>
                                    <td>&nbsp;</td>
                                    <td>16</td>
                                    <td>&nbsp;</td>
                                    <td class="weekend">17</td>
                                    <td>&nbsp;</td>
                                    <td class="weekend">18</td>
                                </tr>
                                <tr class="lines">
                                    <td>
                                        <div class="gray line_2"></div>
                                        <div></div>
                                        <div class="gray"></div>
                                    </td>
                                    <td>
                                        <div class="gray line_2"></div>
                                        <div></div>
                                        <div class="gray"></div>
                                    </td>
                                    <td>
                                        <div class="gray line_2"></div>
                                        <div></div>
                                        <div class="gray"></div>
                                    </td>
                                    <td>
                                        <div></div>
                                        <div></div>
                                        <div class="gray"></div>
                                    </td>
                                    <td>
                                        <div></div>
                                        <div></div>
                                        <div class="gray"></div>
                                    </td>
                                    <td>
                                        <div></div>
                                        <div></div>
                                        <div class="gray"></div>
                                    </td>
                                    <td>
                                        <div></div>
                                        <div class="light_gray"></div>
                                        <div class="gray"></div>
                                    </td>
                                    <td>
                                        <div></div>
                                        <div class="light_gray"></div>
                                        <div class="gray"></div>
                                    </td>
                                    <td>
                                        <div></div>
                                        <div class="light_gray"></div>
                                        <div class="gray"></div>
                                    </td>
                                    <td>
                                        <div></div>
                                        <div class="light_gray"></div>
                                        <div class="gray"></div>
                                    </td>
                                    <td>
                                        <div class="gray"></div>
                                        <div class="light_gray"></div>
                                        <div class="gray"></div>
                                    </td>
                                    <td>
                                        <div class="gray"></div>
                                        <div class="light_gray"></div>
                                        <div class="gray"></div>
                                    </td>
                                    <td>
                                        <div class="gray"></div>
                                        <div class="light_gray"></div>
                                        <div></div>
                                        <div class="gray"></div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>19</td>
                                    <td>&nbsp;</td>
                                    <td>20</td>
                                    <td>&nbsp;</td>
                                    <td>21</td>
                                    <td>&nbsp;</td>
                                    <td>22</td>
                                    <td>&nbsp;</td>
                                    <td>23</td>
                                    <td>&nbsp;</td>
                                    <td class="weekend">24</td>
                                    <td>&nbsp;</td>
                                    <td class="weekend">25</td>
                                </tr>
                                <tr class="lines">
                                    <td>
                                        <div class="gray"></div>
                                        <div></div>
                                        <div></div>
                                        <div class="light_gray"></div>
                                    </td>
                                    <td>
                                        <div class="gray"></div>
                                        <div></div>
                                        <div></div>
                                        <div class="light_gray"></div>
                                    </td>
                                    <td>
                                        <div class="gray"></div>
                                        <div></div>
                                        <div></div>
                                        <div class="light_gray"></div>
                                    </td>
                                    <td>
                                        <div class="gray"></div>
                                        <div></div>
                                        <div></div>
                                        <div class="light_gray"></div>
                                    </td>
                                    <td>
                                        <div class="gray"></div>
                                        <div></div>
                                        <div></div>
                                        <div class="light_gray"></div>
                                    </td>
                                    <td>
                                        <div class="gray"></div>
                                        <div></div>
                                        <div></div>
                                        <div class="light_gray"></div>
                                    </td>
                                    <td>
                                        <div class="gray"></div>
                                        <div></div>
                                        <div></div>
                                        <div class="light_gray"></div>
                                    </td>
                                    <td>
                                        <div class="gray"></div>
                                        <div></div>
                                        <div></div>
                                        <div class="light_gray"></div>
                                    </td>
                                    <td>
                                        <div class="gray"></div>
                                        <div></div>
                                        <div></div>
                                        <div class="light_gray"></div>
                                    </td>
                                    <td><div></div></td>
                                    <td>
                                        <div></div>
                                        <div class="light_gray"></div>
                                    </td>
                                    <td>
                                        <div></div>
                                        <div class="light_gray"></div>
                                    </td>
                                    <td>
                                        <div></div>
                                        <div class="light_gray"></div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>26</td>
                                    <td>&nbsp;</td>
                                    <td>27</td>
                                    <td>&nbsp;</td>
                                    <td>28</td>
                                    <td>&nbsp;</td>
                                    <td>29</td>
                                    <td>&nbsp;</td>
                                    <td>30</td>
                                    <td>&nbsp;</td>
                                    <td class="weekend">31</td>
                                    <td>&nbsp;</td>
                                    <td class="last_next_month">1</td>
                                </tr>
                                <tr class="lines">
                                    <td>
                                        <div></div>
                                        <div class="light_gray "></div>
                                    </td>
                                    <td>
                                        <div></div>
                                        <div class="light_gray"></div>
                                    </td>
                                    <td>
                                        <div></div>
                                        <div class="light_gray"></div>
                                    </td>
                                    <td>
                                        <div></div>
                                        <div class="light_gray"></div>
                                    </td>
                                    <td>
                                        <div class="gray"></div>
                                        <div class="light_gray"></div>
                                    </td>
                                    <td>
                                        <div class="gray"></div>
                                        <div class="light_gray"></div>
                                    </td>
                                    <td>
                                        <div class="gray"></div>
                                        <div class="light_gray"></div>
                                        <div class="gray"></div>
                                    </td>
                                    <td>
                                        <div class="gray"></div>
                                        <div class="light_gray"></div>
                                        <div class="gray"></div>
                                    </td>
                                    <td>
                                        <div class="gray"></div>
                                        <div class="light_gray"></div>
                                        <div class="gray"></div>
                                    </td>
                                    <td>
                                        <div class="gray"></div>
                                        <div class="light_gray"></div>
                                        <div class="gray"></div>
                                    </td>
                                    <td>
                                        <div class="gray"></div>
                                        <div class="light_gray"></div>
                                        <div class="gray"></div>
                                        <div class="light_gray"></div>
                                    </td>
                                    <td>
                                        <div class="gray"></div>
                                        <div></div>
                                        <div></div>
                                        <div class="light_gray"></div>
                                    </td>
                                    <td>
                                        <div class="gray"></div>
                                        <div></div>
                                        <div></div>
                                        <div class="light_gray"></div>
                                    </td>
                                </tr>
                            </table>
                        </div>
                        <div class="dates_travel">
                            <ul>
                                <li>
                                    <a href="#" class="date_travel" data-line="line_1">1—7 мая</a>
                                    <div class="title_travel">Сказочный Марракеш</div>
                                </li>
                                <li>
                                    <a href="#" class="date_travel" data-line="line_2">7—13 мая</a>
                                    <div class="title_travel">Секреты Каталонии</div>
                                </li>
                                <li>
                                    <a href="#" class="date_travel" data-line="line_3">8—11 мая</a>
                                    <div class="title_travel">Eco gourmet weekend</div>
                                </li>
                                <li>
                                    <a href="#" class="date_travel">10—17 мая</a>
                                    <div class="title_travel">Позитано и Неаполь с Юлией Высоцкой</div>
                                </li>
                                <li>
                                    <a href="#" class="date_travel">15—18 мая</a>
                                    <div class="title_travel">Eco gourmet weekend </div>
                                </li>
                                <li>
                                    <a href="#" class="date_travel">17—23 мая</a>
                                    <div class="title_travel">Дордонь — Бордо</div>
                                </li>
                                <li>
                                    <a href="#" class="date_travel">18—23 мая</a>
                                    <div class="title_travel">Вкус Фландрии</div>
                                </li>
                                <li>
                                    <a href="#" class="date_travel">24—31 мая</a>
                                    <div class="title_travel">Тоскана с Юлией Высоцкой</div>
                                </li>
                                <li>
                                    <a href="#" class="date_travel">28 мая — 2 июня</a>
                                    <div class="title_travel">Прованс</div>
                                </li>
                                <li>
                                    <a href="#" class="date_travel">29—31 мая</a>
                                    <div class="title_travel">Eco gourmet weekend</div>
                                </li>
                                <li class="last">
                                    <a href="#" class="date_travel">31 мая — 6 июня</a>
                                    <div class="title_travel">Секреты Каталонии</div>
                                </li>
                            </ul>
                        </div>
                        <div class="clear"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php include 'side-panel.php'?>
</div>
<?php include 'popup.php'?>
</body>
</html>