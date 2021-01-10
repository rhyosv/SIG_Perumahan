<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Home extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->model('m_kampus');
    }

    public function index()
    {
        $data = array(
                    'title' => 'Web pemetaan perumahan di Surabaya',
                    'isi' => 'v_home'
            );
        $this->load->view('template/v_wrapper', $data, FALSE);
    
    }

    public function kampus()
    {
        $data = array(
            'title' => 'SIG Perumahan versi Point',
            'kampus' => $this->m_kampus->get_all_data(),
            'isi' => 'kampus/v_pemetaan_kampus'
    );
$this->load->view('template/v_wrapper', $data, FALSE);
    }

    public function rute()
    {
        $data = array(
                    'title' => 'SIG Perumahan versi Line',
                    'isi' => 'v_rute'
            );
        $this->load->view('template/v_wrapper', $data, FALSE);
    
    }

    public function polygon()
    {
        $data = array(
                    'title' => 'SIG Perumahan versi Polygon',
                    'isi' => 'v_polygon'
            );
        $this->load->view('template/v_wrapper', $data, FALSE);
    
    }

    public function about()
    {
        $data = array(
                    'title' => 'About',
                    'isi' => 'v_about'
            );
        $this->load->view('template/v_wrapper', $data, FALSE);
    
    }

}