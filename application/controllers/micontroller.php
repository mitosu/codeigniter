<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class MiController extends CI_Controller{
    function index(){
        $datos = array(
            'titulo' => 'Página de prueba',
            'descripcion' => 'Esta es la descripción de esta página, un poco más larga.',
            'cuerpo' => 'El Cuerpo de la página probablemente será un texto muy largo con varios parrafos. <p>Lorem ipsum. Lorem ipsumLorem ipsum'
            . 'Lorem ipsumLorem ipsumLorem ipsumLorem ipsumLorem ipsumLorem ipsumLorem ipsumLorem ipsumLorem ipsumLorem ipsum.'
            . 'Lorem ipsumLorem ipsumLorem ipsumLorem ipsumLorem ipsumLorem ipsum.</p>'
        );
        
        $this->load->view('mivista', $datos);
    }
}
