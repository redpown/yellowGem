<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Clientes_Controller
 *
 * @author Redpo
 */


namespace Clientes_Controller;
   
    class Clientes_Controller {
        //put your code here
        public function loginAction ($cliente_Model){
            $cliente_Model->nome = "\n Andre";
            $cliente_Model->cpf = "\n 394394394394";
            echo '<h1 mydate ="13/10/1989">'.$cliente_Model->nome.'</h1>'  ;
            echo '<p tipo="cpf">'.$cliente_Model->cpf.'</p>';
        }
    }
