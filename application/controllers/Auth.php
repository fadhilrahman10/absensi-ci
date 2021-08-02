<?php

class Auth extends CI_Controller
{
    public function __construct()
    {
        # code...
        parent::__construct();
    }

    public function index()
    {
        # code...

        $data['title'] = 'Login';

        $this->load->view('templates/header.php', $data);
        $this->load->view('pages/auth/login.php', $data);
        $this->load->view('templates/script.php', $data);
    }

}
