<?php namespace App\Controllers;
class MenuPrincipalController extends BaseController {
	public function afficherPage()  {
                // Afficher une page nommée ma_page.php à la racine du répertoire Views 
		echo view('ma_page'); 
	}
	public function menu(){
		//afficher le menu général
		$data['title'] = " MENU GENERAL";
		echo view('/Templates/Header', $data);
		echo view('Pages/menuPrincipal', $data);
		echo view('Templates/Footer', $data);
	}
}
