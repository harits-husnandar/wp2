<?php
class Data_tempat extends CI_Controller
{
    public function index()
    {
        $data['wisata'] = $this->Model_wisata->tampil_data()->result();
        $this->load->view('template_admin/header');
        $this->load->view('template_admin/sidebar');
        $this->load->view('admin/data_tempat', $data);
        $this->load->view('template_admin/footer');
    }

    public function tambah_aksi()
    {
        $nama_wst   = $this->input->post('nama_wst');
        $keterangan   = $this->input->post('keterangan');
        $kategori   = $this->input->post('kategori');
        $harga   = $this->input->post('harga');
        $gambar   = $_FILES['gambar']['name'];
        if ($gambar = '') {
        } else {
            $config['upload_path'] = './gambar';
            $config['allowed_types'] = 'jpg|jpeg|png|gif';

            $this->load->library('upload', $config);
            if (!$this->upload->do_upload('gambar')) {
                echo "gambar gagal di upload";
            } else {
                $gambar = $this->upload->data('file_name');
            }
        }

        $data = array(
            'nama_wst' => $nama_wst,
            'keterangan' => $keterangan,
            'kategori' => $kategori,
            'harga' => $harga,
            'gambar'  => $gambar
        );

        $this->Model_wisata->tambah_wisata($data, 'tb_tempat');
        redirect('admin/data_tempat/index');
    }

    public function edit($id)
    {
        $where = array('id_wst' => $id);
        $data['wisata'] = $this->Model_wisata->edit_tempat($where, '
        tb_tempat')->result();
        $this->load->view('template_admin/header');
        $this->load->view('template_admin/sidebar');
        $this->load->view('admin/edit_tempat', $data);
        $this->load->view('template_admin/footer');
    }

    public function update()
    {
        $id               = $this->input->post('id_wst');
        $nama_wst         = $this->input->post('nama_wst');
        $keterangan       = $this->input->post('keterangan');
        $kategori         = $this->input->post('kategori');
        $harga            = $this->input->post('harga');

        $data = array(
            'nama_wst'    => $nama_wst,
            'keterangan'  => $keterangan,
            'kategori'    => $kategori,
            'harga'       => $harga
        );

        $where = array(
            'id_wst' => $id
        );

        $this->Model_wisata->update_data($where, $data, 'tb_tempat');
        redirect('admin/Data_tempat/index');
    }

    public function hapus($id)
    {
        $where = array('id_wst' => $id);
        $this->Model_wisata->hapus_data($where, 'tb_tempat');
        redirect('admin/Data_tempat/index');
    }
}
