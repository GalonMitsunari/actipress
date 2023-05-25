<?php
    namespace App\Controllers;

    class Message extends BaseController{


        public function index(){
            echo view('template/header');
            echo view('sendMessage');
            echo view('template/footer');
        }

        public function setReciever($rec){
            session_start();
            if(isset($_SESSION['reciever'])){unset($_SESSION['reciever']);}
            $_SESSION['reciever'] = $rec;

            if(isset($_SESSION['id']) == false){
                return redirect()->to(base_url("/"));
            }
            $_SESSION['message'] = $this->setMessage();
            return redirect()->to(base_url("message"));
        }

        public function setMessage(){
            $db = \Config\Database::connect();
            $builder = $db->table("message");

            $this->setIdReciever($_SESSION['reciever']);
            $where = "(message.idDestinataire = ".$_SESSION['idRecieve']." AND message.idEmetteur = ".$_SESSION['id'].") OR 
            (message.idDestinataire = ".$_SESSION['id']." AND message.idEmetteur = ".$_SESSION['idRecieve'].")";

            $builder->select("sujet,contenue,message.idEmetteur as emetteur,message.dateEnvoie as date");
            $builder->join("utilisateurs", "message.idDestinataire = utilisateurs.id_utilisateur");
            $builder->where($where);

            $tab = [];
            $res = $builder->get();
            foreach($res->getResult() as $rep){
                $tab[$rep->date] = [$rep->emetteur => ["sujet" => $rep->sujet, "content" => $rep->contenue]];
            }
            return $tab;
        }

        public function setIdReciever($recieve){
            $db = \Config\Database::connect();
            $builder = $db->table("utilisateurs");

            $builder->select("id_utilisateur");
            $builder->where("pseudo", $recieve);
            $res = $builder->get();
            foreach($res->getResult() as $rep){
                $_SESSION['idRecieve'] = $rep->id_utilisateur;
            }
        }

        public function send(){
            session_start();
            $db = \Config\Database::connect();
            $builder = $db->table("message");
            
            $data = array(
                "idEmetteur" => $_SESSION['id'],
                "idDestinataire" => $_SESSION['idRecieve'],
                "localisation" => "0.000;0.000",
                "sujet" => $this->request->getVar("sujet"),
                "contenue" => $this->request->getVar("content")
            );
            $builder->insert($data);
            return redirect()->to(base_url("sendTo/".$_SESSION['reciever']));
        }
    }

?>