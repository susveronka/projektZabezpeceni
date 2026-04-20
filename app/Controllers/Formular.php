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
        $login    = $this->request->getPost('login');
        $password = $this->request->getPost('password');

        $logged = $this->ionAuth->login($login, $password);
        $alertObject = new \stdClass();

        if ($logged) {
            $alertObject->text = $this->config->errorMessage['loginSuccess'];
            $alertObject->type = "success";

            return redirect()->to('admin/index')->with('alert', $alertObject);
        } else {
            $alertObject->text = $this->config->errorMessage['loginDanger'];
            $alertObject->type = "danger";
             return redirect()->to('login/prihlaseni')->with('alert', $alertObject);

        }
    }
}