<?php
include '../Controller/Clientes_Controller.php';
include '../Model/Clientes.php';
include '../Helpers/Gets.php';
include '../Dao/User_Dao.php';

       $teste = new \Clientes_Controller\Clientes_Controller();
       $testeb = new \Model_cliente\Clientes();
       $testec = new \Helpers\Gets();
       $tested = new Dao\User_DAO();
/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
?>
<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
        <?php $testec->Get_Css('../Assets/CSS/')?>
         <?php $testec->Get_JS('../Assets/JS/')?>
        <?php $testec->Get_Jquery('../Assets/JQuery/')?>
        <?php ;?>
    </head>
    <body>
        <?php
       
       $teste->loginAction($testeb);
       $tested->load();
       
        ?>
        <!--C:\xampp\htdocs\PhpProject1\Assets\CSS-->
        <script>
        //var x = document.getElementsByTagName("p")[0].getAttribute("tipo");
        //alert(x);
        </script>
    </body>
</html>
