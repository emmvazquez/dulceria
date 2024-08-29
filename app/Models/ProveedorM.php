<?php

namespace App\Models;

use CodeIgniter\Model;

class ProveedorM extends Model
{
    protected $DBGroup          = 'default';
    protected $table            = 'Proveedor';
    protected $primaryKey       = 'idProveedor';
    protected $useAutoIncrement = true;
    protected $returnType       = 'object';
    protected $useSoftDeletes   = true;
    protected $protectFields    = true;
    protected $allowedFields    = ['nombre','telefono','calle','numero','cp','idEstado'];

    // Dates
    protected $useTimestamps = true;
    protected $dateFormat    = 'datetime';
    protected $createdField  = 'created_at';
    protected $updatedField  = 'updated_at';
    protected $deletedField  = 'deleted_at';

    // Validation
    protected $validationRules      = [];
    protected $validationMessages   = [];
    protected $skipValidation       = false;
    protected $cleanValidationRules = true;

    // Callbacks
    protected $allowCallbacks = true;
    protected $beforeInsert   = [];
    protected $afterInsert    = [];
    protected $beforeUpdate   = [];
    protected $afterUpdate    = [];
    protected $beforeFind     = [];
    protected $afterFind      = [];
    protected $beforeDelete   = [];
    protected $afterDelete    = [];


    public function getProveedores(){
        $db = db_connect();

        $sql= "select proveedor.*, Estado.estado
                from proveedor,Estado 
                where proveedor.idEstado = estado.idEstado 
        ";
        $query= $db->query($sql);

        print $db->lastQuery;
        return $query->getResult();

    }
}
