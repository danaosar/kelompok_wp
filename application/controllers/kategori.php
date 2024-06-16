<!-- edit by Renaldy -->
<?php

class Kategori extends CI_Controller{
    public function ShockBreaker()
    {
        $data['shockbreaker'] = $this->model_kategori->data_shockbreaker()->result();
        $this->load->view('templates/header');
        $this->load->view('templates/sidebar');
        $this->load->view('shockbreaker', $data);
        $this->load->view('templates/footer');
    }

    public function Velg()
    {
        $data['velg'] = $this->model_kategori->data_velg()->result();
        $this->load->view('templates/header');
        $this->load->view('templates/sidebar');
        $this->load->view('velg', $data);
        $this->load->view('templates/footer');
    }

    public function Mesin()
    {
        $data['mesin'] = $this->model_kategori->data_mesin()->result();
        $this->load->view('templates/header');
        $this->load->view('templates/sidebar');
        $this->load->view('mesin', $data);
        $this->load->view('templates/footer');
    }

    public function Aksesoris()
    {
        $data['aksesoris'] = $this->model_kategori->data_aksesoris()->result();
        $this->load->view('templates/header');
        $this->load->view('templates/sidebar');
        $this->load->view('aksesoris', $data);
        $this->load->view('templates/footer');
    }
}