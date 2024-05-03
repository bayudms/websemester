<?php
class Matakuliah extends CI_Controller
{
    public function index()
    {
        $this->load->view('view-form-matakuliah');
    }
    public function cetak()
    {
        $this->form_validation->set_rules('kode','Kode Matakuliah','required|minlength[3]',[
            'required' => 'Kode Matakuliah Harus diisi',
            'min_length' => 'Kode Terlalu Pendek']);

        $this->form_validation->set_rules('nama','Nama Matakuliah','required|minlength')

        $data = [
            'kode' => $this->input->post('kode'),
            'nama' => $this->input->post('nama'),
            'sks' => $this->input->post('sks')
        ];
        $this->load->view('view-data-matakuliah', $data);
    }
}