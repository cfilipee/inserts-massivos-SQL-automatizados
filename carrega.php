<?php

//Caso o arquivo seja muito grande, pode acabar gerando timeout no momento do insert
//Sendo assim, o script abaixo permite que o arqvuivo continue executando
//independente do tempo que o processamento levar, deixando o timeout inabilitado.
ini_set('max_execution_time', 0);

require 'conexao.php';
//Variável responsável pelo caminho do arquivo
$filename = 'C:/xampp/htdocs/projetocarrega/usuarios.csv'; 

if(file_exists($filename)){

    if(mysqli_query($conn, "LOAD DATA INFILE '$filename' INTO TABLE usuarios 
    FIELDS TERMINATED BY ';'
    LINES TERMINATED BY '\n'
    IGNORE 1 ROWS")){
        echo "Carregado com sucesso!";
    }else{
        echo "Não consegui carregar o arquivo!";
    }

}else{
    echo "Arquivo inexistente!";
}

?>