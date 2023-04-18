<?php
class Siswa extends CI_Controller
{

    public function index()

    {

        $this->load->view('view-form-siswa');
    }

    public function cetak()
    {
        $data = [
            'nama' => $this->input->post('nama'),
            'nis' => $this->input->post('nis'),
            'kelas' => $this->input->post('kelas'),
            'tanggal lahir' => $this->input->post('tanggallahir'),
            'tempat lahir' => $this->input->post('tempatlahir'),
            'alamat' => $this->input->post('alamat'),
            'jenis kelamin' => $this->input->post('jeniskelamin'),
            'agama' => $this->input->post('agama')
        ];

        $this->load->view('view-data-siswa', $data);
    }
}
