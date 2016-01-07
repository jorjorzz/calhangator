<?php
/**
 * Created by PhpStorm.
 * User: om3rcitak
 * Date: 7.1.2016
 * Time: 22:03
 */

require "Calhangator.php";

$chat = new Calhangator();

$chat->profile_picture = "http://static1.wikia.nocookie.net/__cb20130304122244/angrybirdsfanon/images/f/f0/Angry_Bird_red.png";
$chat->he_firstname = "Femme";
$chat->he_lastname = "Fatale";
$chat->me_name = "Özge Nur";
$chat->me_job = "tıpçı";

$chat->render();
