<?php namespace App\Controllers;
	use App\Models\Usuarios;
	use App\Models\Usuarios_model;
	use App\Models\ProductoModel;
	use App\Models\ConsultaModel;
	use App\Models\CitasModel;
	use App\Models\JornadasModel;
class Home extends BaseController
{
	
	         
	
	
	
		
		
  
  
    public function index()
	{

		$mensaje = session('mensaje');
		return view('login', ["mensaje" => $mensaje]);

		
	}
	
    
	

	public function inicio() {
		
		echo view ('layaouts/Header');
		echo view('jornadas/list');
		echo view('layaouts/footer');
		
	
	}
	public function sobrenosotros() {
		echo view ('layaouts/header');
		echo view ('sobrenosotros');
		echo view ('layaouts/footer');
		
	}
	public function crearcita() {
		echo view ('layaouts/header');
		echo view ('crearcita');
		echo view ('layaouts/footer');
		
	}
	

	
	public function consultas()
	{

		echo view ('layaouts2/header');
		echo view ('consultas/list');
		echo view ('layaouts2/footer');

		
	}
	public function Citaslist()
	{

		echo view ('layaouts2/header');
		echo view ('citas/list');
		echo view ('layaouts2/footer');

		
	}
	


	public function login() {

		$usuario = $this->request->getPost('usuario');
		$password = $this->request->getPost('password');
		$Usuario = new Usuarios();

		$datosUsuario = $Usuario->obtenerUsuario(['username' => $usuario, 'password_id'=> md5($password)]);

		if (count($datosUsuario) > 0 )
			 {
				
			$data = [	

						"usuario" => $datosUsuario[0]['username'],
						"Rol" => $datosUsuario[0]['Rol']
					];

			$session = session();
			$session->set($data);
			$var=1;

			return redirect()->to(base_url('/dashboard/dash'))->with('mensaje','1');

		} else {
			return redirect()->to(base_url('/index'))->with('mensaje','0');
		}


	}

	public function salir() {
		$session = session();
		$session->destroy();
		return redirect()->to(base_url('/'));
	}
	
	
	//--------------------------------------------------------------------

}
