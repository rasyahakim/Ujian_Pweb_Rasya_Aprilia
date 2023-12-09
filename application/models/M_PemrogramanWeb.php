<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_PemrogramanWeb extends CI_Model {
    function read(){
        $this->db->order_by('id_number','asc');
        return $this->db->get('kehadiran')->result_array();
    }
    
    function create(){
        $data = [
            'id_number' => $this->input->post('id_number'),
            'npm' => $this->input->post('npm'),
            'nama' => $this->input->post('nama'),
            'jam_datang' => $this->input->post('jam_datang'),
        ];

        $this->db->insert('kehadiran', $data);
        if ($this->db->affected_rows() > 0) {
            $this->session->set_flashdata('pesan', 'Ditambah');
            redirect('PemrogramanWeb','refresh');
        }
    }

    function get_row($id){
        return $this->db->get_where('kehadiran',['id_number' => $id])->row_array();
    }

    function update(){
        $data = [
            'id_number' => $this->input->post('id_number'),
            'npm' => $this->input->post('npm'),
            'nama' => $this->input->post('nama'),
            'jam_datang' => $this->input->post('jam_datang'),
        ];

        $this->db->where('id_number', $this->input->post('id_number'));
        $this->db->update('kehadiran', $data);
        if ($this->db->affected_rows() > 0) {
            $this->session->set_flashdata('pesan', 'Diubah');
            redirect('PemrogramanWeb','refresh');
        }
    }

    function hapus($id){
        $this->db->where('id_number', $id);
        $this->db->delete('kehadiran');
        if ($this->db->affected_rows() > 0) {
            $this->session->set_flashdata('pesan', 'Dihapus');
            redirect('PemrogramanWeb','refresh');
        }
    }
}