<?php

class Dashboard extends CI_Controller
{
    public function __construct()
    {
        # code...
        parent::__construct();
    }

    public function index()
    {
        # code...

        $data['title'] = 'Dashboard';

        $this->load->view('templates/header.php', $data);
        $this->load->view('templates/sidebar.php', $data);
        $this->load->view('templates/nav.php', $data);
        $this->load->view('pages/dashboard/index.php', $data);
        $this->load->view('templates/footer.php', $data);
        $this->load->view('templates/script.php', $data);
    }

}
