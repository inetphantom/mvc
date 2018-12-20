<?php

namespace App\Controller;

use App\View\View;
use App\Form\Form;
use App\Repository\UserRepository;

/**
 * Siehe Dokumentation im DefaultController.
 */
class UserController
{
    public function index()
    {
        $userRepository = new UserRepository();

        $view = new View('user_index');
        $view->title = 'Benutzer';
        $view->heading = 'Benutzer';
        $view->users = $userRepository->readAll();
        $view->display();
    }

    public function create()
    {
        $form = new Form('/user/doCreate');
        $form->text()->label('Vorname')->name('fname');
        $form->text()->label('Nachname')->name('lname');
        $form->text()->label('Mail')->name('email');
        // echo $form->password()->label('Password')->name('password');
        $form->submit()->label('Benutzer erstellen')->name('send');

        $view = new View('user_create');
        $view->title = 'Benutzer erstellen';
        $view->heading = 'Benutzer erstellen';
        $view->form = $form;
        $view->display();
    }

    public function doCreate()
    {
        if (isset($_POST['send'])) {
            $firstName = $_POST['fname'];
            $lastName = $_POST['lname'];
            $email = $_POST['email'];
            //$password = $_POST['password'];
            $password = 'nopassword';

            $userRepository = new UserRepository();
            $userRepository->create($firstName, $lastName, $email, $password);
        }

        // Anfrage an die URI /user weiterleiten (HTTP 302)
        header('Location: /user');
    }

    public function delete()
    {
        $userRepository = new UserRepository();
        $userRepository->deleteById($_GET['id']);

        // Anfrage an die URI /user weiterleiten (HTTP 302)
        header('Location: /user');
    }
}
