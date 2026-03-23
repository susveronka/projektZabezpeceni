<?php

namespace App\Controllers;

class Formular extends BaseController
{
    public function __construct()
    {
        helper('form'); // load once so set_value() and csrf_field() are available in views
    }

    public function index(): string
    {
        return view('welcome_message');
    }

    public function prihlaseni()
    {
        // show the form (no data on first load)
        return view('login/prihlaseni');
    }

    public function prihlaseniPost()
    {
    

        // co získáme uložíme jako proměnné
        $login = $this->request->getPost('login');
        $password = $this->request->getPost('password');

        // zobrazit
     // var_dump($login, $password);

        return view('login/prihlaseni', [
            'login'    => $login,
            'password' => $password,
        ]);
    }
}
