<?php

/**
 * Created by PhpStorm.
 * User: om3rcitak
 * Date: 7.1.2016
 * Time: 21:50
 */
class Calhangator
{
    public $profile_picture = "http://static1.wikia.nocookie.net/__cb20130304122244/angrybirdsfanon/images/f/f0/Angry_Bird_red.png";
    public $he_firstname = "Femme";
    public $he_lastname = "Fatale";
    public $me_name = "Özge Nur";
    public $me_job = "Tıpçı";

    /**
     *
     * render is template
     * @author Omer Citak <mail@omercitak.com>
     */
    public function render()
    {
        $template = file_get_contents("assets/template.tpl");
        $template = str_replace(
            ['{profile_picture}', '{him_firstname}', '{him_fullname}', '{you_name}', '{you_job}'],
            [$this->profile_picture, $this->he_firstname, $this->he_firstname . ' ' . $this->he_lastname, $this->me_name, $this->me_job],
            $template
        );
        echo $template;
    }
}
