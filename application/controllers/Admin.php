<?php 
    Class Admin extends CI_Controller
    {
        public function index()
        {
            $data['judul'] = 'Admin Kaktuskmi';

            $this->load->view('templates/header', $data);
            $this->load->view('admin/index');
            $this->load->view('templates/footer');
        }
    }
?>