<?php

namespace App\Controllers;

use CodeIgniter\HTTP\RequestInterface;
use CodeIgniter\HTTP\ResponseInterface;
use Psr\Log\LoggerInterface;
use Config\Config;
use Stdclass;

class Formular extends BaseController
{
    public $ionAuth;
    public $config;
    public $alert;
    public $alertObject;

    public function initController(RequestInterface $request, ResponseInterface $response, LoggerInterface $logger)
    {
        // call parent first
        parent::initController($request, $response, $logger);

        // helpers and libraries
        helper('form'); // for set_value(), csrf_field(), etc.
        $this->ionAuth = new \IonAuth\Libraries\IonAuth();
        $this->config = new Config();
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

    public function loginFinish()
    {
        $login    = $this->request->getPost('login'); // Get the login value from the POST request
        $password = $this->request->getPost('password'); // Get the password value from the POST request

        $logged = $this->ionAuth->login($login, $password); // porovná login a heslo - odpovídá nebo ne
        $alertObject = new stdClass();

        if ($logged) { // pokud prošlo přihlásí a přesměruje na stránku admin/index s hláškou o úspěchu
            $alertObject->text = $this->config->errorMessage['loginSuccess'];
            $alertObject->type = "success";

            return redirect()->to('admin/index')->with('alert', $alertObject);
        } else {  // pokud neprošlo, přesměruje zpět na přihlašovací stránku s hláškou o chybě
            $alertObject->text = $this->config->errorMessage['loginDanger'];
            $alertObject->type = "danger";
             return redirect()->to('login/prihlaseni')->with('alert', $alertObject);

        }
    }
}