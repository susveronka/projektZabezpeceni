<?php

namespace Config;

use CodeIgniter\Config\BaseConfig;

class Config extends BaseConfig
{
    public $errorMessage = [
        'filterDanger' => 'Nejdřív přihlásit',
        'loginDanger' => 'Neplatné přihlašovací údaje',
        'loginSuccess' => 'Přihlášení proběhlo úspěšně'

    ];
}
