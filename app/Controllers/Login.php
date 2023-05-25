<?php

namespace App\Controllers;

class Login extends BaseController
{

    public function logIn()
    {
        session_start();

        $db = \Config\Database::connect();
        $builder = $db->table("utilisateurs");

        $builder->selectCount('id_utilisateur');
        $builder->where("pseudo", $this->request->getVar("username"));
        $builder->where("Mdp_clair", $this->request->getVar("pass"));
        $res = $builder->get();
        foreach($res->getResult() as $r){
            if($r->id_utilisateur == 1){
                // set session id
                $builder = $db->table("utilisateurs");
                $this->setSessionDroit($this->request->getVar("username"));
                $this->canSendTo($this->request->getVar("username"));
                $this->setSessionId($this->request->getVar("username"));
                $_SESSION['pseudo'] = $this->request->getVar("username");
                return redirect()->to(base_url("index"));
            }else{
                return redirect()->to(base_url("/"));
            }
        }
    }


    public function setSessionDroit($pseudo){
        $db = \Config\Database::connect();
        $builder = $db->table("utilisateurs");

        $builder->select('Droits');
        $builder->where("pseudo", $pseudo);
        $res = $builder->get();
        foreach($res->getResult() as $rep){
            $_SESSION['droits'] = $rep->Droits;
        }
    }

    public function canSendTo($pseudo){
        $db = \Config\Database::connect();
        $builder = $db->table("utilisateurs");

        $builder->select('Pseudo');
        $builder->where('pseudo != ', $pseudo);
        $res = $builder->get();
        $listCanSend = [];
        foreach($res->getResult() as $rep){
            array_push($listCanSend,$rep->Pseudo);
        }
        $_SESSION['canSendTo'] = $listCanSend;
    }

    public function setSessionId($pseudo){
        $db = \Config\Database::connect();
        $builder = $db->table("utilisateurs");

        $builder->select('id_utilisateur');
        $builder->where('Pseudo', $pseudo);
        $res = $builder->get();
        foreach($res->getResult() as $rep){
            $_SESSION['id'] = $rep->id_utilisateur;
            return redirect()->to(base_url("message"));
        }
    }
}