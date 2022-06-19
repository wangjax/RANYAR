<?php

class Kategori extends CI_Controller{
    public function crewneck()
    {
        $data['crewneck'] = $this->model_kategori->data_crewneck()->result();
        $this->load->view('templates/header');
        $this->load->view('templates/sidebar');
        $this->load->view('crewneck', $data);
        $this->load->view('templates/footer');
    }


    public function kaus()
    {
        $data['kaus'] = $this->model_kategori->data_kaus()->result();
        $this->load->view('templates/header');
        $this->load->view('templates/sidebar');
        $this->load->view('kaus', $data);
        $this->load->view('templates/footer');
    }
}