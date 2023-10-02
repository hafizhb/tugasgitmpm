<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Buku extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model("buku_model");
        $this->load->library('form_validation');
    }

    public function index()
    {
        $this->load->view("home");
    }

    public function list() 
    {
        $data["buku"] = $this->buku_model->getAll();
        $this->load->view("daftar", $data); //menampilkan
    }

    public function cari() 
    {

        $data['keyword'] = $this->input->get('keyword');
		$this->load->model('buku_model');

		$data['search_result'] = $this->buku_model->caridata($data['keyword']);
		
		$this->load->view('cari_form.php', $data);
    }

    public function add() //nambah data
    {
        $buku = $this->buku_model;
        $validation = $this->form_validation;
        $validation->set_rules($buku->rules());

        if ($validation->run()) {
            $buku->save();
            $this->session->set_flashdata('success', 'Data berhasil disimpan!');
        } 

        $this->load->view("new_form");
        
    }

    public function edit($id = null)
    {
        if (!isset($id)) show_404();
       
        $buku = $this->buku_model;
        $validation = $this->form_validation;
        $validation->set_rules($buku->rules());

        if ($validation->run()) {
            $buku->update();
            $this->session->set_flashdata('success', 'Data berhasil diubah!');
        } 

        $data["buku"] = $buku->getById($id);
        if (!$data["buku"]) show_404();

        $this->load->view("edit_form", $data);
    }

    public function delete($id=null)
    {
        if (!isset($id)) show_404();
        
        if ($this->buku_model->delete($id)) {
            redirect(site_url("/buku/list"));
        }
    }
}