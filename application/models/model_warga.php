<?php

class Model_warga extends CI_Model
{
    public function get_data()
    {
        // return $this->db->query("SELECT * FROM warga")->result();
        return $this->db->get('warga')->result();
    }

    public function tambah()
    {
        // $nama => $this->input->post('nama');
        // $alamat => $this->input->post('alamat');

        // return $this->db->query("INSERT INTO warga (nama, alamat) VALUES ('$nama','$alamat')");

        $data = [
            'nama' => $this->input->post('nama'),
            'alamat' => $this->input->post('alamat')
        ];

        return $this->db->insert('warga', $data);
    }



    public function edit()
    {
        $id = $_GET["id"];

        // return $this->db->query("SELECT * FROM warga WHERE id='$id'")->result();
        return $this->db->get_where('warga', ['id' => $id])->result();
    }

    public function update()
    {
        // $id = $this->input->post('id');
        // $nama = $this->input->post('nama');
        // $alamat = $this->input->post('alamat');

        // return $this->db->query("UPDATE warga SET nama='$nama', alamat='$alamat' WHERE id='$id'");

        $data = [
            'id' => $this->input->post('id'),
            'nama' => $this->input->post('nama'),
            'alamat' => $this->input->post('alamat')
        ];

        return $this->db->replace('warga', $data);

        // Error
        // return $this->db->update('warga', $data); 
    }

    public function hapus()
    {
        $id = $_GET['id'];

        // $this->db->where('id', $id);
        // $this->db->delete('warga');

        // $this->db->query("DELETE FROM warga WHERE id='$id'");
        $this->db->delete('warga', ['id' => $id]);
    }
}
