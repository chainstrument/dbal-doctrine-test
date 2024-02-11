<?php 

namespace App;

class Cart {

    protected $db;

    public function __construct($db) {

        $this->db = $db;
        
    }

    public function getByID($id) {
        $stmt = $this->db->prepare("SELECT * FROM cart WHERE id_cart = ?");
        $stmt->bindvalue(1, $id);
        $resultSet =  $stmt->executeQuery();
        return $resultSet->fetchAllAssociative();

    }


}