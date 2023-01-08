<?php namespace App\Controllers;
defined('BASEPATH') ;
use App\Models\JornadasModel;
class dashboard extends BaseController
{
    public function __construct(){
        $this->jornadas = new JornadasModel();
    }
	public function dash() {
		
		$datos['jornadas'] = $this->jornadas->seleccionar_todo();
       		
       
		echo view ('layaouts2/header');
		echo view ('jornadas/list',$datos);
		echo view ('layaouts2/footer');
	}
	
}