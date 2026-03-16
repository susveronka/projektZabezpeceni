<?php

namespace App\Controllers;

class Formular extends BaseController
{
    public function index(): string
    {
        return view('welcome_message');
    }

    public function prihlaseni()   
    {
        return view('prihlaseni');
    }

    public function prihlaseniPost()
    {
        
        $login = $this->request->getPost('login');
        $password = $this->request->getPost('password');

       

        return redirect()->to('/');
    }
}
