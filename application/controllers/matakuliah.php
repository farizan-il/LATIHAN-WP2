<?php
class Matakuliah extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->helper('url');
        $this->load->library('form_validation'); 
    }

    public function index()
    {
        $this->load->view('view-form-matakuliah');
    }

    public function cetak()
    {
        $this->form_validation->set_rules(
            'kode',
            'Kode Matakuliah',
            'required|min_length[3]',
            [
                'required' => 'Kode Matakuliah Harus diisi',
                'min_length' => 'kodenya terlalu pendek' 
            ]
        );
        $this->form_validation->set_rules(
            'nama',
            'Nama Matakuliah',
            'required|min_length[3]',
            [
                'required' => 'Nama Matakuliah Harus diisi',
                'min_length' => 'namanya terlalu pendek' 
            ]
        );

        if ($this->form_validation->run() == false) { 
            $this->load->view('view-form-matakuliah');
        } else {
            $data = [
                'kode' => $this->input->post('kode'),
                'nama' => $this->input->post('nama'),
                'sks' => $this->input->post('sks')
            ];
            $this->load->view('view-data-matakuliah', $data);
        }
    }
}
?>
