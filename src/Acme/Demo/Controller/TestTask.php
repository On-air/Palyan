<?php
/**
 * Created by PhpStorm.
 * User: roma
 * Date: 12.09.17
 * Time: 22:54
 */

namespace Acme\Demo\Controller;


class TestTask
{
   static public function first(){

       $param = array(
           "wrong_input" => false,
       );

       if(isset(\Flight::request()->query->wrong_input)){
           $param["wrong_input"] = true;
       }

       \Flight::render('testTask/first', $param, 'content'); //1-название файла темплейта 2- массив с переменными которые будут подставлятся в наш файлик чтоб контент был динамическим 3- название переменной которая потом будет подставленна в loyout
       \Flight::render('layout', array());
   }

   static public function second(){

       $name = isset(\Flight::request()->data->name) ? \Flight::request()->data->name : "";
       $lastname = isset(\Flight::request()->data->lastname) ? \Flight::request()->data->lastname : "";

       if(empty($name) && empty($lastname)){
           \Flight::redirect("/first?wrong_input");
       }

       $param = array(
           'name' => $name, //дата означет пост а квери гет запросы
           'lastname' => $lastname,
       );

       \Flight::render('testTask/second', $param, 'content'); //1-название файла темплейта 2- массив с переменными которые будут подставлятся в наш файлик чтоб контент был динамическим 3- название переменной которая потом будет подставленна в loyout
       \Flight::render('layout', array());
   }
}