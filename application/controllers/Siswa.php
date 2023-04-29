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
            'tanggal_lahir' => $this->input->post('tanggal lahir'),
            'tempat_lahir' => $this->input->post('tempat lahir'),
            'alamat' => $this->input->post('alamat'),
            'jenis_kelamin' => $this->input->post('jenis kelamin'),
            'agama' => $this->input->post('agama')
        ];

        $this->load->view('view-data-siswa', $data);
    }
}
