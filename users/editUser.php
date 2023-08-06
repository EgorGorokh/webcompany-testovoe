<?php

$id=$_POST['id'];
$first_name=$_POST['first_name'];
$last_name=$_POST['last_name'];
$city=$_POST['city'];
$photo=$_POST['photo'];


if(isset($_POST['edit_fors_names'])) {
    ?>




<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <title>Тестовое Гороха</title>
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
                            <li  ><a href="../cities.php">Города</a></li>
                            <li class='current' ><a href="users.php">Пользователи</a></li>
                            <li  ><a href="?page=3">Поиск</a></li>
                        </ul>
                    </div>
                </div>
                <div id="content">
                    <div id="left">   
                        <div class="post">
                            <div class="postheader"> </div>
                            <div class="postcontent"> 
                                <h2>Общее количество загрузок страницы = <b>44</b></h2>
                            </div>
                            <div class="postbottom">
                                <h3 style=" margin-left: 25px; ">Вы посещали эту страницу <b>
                                        23                                    </b> раз</h3>
                            </div>
                        </div>
                        <div class="post">
    <div class="postheader"> </div>
    <div class="postcontent"> 
        <h2>Список Пользователей</h2> 
        <p><a name="top"></a></p>
                    <form action="editUserdb.php" method="post"  enctype='multipart/form-data'>
                                <div class="form">
                    <h3>Форма Редактирования Пользователя</h3>
                    <span>Имя <input type="text" name="edit_text_name" required Value="<?php echo $first_name ?> "> </span>
                    <span>Фамилия <input type="text" name="edit_text_surname" required Value="<?php echo $last_name ?> "> </span>
                    <span>Город 




                        <select  size="1" name="edit_selsity">
                            <option disabled><?php echo $city ?></option>
                            <?php 
                         require_once '../DataBase.php';
                         $dataBase=new DataBase();
                         $connect=$dataBase->getConnection();
                         $cities=$dataBase->getCitiesUnic($connect);
                            foreach($cities as $arr => $value) {
                                echo "   <option  value={$value['name']}>{$value['name']}</option>";
                        ?>
                                                           

                                                            <?php } ?>
                                                            </select>
                                                        
                                                        
                                                        </span>




                    <img width='100' src="../images/lavamenu2.png" class='image' alt="Фотография">
                    <input type="file" name='uploadfile' value="lavamenu2.png">
                    <input type="hidden" name="photo" value="../images/lavamenu2.png" >
                    <input type="hidden" name="id" value="<?php echo $id ?>" >
                  
                    <input type="submit" name="subm_edit_names" value='Подтвердить редактирование'> 
                    <a href='users.php'>Отмена</a>
                </div>
            </form>
                    <!--Сортирвка-->
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