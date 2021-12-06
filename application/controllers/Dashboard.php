<?php

class Dashboard extends CI_Controller
{

    public function index()
    {
        $this->load->model('ModelData');

        $data = [
            'tampil' => $this->ModelData->munculData()
        ];

        $this->load->view('dashboard', $data);
    }

    public function ubah($id)
    {
        $this->load->model('ModelData');
        $where = array('id' => $id);

        $data = [
            'tampil' => $this->ModelData->detail($where)
        ];

        $this->load->view('detail', $data);
    }

    public function simpan()
    {
        $this->load->model('ModelData');

        $data = [
            'nama_belajar' => $this->input->post('nama_belajar'),
            'alamat_belajar' => $this->input->post('alamat_belajar')
        ];

        $this->ModelData->masukData($data);
        redirect('Dashboard/index');
    }

    public function hapus($id)
    {
        $this->load->model('ModelData');
        $where = array('id' => $id);

        $this->ModelData->delete($where);
        redirect('Dashboard/index');
    }

    public function edit($id)
    {
        $this->load->model('ModelData');

        $where = array('id' => $id);

        $data = [
            'nama_belajar' => $this->input->post('nama_belajar'),
            'alamat_belajar' => $this->input->post('alamat_belajar'),
        ];

        $this->ModelData->ubah($where, $data);

        redirect('Dashboard/index');
    }
}
