<?php

$id=$_POST['id'];
$name=$_POST['name'];
$index_sort=$_POST['index_sort'];

if(isset($_POST['edit_fors_city'])){
   ?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <title>Тестовое Горох</title>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
        <link href="../style.css" rel="stylesheet" type="text/css" />
        <script type="text/javascript" src="../js/jquery-1.1.3.1.min.js"></script>
        <script type="text/javascript" src="../js/jquery.easing.min.js"></script>
        <script type="text/javascript" src="../js/jquery.lavalamp.min.js"></script>
        <script type="text/javascript">
            $(function () {
                $("#1, #2, #3").lavaLamp({
                    fx: "backout",
                    speed: 700,
                    click: function (event, menuItem) {
                        return true;
                    }
                });
            });
        </script>
        <link href="../lavalamp.css" rel="stylesheet" type="text/css" />
    </head>
    <body>
        <div id="wrap">
            <div id="topbg"> </div>
            <div id="wrap2">
                <div id="topbar">
                    <img style="float:left;margin:0 150px 0 20px;height:65px;" src="../images/logo.svg" alt="logo"> 
                        <h1 id="sitename"><a href="#">Тестовое задание</a> <span class="description"></span></h1>
                </div>
                <div id="header">
                    <div id="headercontent"> </div>
                    <div id="topnav">
                        <ul class="lavaLampWithImage" id="1">
                            <li class='current' ><a href="cities.php">Города</a></li>
                            <li  ><a href="../users/users.php">Пользователи</a></li>
                            <li  ><a href="../search/search.php">Поиск</a></li>
                        </ul>
                    </div>
                </div>
                <div id="content">
                    <div id="left">   
                        <div class="post">
                            <div class="postheader"> </div>
                            <div class="postcontent"> 



                                                   <?php
if (!isset($_COOKIE['first1'])) {
    $_COOKIE['first1'] = 0;
}
if (!isset($_COOKIE['second2'])) {
    $_COOKIE['second2'] = 0;
}
if (!isset($_COOKIE['third3'])) {
    $_COOKIE['third3'] = 0;
}
$_COOKIE['first1']++;
                            SetCookie('first1', $_COOKIE['first1'], time() + 3600);
                            ?>
                                <h2>Общее количество загрузок страницы = <b><?php echo $_COOKIE['first1']+$_COOKIE['second2']+$_COOKIE['third3'] ?> </b></h2>
                            </div>
                            <div class="postbottom">
                                <h3 style=" margin-left: 25px; ">Вы посещали эту страницу <b>
                                <?php echo $_COOKIE['first1'] ?>                               </b> раз</h3>
                            </div>
                        </div>




                        <div class="post">
    <div class="postheader"> </div>
    <div class="postcontent"> 
        <h2>Список городов</h2>       
        
      






                    <form action="editCity.php" method="post">
                <div class='form'>
                    <h3>Форма редактирования города</h3>
                    <span>Название:<input type="text" name="edit_text_city" required Value="<?php echo $name ?> "></span>
                    <span>Индекс Сортировки:<input type="text" name="edit_text_rangir" required Value="<?php echo $index_sort ?> "></span>
                    <input type="hidden" name="id" value="<?php echo $id ?> ">
                    <input type="hidden" name="oldName" value="<?php echo $name?>">

                    <input type="submit" name="submit_edit_city" value='Подтвердить редактирование'>
                    <a href='cities.php'>Отмена</a>	 
                </div>	
            </form>
        <!--вывод таблицы Города-->
            </div>
    <div class="postbottom">
    </div>
</div>                    </div>
                    <div id="sidebar">
                        <h3> <b>Слева рабочая модель.</b></h3>
                        <h3>Описание тестового задания</h3>
                        <div class='zadanie'>
                            <h4>Общее для всех страниц</h4>
                            <ul>
                                <ol>1 Общий счетчик на сайт</ol>
                                <ol>2 Счетчик на каждую страницу</ol>
                            </ul>
                            <h4>Страница города</h4>
                            <ul>
                                <ol>1 Вывод всех городов</ol>
                                <ol>2 Добавление</ol>
                                <ol>3 Удаление</ol>
                                <ol>4 Редактирование</ol>
                                <ol><b>5 Сортировка</b></ol>
                                <ol>5.1 Выбор направления</ol>
                                <ol>5.2 Выбор поля</ol>
                            </ul>
                            <h4>Страница Пользователи</h4>
                            <ul>
                                <ol>1 Вывод всех Пользователей</ol>
                                <ol>2 Добавление</ol>
                                <ol>3 Удаление</ol>
                                <ol>4 Редактирование</ol>
                                <ol><b>5 Сортировка</b></ol>
                                <ol>5.1 Выбор направления</ol>
                                <ol>5.2 Выбор поля</ol>
                                <ol>6 Фильтр по городам</ol>
                            </ul>
                            <h4>Страница Поиск</h4>
                            <ul>
                                <ol>1 Форма поиска</ol>
                                <ol>2 Поиск по фамилии</ol>
                                <ol>3 Поиск по имени</ol>
                                <ol>4 Вывод результатов</ol>
                            </ul>
                            <h3>Описание связей</h3>
                            <p>
                                Если изменяем название города Орша На Орша1 
                                то у всех пользователей которые были выбрали Орша 
                                Станет так-же Орша1 и во всех списках выбора города будет уже Орша1
                            </p>
                            <h3>Требование при выполнении</h3>
                            <p>
                                <h4>Не использовать фреймворки!!!</h4>
                                <h4>Использовать разбитие кода на функции</h4>
                                <h4>Понятные названия переменных</h4>
                                <h4>Язык прогроммирования серверной части PHP</h4>
                                <h4>Использование $_COOKIE для счетчиков</h4>
                            </p>
                        </div>
                    </div>
                    <div class="clear"></div>
                </div>
                <div id="footer"> 
                    <div class="credit">Webcompany 2023г</div>
                </div>
            </div>
            <div id="btmbg"> </div>
        </div>
    </body>
</html>
<?php } ?>