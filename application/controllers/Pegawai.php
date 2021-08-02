<?php

class Pegawai extends CI_Controller
{
    public function __construct()
    {
        # code...
        parent::__construct();
    }

    public function index()
    {
        # code...

        $data['title'] = 'Pegawai';

        $this->load->view('templates/header.php', $data);
        $this->load->view('templates/sidebar.php', $data);
        $this->load->view('templates/nav.php', $data);
        $this->load->view('pages/pegawai/index.php', $data);
        $this->load->view('templates/footer.php', $data);
        $this->load->view('templates/script.php', $data);
    }

    public function add()
    {
        # code...
        $data['title'] = 'Tambah Pegawai';
        $data['addon_script'] = '<script src="' . base_url() . '/assets/js/form.js"></script>';

        $this->load->view('templates/header.php', $data);
        $this->load->view('templates/sidebar.php', $data);
        $this->load->view('templates/nav.php', $data);
        $this->load->view('pages/pegawai/tambah.php', $data);
        $this->load->view('templates/footer.php', $data);
        $this->load->view('templates/script.php', $data);

    }

    public function detail()
    {
        # code...

        $data['title'] = 'Pegawai - Detail';

        $this->load->view('templates/header.php', $data);
        $this->load->view('templates/sidebar.php', $data);
        $this->load->view('templates/nav.php', $data);
        $this->load->view('pages/pegawai/detail.php', $data);
        $this->load->view('templates/footer.php', $data);
        $this->load->view('templates/script.php', $data);

    }

}
