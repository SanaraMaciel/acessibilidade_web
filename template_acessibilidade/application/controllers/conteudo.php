<?php

class Conteudo extends CI_Controller {

    function __construct() {
        parent::__construct();
       $this->load->helper('url');        
        $this->load->library('template');
        $this->load->library('breadcrumb');
    }

    function index() {
        

            $this->breadcrumb->add('Página principal', base_url());
            $this->breadcrumb->add('Nome da Página', 'URL_da_pagina', 1);
            $breadcrumb = $this->breadcrumb->output();

           
            $this->template->load('template/padrao/conteudo', 'conteudo_view', array( 'breadcrumb' => $breadcrumb));
        
    }

   

}
