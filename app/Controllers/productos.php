<?php namespace App\Controllers;
	use App\Models\ProductoModel;
class productos extends BaseController
{
	public function productoslist()
	{

		echo view ('layaouts2/header');
		echo view ('productos/list');
		echo view ('layaouts2/footer');

		$Nombre = $this->request->getPost('Nombre');
		$cantidad = $this->request->getPost('Cantidad');
        $producto = new ProductoModel();
	}
	public function add(){
		
		echo view ('layaouts2/header');
		echo view ('productos/add');
		echo view ('layaouts2/footer');
	}

}
?>