<?php

class Absent extends CI_Controller
{
    public function __construct()
    {
        # code...
        parent::__construct();
    }

    public function index()
    {
        # code...

        $data['title'] = 'Absent';

        $this->load->view('templates/header.php', $data);
        $this->load->view('templates/sidebar.php', $data);
        $this->load->view('templates/nav.php', $data);
        $this->load->view('pages/absent/index.php', $data);
        $this->load->view('templates/footer.php', $data);
        $this->load->view('templates/script.php', $data);
    }

    public function detail()
    {
        # code...

        $data['title'] = 'Absent - Detail';

        $this->load->view('templates/header.php', $data);
        $this->load->view('templates/sidebar.php', $data);
        $this->load->view('templates/nav.php', $data);
        $this->load->view('pages/absent/detail.php', $data);
        $this->load->view('templates/footer.php', $data);
        $this->load->view('templates/script.php', $data);

    }

}
