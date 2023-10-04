<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Buku_model extends CI_Model
{
    private $_table = "buku";

    public $id;
    public $kodebuku;
    public $judulbuku;
    public $pengarang;
    public $penerbit;

    public function rules()
    {
        return [
            ['field' => 'kode',
            'label' => 'Kode',
            'rules' => 'required'],

            ['field' => 'judul',
            'label' => 'Judul',
            'rules' => 'required'],

            ['field' => 'pengarang',
            'label' => 'Pengarang',
            'rules' => 'required'],

            ['field' => 'penerbit',
            'label' => 'Penerbit',
            'rules' => 'required'],
        ];
        
    }

    public function getAll()
    {
        return $this->db->get($this->_table)->result();
    }
    
    public function getById($id)
    {
        return $this->db->get_where($this->_table, ["id" => $id])->row();
    }

    public function save()
    {
        $post = $this->input->post();
        $this->kodebuku = $post["kode"];
        $this->judulbuku = $post["judul"];
        $this->pengarang = $post["pengarang"];
        $this->penerbit = $post["penerbit"];
        return $this->db->insert($this->_table, $this);
    }

    public function update()
    {
        $post = $this->input->post();
        $this->id = $post["id"];
        $this->kodebuku = $post["kode"];
        $this->judulbuku = $post["judul"];
        $this->pengarang = $post["pengarang"];
        $this->penerbit = $post["penerbit"];
        return $this->db->update($this->_table, $this, array('id' => $post['id']));
    }

    public function caridata($keyword)
    {
	    if(!$keyword){
		return null;
	    }
	    $this->db->like('judulbuku', $keyword);
	    $this->db->or_like('pengarang', $keyword);
        $this->db->or_like('penerbit', $keyword);
	    $query = $this->db->get($this->_table);
	    return $query->result();
    }

    public function delete($id)
    {
        return $this->db->delete($this->_table, array("id" => $id));
    }
}