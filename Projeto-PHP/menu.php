<?php
include "fluxo_caixa.php";
do {
    if (!isset($_SESSION['id'])) {
        echo "\n=== MENU ===\n";
        echo "1 - Login\n";
        echo "2 - Cadastro\n";
        echo "0 - Sair\n";
        echo "Escolha uma opção: ";
        $opcao = readline();
        switch ($opcao) {
            case 1:
                $user = readline("Usuário: ");
                $password = readline("Senha: ");
                sing_in($user, $password);
                break;
            case 2:
                $user = readline("Usuário: ");
                $password = readline("Senha: ");
                $confirm_password = readline("Confirme a senha: ");
                sing_up($user, $password, $confirm_password);
                break;
        }
    } else {
        echo "\n=== MENU PRINCIPAL ===\n";
        echo "1 - Cadastrar Produto\n";
        echo "2 - Atualizar Produto\n";
        echo "3 - Vender Produto\n";
        echo "4 - Logout\n";
        echo "Escolha uma opção: ";
        $opcao = readline();
        switch ($opcao) {
            case 1:
                $item = [
                    'name' => readline("Nome do Produto: "),
                    'price' => readline("Preço: "),
                    'stock' => readline("Estoque: ")
                ];
                add_product($item);
                break;
            case 2:
                $id_procut = readline("Digite o ID do produto a ser atualizado: ");
                $name = readline("Novo nome (ou deixe em branco para manter): ");
                $price = readline("Novo preço (ou deixe em branco para manter): ");
                $stock = readline("Novo estoque (ou deixe em branco para manter): ");
                $item = [
                    'id_procut' => $id_procut,
                    'name' => $name ?: null,
                    'price' => $price ?: null,
                    'stock' => $stock ?: null
                ];
                update_product($item);
                break;
                break;
            case 3:
                sale_product();
                break;
            case 4:
                logout();
                break;
        }
    }
} while ($opcao != 0);
?>