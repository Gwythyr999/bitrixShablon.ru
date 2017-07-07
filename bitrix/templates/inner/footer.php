</div>
</div>
<div class="sb_sidebar">
    <?$APPLICATION->IncludeComponent("bitrix:menu", "main.left.menu", Array(
        "ALLOW_MULTI_SELECT" => "N",	// Разрешить несколько активных пунктов одновременно
        "CHILD_MENU_TYPE" => "left",	// Тип меню для остальных уровней
        "DELAY" => "N",	// Откладывать выполнение шаблона меню
        "MAX_LEVEL" => "2",	// Уровень вложенности меню
        "MENU_CACHE_GET_VARS" => "",	// Значимые переменные запроса
        "MENU_CACHE_TIME" => "3600",	// Время кеширования (сек.)
        "MENU_CACHE_TYPE" => "N",	// Тип кеширования
        "MENU_CACHE_USE_GROUPS" => "Y",	// Учитывать права доступа
        "ROOT_MENU_TYPE" => "left",	// Тип меню для первого уровня
        "USE_EXT" => "N",	// Подключать файлы с именами вида .тип_меню.menu_ext.php
        "COMPONENT_TEMPLATE" => "vertical_multilevel"
    ),
        false
    );?>

    <div class="sb_event">
        <div class="sb_event_header"><h4>Ближайшие события</h4></div>
        <p><a href="">29 августа 2012, Москва</a></p>
        <p>Семинар производителей мебели России и СНГ, Обсуждение тенденций.</p>
    </div>
    <div class="sb_action">
        <a href=""><img src="/bitrix/templates/.default/content/11.png" alt=""/></a>
        <h4>Акция</h4>
        <h5><a href="">Мебельная полка всего за 560 Р</a></h5>
        <a href="" class="sb_action_more">Подробнее &rarr;</a>
    </div>
    <?$APPLICATION->IncludeComponent(
        "bitrix:main.include",
        ".default",
        array(
            "AREA_FILE_SHOW" => "sect",
            "AREA_FILE_SUFFIX" => "inc",
            "EDIT_TEMPLATE" => "",
            "PATH" => "/include/phone.php",
            "COMPONENT_TEMPLATE" => ".default",
            "AREA_FILE_RECURSIVE" => "Y"
        ),
        false
    );?>
    <div class="sb_reviewed">
        <img src="/bitrix/templates/.default/content/8.png" class="sb_rw_avatar" alt=""/>
        <span class="sb_rw_name">Сергей Антонов</span>
        <span class="sb_rw_job">Руководитель финансового отдела “Банк+”</span>
        <p>“Покупал офисные стулья и столы, остался очень доволен! Низкие цены, быстрая доставка, обслуживание на высоте! Спасибо!”</p>
        <div class="clearboth"></div>
        <div class="sb_rw_arrow"></div>
    </div>
</div>
<div class="clearboth"></div>
</div>
</div>
<?include_once ($_SERVER["DOCUMENT_ROOT"]."/bitrix/templates/.default/include/footer.php")?>

</body>
</html>