<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Provincia_model extends CI_Model
{
	public function construct()
	{
		parent::__construct();
	}
	
    //obtenemos el total de filas para hacer la paginación
	function filas()
	{
		$consulta = $this->db->get('provincias_es');
		return  $consulta->num_rows() ;
	}
        
    //obtenemos todas las provincias a paginar con la función
    //total_posts_paginados pasando la cantidad por página y el segmento
    //como parámetros de la misma
	function total_paginados($por_pagina,$segmento) 
        {
            $consulta = $this->db->get('provincias_es',$por_pagina,$segmento);
            if($consulta->num_rows()>0)
            {
                foreach($consulta->result() as $fila)
		{
		    $data[] = $fila;
		}
                    return $data;
            }
	}
	
}
/*provincia_model
 * el modelo
 */