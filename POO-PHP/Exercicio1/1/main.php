<?php
    require_once "Pessoa.php";

    $pessoa=new Pessoa("Pedro", 20, 30,4,2002);
    $pessoa->calcula_idade(18,2,2025);
    echo $pessoa->informa_idade(),"\n";
    echo $pessoa->informa_nome(),"\n";
    $pessoa->ajusta_data_de_nascimento(18,2,2025);

    $pessoa2=new Pessoa("Carlos", 50, 20,12,1965);
    $pessoa2->calcula_idade(18,2,2025);
    echo $pessoa2->informa_idade(),"\n";
    echo $pessoa2->informa_nome(),"\n";
    $pessoa2->ajusta_data_de_nascimento(18,2,2025);
?>