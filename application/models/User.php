<?php

class User extends CI_Model {

    public function __construct()
    {
        parent::__construct();

        // 独自処理
    }

    public function index_get()
    {
        $this->set_response(null, REST_Controller::HTTP_OK);
    }
}
