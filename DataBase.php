<?php

class DataBase
{
    private $servername;
    private $username;
    private $passpord;
    private $dbname;

    public function getConnection()
    {
        $this->servername ='localhost';
        $this->username='root';
        $this->password='root';
        $this->dbname='test_web_company';

        try {
            $connect=new mysqli($this->servername, $this->username, $this->password, $this->dbname);
            return $connect;
        } catch (Exception $e) {
            $error=$e->getMessage();
            echo $error;
        }
    }




    public function addCity($connect, $name, $index_sort)
    {
        $request1="INSERT INTO `cities`( `name`,`index_sort`)
    VALUES (
     '$name','$index_sort'
    )";

        if($connect->query($request1)) {
            header('Location: cities.php');
        } else {
            echo "Ошибка записи: Попробуйте еще раз " . $connect->error;
        }
    }







    public function getCities($connect)
    {
        $request2 = "SELECT * FROM cities ";
        $result2 = $connect->prepare($request2);
        $result2->execute();
        $result2 = $result2->get_result();
        return  $result2;
    }


    public function getCitiesUnic($connect)
    {
        $request2 = "SELECT DISTINCT name FROM cities";
        $result2 = $connect->prepare($request2);
        $result2->execute();
        $result2 = $result2->get_result();
        return  $result2;
    }



    public function deleteCity($connect, $id)
    {
        $request = "DELETE  FROM `cities` WHERE id=$id";
        if($connect->query($request)) {
            header('Location: cities.php');
        } else {
            echo "Ошибка: " . $connect->error;
        }
    }

    public function deleteUser($connect, $id)
    {
        $request = "DELETE  FROM `users` WHERE id=$id";
        if($connect->query($request)) {
            header('Location: users.php');
        } else {
            echo "Ошибка: " . $connect->error;
        }
    }







    public function editCity($connect, $id, $name, $indexOfSort)
    {
        $request = "UPDATE cities SET index_sort='$indexOfSort', name='$name'   WHERE id='$id' ";
        if($connect->query($request)) {
            header('Location: cities.php');
        } else {
            echo "Ошибка: " . $connect->error;
        }

    }



public function editAllCityName($connect,$city, $oldCity){
    $request = "UPDATE users SET city='$city' WHERE city='$oldCity' ";
        if($connect->query($request)) {
           echo "город во всез юзерах изменен";
        } else {
            echo "Ошибка: " . $connect->error;
        }
}







    public function editUser($connect,$id, $first_name, $last_name,$city,$photo)
    {
        $request = "UPDATE users SET first_name='$first_name', last_name='$last_name' ,city='$city',photo='$photo' WHERE id='$id' ";
        if($connect->query($request)) {
            header('Location: users.php');
        } else {
            echo "Ошибка: " . $connect->error;
        }
    }


    public function sortCities($connect, $sort_sity, $sort_order_by)
    {

    if($sort_sity=='sort_id') {
        $sort='id';
    } elseif($sort_sity=='sort_city') {
        $sort='name';
    } else {
        $sort='index_sort';
    }

    if($sort_order_by=='sort_asc') {
        $order='ASC';
    } else {
        $order='DESC';
    }

    $request2 = "SELECT * FROM cities ORDER BY $sort $order";
    $result2 = $connect->prepare($request2);
    $result2->execute();
    $result2 = $result2->get_result();
    return  $result2;
}











public function sortUsersWithOrder($connect, $sort_sity, $sort_order_by)
    {

    if($sort_sity=='sort_id') {
        $sort='id';
    } elseif($sort_sity=='sort_nm') {
        $sort='first_name';
    }elseif($sort_sity=='sort_srnm'){
         $sort='last_name';
    } else {
        $sort='city';
    }

    if($sort_order_by=='sort_asc') {
        $order='ASC';
    } else {
        $order='DESC';
    }

    $request2 = "SELECT * FROM users ORDER BY $sort $order";
    $result2 = $connect->prepare($request2);
    $result2->execute();
    $result2 = $result2->get_result();
    return  $result2;
}

public function sortUsersWithFilter($connect, $filter)
    {
    $request2 = "SELECT * FROM users WHERE city='$filter'";
    $result2 = $connect->prepare($request2);
    $result2->execute();
    $result2 = $result2->get_result();
    return  $result2;
}


public function sortUsersWithOrderAndFilter($connect, $sort_sity, $sort_order_by,$filter)
    {

    if($sort_sity=='sort_id') {
        $sort='id';
    } elseif($sort_sity=='sort_nm') {
        $sort='first_name';
    }elseif($sort_sity=='sort_srnm'){
         $sort='last_name';
    } else {
        $sort='city';
    }

    if($sort_order_by=='sort_asc') {
        $order='ASC';
    } else {
        $order='DESC';
    }

    $request2 = "SELECT * FROM users WHERE city='$filter' ORDER BY $sort $order";
    $result2 = $connect->prepare($request2);
    $result2->execute();
    $result2 = $result2->get_result();
    return  $result2;
}












public function addUser($connect, $name,$surname,$city, $fileName)
{
    $request1="INSERT INTO `users`( `first_name`,`last_name`,`city`,`photo`)
VALUES (
 '$name','$surname','$city','$fileName'
)";

    if($connect->query($request1)) {
        header('Location: users.php');
    } else {
        echo "Ошибка записи: Попробуйте еще раз " . $connect->error;
    }
}





public function getUsers($connect)
{
    $request2 = "SELECT * FROM users ";
    $result2 = $connect->prepare($request2);
    $result2->execute();
    $result2 = $result2->get_result();
    return  $result2;
}


public function search($connect,$inputSearch)
{
    $request2 = "SELECT * FROM users WHERE `first_name` = '$inputSearch' || `last_name` = '$inputSearch'";
    $result2 = $connect->prepare($request2);
    $result2->execute();
    $result2 = $result2->get_result();
    return  $result2;
}


}
