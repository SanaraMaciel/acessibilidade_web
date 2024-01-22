<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

$system_name="Nome da Aplicação";
$url_pagina_inicial= base_url();
$ano_desenvolvimento="ano de desenvolvimento";
$url_logout= base_url()."#";
$ambiente = "PROD";//DEV : desenvolvimento, PROD : Produção

if($ambiente=="DEV"){
    $sobre="sobre_dev";
    
    $system_name=$system_name." - TESTES ";
}
elseif ($ambiente=="PROD") {
    $sobre="sobre";

}
