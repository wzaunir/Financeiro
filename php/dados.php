<?php

if($_SERVER['REQUEST_METHOD'] == 'GET'){
    
    echo file_get_contents('../js/dados.json');
    
}elseif($_SERVER['REQUEST_METHOD'] == 'POST'){
    // COMANDOS INSERT
    echo '{"status":"inserido"}';
}elseif($_SERVER['REQUEST_METHOD'] == 'PUT'){
    //COMANDOS UPDATE
   echo '{"status":"update"}';
    
}
