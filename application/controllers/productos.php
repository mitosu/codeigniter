<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Productos extends CI_Controller{
    function index(){
        echo "esto es una portada de productos.";
    }
    
    function ordenadores($modelopc = null, $marca = null){
        if(is_null($modelopc) && is_null($marca)){
            echo "aqui se muestran ordenadores.";            
        }else if (is_null($marca)) {
            echo "aqui se muestran los ordenadores sin modelo, solo marca: ".$marca;
        }else{
            echo "Esta mirando el pc modelo: ".$modelopc." marca: ".$marca;
        }
        
    }
    
    function monitores(){
        echo "aqui se muestran monitores";
    }
    
    function perifericos($modelo_periferico){
        echo "Estas viendo el periferico ".$modelo_periferico;
    }
}