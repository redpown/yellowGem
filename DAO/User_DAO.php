<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace Dao;
include '../Dao/Dao.php';
/**
 * Description of User_DAO
 *
 * @author Redpo
 */
class User_DAO extends \Dao\Dao {
    //put your code here
    public function load(){
      $stmt = $this->conexao()->prepare("SELECT * FROM uhair.clientes;");
       $stmt->execute();
       $rank = $stmt->fetchAll();
       //var_dump($rank);
       
       For($i=0;$i<count($rank);$i++){
           
           echo '<p>'.$rank[$i][2].'</p>';
       }
    }
}
