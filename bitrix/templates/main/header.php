<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>
<?
IncludeTemplateLangFile(__FILE__);
?>
<!DOCTYPE HTML>
<html lang="en-US">
<head>
    <?$APPLICATION->ShowHead();?>
    <title><?$APPLICATION->ShowTitle()?></title>
    <link rel="stylesheet" href="/bitrix/templates/.default/template_style.css" />
    <script type="text/javascript" src="/bitrix/templates/.default/js/jquery-1.8.2.min.js"></script>
    <script type="text/javascript" src="/bitrix/templates/.default/js/slides.min.jquery.js"></script>
    <script type="text/javascript" src="/bitrix/templates/.default/js/jquery.carouFredSel-6.1.0-packed.js"></script>
    <script type="text/javascript" src="/bitrix/templates/.default/js/functions.js"></script>

    <!--[if gte IE 9]><style type="text/css">.gradient {filter: none;}</style><![endif]-->
    <link rel="shortcut icon" type="image" href="/bitrix/templates/.default/favicon.ico" />
</head>
<body>
<?$APPLICATION->ShowPanel();?>
<div class="wrap">
    <div class="hd_header_area">
        <?include_once ($_SERVER["DOCUMENT_ROOT"]."/bitrix/templates/.default/include/header.php")?>
    </div>

    <!--- // end header area --->


    <?$APPLICATION->IncludeComponent("bitrix:news.list", "main.slider", Array(
        "ACTIVE_DATE_FORMAT" => "d.m.Y",	// Формат показа даты
        "ADD_SECTIONS_CHAIN" => "N",	// Включать раздел в цепочку навигации
        "AJAX_MODE" => "N",	// Включить режим AJAX
        "AJAX_OPTION_ADDITIONAL" => "",	// Дополнительный идентификатор
        "AJAX_OPTION_HISTORY" => "N",	// Включить эмуляцию навигации браузера
        "AJAX_OPTION_JUMP" => "N",	// Включить прокрутку к началу компонента
        "AJAX_OPTION_STYLE" => "Y",	// Включить подгрузку стилей
        "CACHE_FILTER" => "N",	// Кешировать при установленном фильтре
        "CACHE_GROUPS" => "Y",	// Учитывать права доступа
        "CACHE_TIME" => "36000000",	// Время кеширования (сек.)
        "CACHE_TYPE" => "A",	// Тип кеширования
        "CHECK_DATES" => "Y",	// Показывать только активные на данный момент элементы
        "DETAIL_URL" => "",	// URL страницы детального просмотра (по умолчанию - из настроек инфоблока)
        "DISPLAY_BOTTOM_PAGER" => "N",	// Выводить под списком
        "DISPLAY_DATE" => "N",	// Выводить дату элемента
        "DISPLAY_NAME" => "Y",	// Выводить название элемента
        "DISPLAY_PICTURE" => "Y",	// Выводить изображение для анонса
        "DISPLAY_PREVIEW_TEXT" => "Y",	// Выводить текст анонса
        "DISPLAY_TOP_PAGER" => "N",	// Выводить над списком
        "FIELD_CODE" => array(	// Поля
            0 => "NAME",
            1 => "PREVIEW_TEXT",
            2 => "PREVIEW_PICTURE",
            3 => "CREATED_USER_NAME",
            4 => "",
        ),
        "FILTER_NAME" => "",	// Фильтр
        "HIDE_LINK_WHEN_NO_DETAIL" => "N",	// Скрывать ссылку, если нет детального описания
        "IBLOCK_ID" => "5",	// Код информационного блока
        "IBLOCK_TYPE" => "slider",	// Тип информационного блока (используется только для проверки)
        "INCLUDE_IBLOCK_INTO_CHAIN" => "N",	// Включать инфоблок в цепочку навигации
        "INCLUDE_SUBSECTIONS" => "N",	// Показывать элементы подразделов раздела
        "MESSAGE_404" => "",	// Сообщение для показа (по умолчанию из компонента)
        "NEWS_COUNT" => "2",	// Количество новостей на странице
        "PAGER_BASE_LINK_ENABLE" => "N",	// Включить обработку ссылок
        "PAGER_DESC_NUMBERING" => "N",	// Использовать обратную навигацию
        "PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",	// Время кеширования страниц для обратной навигации
        "PAGER_SHOW_ALL" => "N",	// Показывать ссылку "Все"
        "PAGER_SHOW_ALWAYS" => "N",	// Выводить всегда
        "PAGER_TEMPLATE" => ".default",	// Шаблон постраничной навигации
        "PAGER_TITLE" => "Новости",	// Название категорий
        "PARENT_SECTION" => "",	// ID раздела
        "PARENT_SECTION_CODE" => "",	// Код раздела
        "PREVIEW_TRUNCATE_LEN" => "",	// Максимальная длина анонса для вывода (только для типа текст)
        "PROPERTY_CODE" => array(	// Свойства
            0 => "LINK",
            1 => "",
        ),
        "SET_BROWSER_TITLE" => "N",	// Устанавливать заголовок окна браузера
        "SET_LAST_MODIFIED" => "N",	// Устанавливать в заголовках ответа время модификации страницы
        "SET_META_DESCRIPTION" => "N",	// Устанавливать описание страницы
        "SET_META_KEYWORDS" => "N",	// Устанавливать ключевые слова страницы
        "SET_STATUS_404" => "N",	// Устанавливать статус 404
        "SET_TITLE" => "N",	// Устанавливать заголовок страницы
        "SHOW_404" => "N",	// Показ специальной страницы
        "SORT_BY1" => "ACTIVE_FROM",	// Поле для первой сортировки новостей
        "SORT_BY2" => "SORT",	// Поле для второй сортировки новостей
        "SORT_ORDER1" => "DESC",	// Направление для первой сортировки новостей
        "SORT_ORDER2" => "ASC",	// Направление для второй сортировки новостей
    ),
        false
    );?>


    <!--- // end slider area --->

    <div class="main_container homepage">

        <!-- events -->
        <div class="ev_events">
            <div class="ev_h">
                <h3>Ближайшие события</h3>
                <a href="" class="ev_allevents">Все мероприятия &rarr;</a>
            </div>
            <ul class="ev_lastevent">
                <li>
                    <h4><a href="">29 августа 2012, Москва</a></h4>
                    <p>Семинар производителей мебели России и СНГ, Обсуждение тенденций.</p>
                </li>
                <li>
                    <h4><a href="">30 августа 2012, Санкт-Петербург</a></h4>
                    <p>Открытие шоу-рума на Невском проспекте. Последние модели в большом ассортименте.</p>
                </li>
                <li>
                    <h4><a href="">31 августа 2012, Краснодар</a></h4>
                    <p>Открытие нового магазина в нашей дилерской сети.</p>
                </li>
            </ul>
            <div class="clearboth"></div>
        </div>
        <!-- // end events -->
        <div class="cn_hp_content">
            <div class="cn_hp_category">
                <ul>
                    <li>
                        <img src="/bitrix/templates/.default/content/1.png" alt=""/>
                        <h2><a href="">Мягкая мебель</a></h2>
                        <p>Диваны, кресла и прочая мягкая мебель <a class="cn_hp_categorymore" href="">&rarr;</a></p>
                        <div class="clearboth"></div>
                    </li>
                    <li>
                        <img src="/bitrix/templates/.default/content/2.png" alt=""/>
                        <h2><a href="">Офисная мебель</a></h2>
                        <p>Диваны, столы, стулья <a class="cn_hp_categorymore" href="">&rarr;</a></p>
                        <div class="clearboth"></div>
                    </li>
                    <li>
                        <img src="/bitrix/templates/.default/content/3.png" alt=""/>
                        <h2><a href="">Мебель для кухни</a></h2>
                        <p>Полки, ящики, столы и стулья <a class="cn_hp_categorymore" href="">&rarr;</a></p>
                        <div class="clearboth"></div>
                    </li>
                    <li>
                        <img src="/bitrix/templates/.default/content/4.png" alt=""/>
                        <h2><a href="">Детская мебель</a></h2>
                        <p>Кровати, стулья, мягкая детская мебель <a class="cn_hp_categorymore" href="">&rarr;</a></p>
                        <div class="clearboth"></div>
                    </li>
                </ul>
                <a href="" class="cn_hp_category_more">Все разделы каталога &rarr;</a>
            </div>
            <div class="cn_hp_post">
                <div class="cn_hp_post_new">
                    <h3>Новинки</h3>
                    <img src="/bitrix/templates/.default/content/7.png" alt=""/>
                    <p>Угловой диван "Титаник", с большим выбором расцветок и фактур.</p>
                    <div class="clearboth"></div>
                </div>
                <div class="cn_hp_post_action">
                    <h3>Акции</h3>
                    <img src="/bitrix/templates/.default/content/7.png" alt=""/>
                    <p>Угловой диван "Титаник", с большим выбором расцветок и фактур.</p>
                    <div class="clearboth"></div>
                </div>
                <div class="cn_hp_post_bestsellersn">
                    <h3>Хиты продаж</h3>
                    <img src="/bitrix/templates/.default/content/7.png" alt=""/>
                    <p>Угловой диван "Титаник", с большим выбором расцветок и фактур.</p>
                    <div class="clearboth"></div>
                </div>
            </div>

            <?$APPLICATION->IncludeComponent("bitrix:news.list", "news.right", Array(
                "ACTIVE_DATE_FORMAT" => "j M Y",	// Формат показа даты
                "ADD_SECTIONS_CHAIN" => "Y",	// Включать раздел в цепочку навигации
                "AJAX_MODE" => "N",	// Включить режим AJAX
                "AJAX_OPTION_ADDITIONAL" => "",	// Дополнительный идентификатор
                "AJAX_OPTION_HISTORY" => "N",	// Включить эмуляцию навигации браузера
                "AJAX_OPTION_JUMP" => "N",	// Включить прокрутку к началу компонента
                "AJAX_OPTION_STYLE" => "Y",	// Включить подгрузку стилей
                "CACHE_FILTER" => "N",	// Кешировать при установленном фильтре
                "CACHE_GROUPS" => "Y",	// Учитывать права доступа
                "CACHE_TIME" => "36000000",	// Время кеширования (сек.)
                "CACHE_TYPE" => "A",	// Тип кеширования
                "CHECK_DATES" => "Y",	// Показывать только активные на данный момент элементы
                "DETAIL_URL" => "",	// URL страницы детального просмотра (по умолчанию - из настроек инфоблока)
                "DISPLAY_BOTTOM_PAGER" => "N",	// Выводить под списком
                "DISPLAY_DATE" => "Y",	// Выводить дату элемента
                "DISPLAY_NAME" => "Y",	// Выводить название элемента
                "DISPLAY_PICTURE" => "Y",	// Выводить изображение для анонса
                "DISPLAY_PREVIEW_TEXT" => "Y",	// Выводить текст анонса
                "DISPLAY_TOP_PAGER" => "N",	// Выводить над списком
                "FIELD_CODE" => array(	// Поля
                    0 => "",
                    1 => "",
                ),
                "FILTER_NAME" => "",	// Фильтр
                "HIDE_LINK_WHEN_NO_DETAIL" => "N",	// Скрывать ссылку, если нет детального описания
                "IBLOCK_ID" => "1",	// Код информационного блока
                "IBLOCK_TYPE" => "news",	// Тип информационного блока (используется только для проверки)
                "INCLUDE_IBLOCK_INTO_CHAIN" => "Y",	// Включать инфоблок в цепочку навигации
                "INCLUDE_SUBSECTIONS" => "Y",	// Показывать элементы подразделов раздела
                "MESSAGE_404" => "",
                "NEWS_COUNT" => "4",	// Количество новостей на странице
                "PAGER_BASE_LINK_ENABLE" => "N",	// Включить обработку ссылок
                "PAGER_DESC_NUMBERING" => "N",	// Использовать обратную навигацию
                "PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",	// Время кеширования страниц для обратной навигации
                "PAGER_SHOW_ALL" => "N",	// Показывать ссылку "Все"
                "PAGER_SHOW_ALWAYS" => "N",	// Выводить всегда
                "PAGER_TEMPLATE" => ".default",	// Шаблон постраничной навигации
                "PAGER_TITLE" => "Новости",	// Название категорий
                "PARENT_SECTION" => "",	// ID раздела
                "PARENT_SECTION_CODE" => "",	// Код раздела
                "PREVIEW_TRUNCATE_LEN" => "",	// Максимальная длина анонса для вывода (только для типа текст)
                "PROPERTY_CODE" => array(	// Свойства
                    0 => "",
                    1 => "",
                ),
                "SET_BROWSER_TITLE" => "Y",	// Устанавливать заголовок окна браузера
                "SET_LAST_MODIFIED" => "N",	// Устанавливать в заголовках ответа время модификации страницы
                "SET_META_DESCRIPTION" => "Y",	// Устанавливать описание страницы
                "SET_META_KEYWORDS" => "Y",	// Устанавливать ключевые слова страницы
                "SET_STATUS_404" => "Y",	// Устанавливать статус 404
                "SET_TITLE" => "Y",	// Устанавливать заголовок страницы
                "SHOW_404" => "Y",	// Показ специальной страницы
                "SORT_BY1" => "ACTIVE_FROM",	// Поле для первой сортировки новостей
                "SORT_BY2" => "SORT",	// Поле для второй сортировки новостей
                "SORT_ORDER1" => "DESC",	// Направление для первой сортировки новостей
                "SORT_ORDER2" => "ASC",	// Направление для второй сортировки новостей
                "COMPONENT_TEMPLATE" => ".default",
                "FILE_404" => "",	// Страница для показа (по умолчанию /404.php)
            ),
                false
            );?>
            <div class="clearboth"></div>
        </div>
    </div>



    <div class="rw_reviewed">
        <div class="rw_slider">
            <h4>Отзывы</h4>
            <ul id="foo">
                <li>
                    <div class="rw_message">
                        <img src="/bitrix/templates/.default/content/8.png" class="rw_avatar" alt=""/>
                        <span class="rw_name">Сергей Антонов</span>
                        <span class="rw_job">Руководитель финансового отдела “Банк+”</span>
                        <p>“Покупал офисные стулья и столы, остался очень доволен! Низкие цены, быстрая доставка, обслуживание на высоте! Спасибо!”</p>
                        <div class="clearboth"></div>
                        <div class="rw_arrow"></div>
                    </div>
                </li>
                <li>
                    <div class="rw_message">
                        <img src="/bitrix/templates/.default/content/8.png" class="rw_avatar" alt=""/>
                        <span class="rw_name">Дмитрий Иванов</span>
                        <span class="rw_job">Генеральный директор группы компаний "Офис+"</span>
                        <p>“В магзине предоставили потрясающий выбор расцветок, а также, получил большую скидку по карте постоянного клиента.”</p>
                        <div class="clearboth"></div>
                        <div class="rw_arrow"></div>
                    </div>
                </li>
                <li>
                    <div class="rw_message">
                        <img src="/bitrix/templates/.default/content/8.png" class="rw_avatar" alt=""/>
                        <span class="rw_name">Сергей Антонов</span>
                        <span class="rw_job">Руководитель финансового отдела “Банк+”</span>
                        <p>“Покупал офисные стулья и столы, остался очень доволен! Низкие цены, быстрая доставка, обслуживание на высоте! Спасибо!”</p>
                        <div class="clearboth"></div>
                        <div class="rw_arrow"></div>
                    </div>
                </li>
            </ul>
            <div id="rwprev"></div>
            <div id="rwnext"></div>
            <a href="" class="rw_allreviewed">Все отзывы</a>
        </div>
    </div>
