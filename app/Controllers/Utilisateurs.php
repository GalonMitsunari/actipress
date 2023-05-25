<?php namespace App\Controllers;
 
use CodeIgniter\Controller;
use App\Models\utModel;
 
class Utilisateurs extends Controller
{
    public function view($page, $data)  {
	$data['title'] = "Utilisateurs : ". ucfirst($page); // ucfirst() : Met en Capitale la 1ere lettre
	echo view('templates/header', $data);
	echo view('pages/utilisateurs/'.$page, $data);
	echo view('templates/footer', $data);
    }
    public function lister()  {
	$model = new utModel();
	$data['lesUtilisateurs'] = $model->orderBy('id_utilisateur')->findAll();
	Utilisateurs::view("lister", $data);
    }
    public function index()  {
	Utilisateurs::lister();
    }

	
	public function modifier($ref){
		$model = new utModel();
		$data['unUser'] = $model->where('id_utilisateur', $ref)->first();
		Utilisateurs::view("modifier", $data);
	}

	public function visualiser($ref){
		$model = new utModel();
	$data['unUser'] = $model->find($ref);
	Utilisateurs::view("visualiser", $data);
	}

	public function update(){
		helper(['form', 'url']);
		$model = new utModel();
		$ref = $this->request->getVar('id_utilisateur');
		$data = [
			'Nom'=> $this->request->getVar('Nom'),
			'Prenom'=> $this->request->getVar('Prenom'),
			'Numero_tel_pro'=> $this->request->getVar('Numero_tel_pro'),
		];
		$save = $model->update($ref, $data);
		return redirect()->to(base_url('utilisateurs/lister'));
	}

	public function add(){
		$model = new utModel();
		$data = [
			'id_utilisateur'=> $this->request->getVar('id_utilisateur'),
			'Nom'=> $this->request->getVar('Nom'),
			'Prenom'=> $this->request->getVar('Prenom'),
			'Numero_tel_pro'=> $this->request->getVar('Numero_tel_pro'),
		];
		$save = $model->insert($data);
		return redirect()->to(base_url('utilisateurs/lister'));
	}

	public function ajouter(){
		$model= new utModel();
		$data['lesUtilisateurs'] = $model->orderBy('id_utilisateur')->findAll();
		Utilisateurs::view("ajouter", $data);
	}

	public function supprimer($ref){
		$model = new utModel();
		
		$model->where('id_utilisateur', $ref)->delete();
		return redirect()->to(base_url('utilisateurs/lister'));
	}
}
    