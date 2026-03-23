<?php

namespace App\Controllers;

use CodeIgniter\HTTP\RequestInterface;
use CodeIgniter\HTTP\ResponseInterface;
use Psr\Log\LoggerInterface;

class Formular extends BaseController
{
    public $ionAuth;

    public function initController(RequestInterface $request, ResponseInterface $response, LoggerInterface $logger)
    {
        // call parent first
        parent::initController($request, $response, $logger);

        // helpers and libraries
        helper('form'); // for set_value(), csrf_field(), etc.
        $this->ionAuth = new \IonAuth\Libraries\IonAuth();
    }

    public function index(): string
    {
        return view('welcome_message');
    }

    public function prihlaseni()
    {
        // show the form
        return view('login/prihlaseni');
    }

    public function prihlaseniPost()
    {
        $login    = $this->request->getPost('login');
        $password = $this->request->getPost('password');

        $logged = $this->ionAuth->login($login, $password);

        if ($logged) {
            return redirect()->to(site_url('formular/index'));
        } else {
            session()->setFlashdata('login_error', 'Neplatné přihlašovací údaje.');
            return redirect()->to(site_url('formular/prihlaseni'));
        }
    }
}