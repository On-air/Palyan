<?php
/**
 * Created by PhpStorm.
 * User: roma
 * Date: 11.09.17
 * Time: 22:44
 */

namespace Acme\Demo\Controller;


class Dashboard
{
  static public function index(){

      \Flight::render('dashboard', array(), 'content'); //1-название файла темплейта 2- массив с переменными которые будут подставлятся в наш файлик чтоб контент был динамическим 3- название переменной которая потом будет подставленна в loyout
      \Flight::render('layout', array());
  }
}