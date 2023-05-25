<?php namespace App\Models;
use CodeIgniter\Database\ConnectionInterface;
use CodeIgniter\Model;

class utModel extends Model
{
    protected $table      = 'utilisateurs';
    protected $primaryKey = 'id_utilisateur';

    protected $returnType     = 'array'; // 'object'
    protected $useSoftDeletes = false; // true => delete_at ...

    protected $allowedFields = ['id_utilisateur', 'Nom','Prenom', 'Numero_tel_pro','Adresse_mail_pro', 'Droits_utilisateur', 'Pseudo', 'password','pass_hash'];

}