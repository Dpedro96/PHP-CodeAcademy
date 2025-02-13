<?php
do{
    $opcao=readline();
    switch($opcao){
        case 1:
            $user=readline();
            $password=readline();
            sing_in($user,$password);
            break;
        case 2:$user=readline();
            $password=readline();
            $confirm_password=readline();
            sing_up($user,$password,$confirm_password);
            break;
        case 3:
            logout();
            break;
    }
}while($opcao!=0);
?>