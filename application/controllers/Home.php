<?php

// This can be removed if you use __autoload() in config.php OR use Modular Extensions
require APPPATH . '/libraries/REST_Controller.php';

class Home extends REST_Controller {

    public function index_get()
    {
        $this->set_response(null, REST_Controller::HTTP_OK);
    }
}
