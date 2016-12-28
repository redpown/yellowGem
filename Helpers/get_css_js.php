<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of get_css_js
 *
 * @author Redpo
 */
class get_css_js {
     function listar_diretorio($Img_I){
             
             if(is_dir($Img_I)){
                $diretorio1 = dir($Img_I);
                 while(($arquivo1 = $diretorio1->read()) !== false)
                { if($arquivo1!='.' && $arquivo1!='..'){
                echo    "<div class ='col-lg-3 col-sm-4 col-xs-6'>
                        <a href ='$Img_I$arquivo1' class='thumbnail' data-gallery>
                        </a>
                        </div>";
                }
            }
          $diretorio1->close();
          
        }else{
            echo 'A pasta não existe.';
        }
    }
                 
}
