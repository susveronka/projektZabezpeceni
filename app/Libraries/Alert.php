<?php
namespace App\Libraries;
namespace Config;

class Alert
{
    private $config;
    public function __construct()
    {
      $this->config = new Config;
    }
    public function makeMessage(bool $status, $type){

 $result = new \stdClass();
        if($status) {
            $result->class = "success";
            $shortType = $type."Success";
        } else {
            $result->class = "danger";
            $shortType = $type."Danger";
        }
        $result->message = $this->config->errorMessage[$shortType];
        return $result;
    }
}
