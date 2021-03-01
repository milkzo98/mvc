<?php
namespace src\model;
use libs\system\Model;
class RolesDb extends Model
{
    public function findAll(/*$roles*/)
    {
        return $this->entityManager
                    ->createQuery("SELECT r FROM Roles r")
                    ->getResult();
        
        //array("ROLE_COMPTA", "ROLE_FINANCE");
    }
}
?>