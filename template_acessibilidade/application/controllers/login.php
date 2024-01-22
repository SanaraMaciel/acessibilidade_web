<?php

class Login extends CI_Controller {

    function __construct() {
        parent::__construct();


        $this->load->helper('form');
        $this->load->helper('url');
        $this->load->library('template');
    }

    function duas_colunas() {


        $this->template->load('template/padrao/login.php', 'login/login_view_duas_colunas');
    }

    function uma_coluna() {


        $this->template->load('template/padrao/login.php', 'login/login_view_uma_coluna');
    }

}

?>