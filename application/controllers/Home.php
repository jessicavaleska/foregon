<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

    /**
     * Index Page for this controller.
     *
     * Maps to the following URL
     * 		http://example.com/index.php/welcome
     *	- or -
     * 		http://example.com/index.php/welcome/index
     *	- or -
     * Since this controller is set as the default controller in
     * config/routes.php, it's displayed at http://example.com/
     *
     * So any other public methods not prefixed with an underscore will
     * map to /index.php/welcome/<method_name>
     * @see https://codeigniter.com/user_guide/general/urls.html
     */

    function __construct() {
        parent::__construct();

        $this->load->helper('security');
    }

    public function index() {
        $this->load->library('user_agent');

        $topo['meta_title'] = "Foregon";
        $topo['meta_url'] = current_url();
        $topo['meta_image'] = base_url("assets/imagem/share/share.png");
        $topo['meta_description'] = "Teste de Front-End - Foregon";

        $this->load->view('topo', $topo);
        $this->load->view('svg');
        $this->load->view('home');
        $this->load->view('rodape');
    }
}
