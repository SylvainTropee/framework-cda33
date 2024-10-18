<?php

namespace App\controller;

use App\form\Form;

class UserController
{

    public function register()
    {

        if (isset($_POST['submit'])) {
            $firtsnameError = "Veuillez renseigner votre prénom";
        }

        $userForm = new Form();
        $userForm->addInput("firstname", "Prénom", "text", isset($firtsnameError) ? $firtsnameError : '');
        $userForm->addInput("lastname", "Nom");
        $userForm->addInput("password", "Mot de passe", 'password');
        $userForm->addSubmit("Enregistrer");

        $content = $userForm->getForm();

        require_once "../templates/user/register.php";
    }

}