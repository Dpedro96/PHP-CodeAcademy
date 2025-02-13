<?php
    $logado;
    //Login
    function sing_in($user,$password){
        $users = get_usuarios();
        global $logado;
        if($user&&$password){
            foreach($users as $us){
                if($user==$us['user']&&$password==$us['password']){
                    $us['login']=true;
                    update_usuarios($us);
                    echo "Logado com sucesso!!\n";
                    $logado = $us['id'];
                    return true;
                }
            }
            echo "Usuario não encontrado ou Senha incorreta\n";
        }else{
            echo "Usuário e Senha devem ser preenchido\n";
        }
    }
    //Cadastro
    function sing_up($user,$password,$confirm_password){
        $users = get_usuarios();
        if($user&&$password&&$confirm_password&&$users){
            foreach($users as $us){
                if($user==$us['user']){
                    echo "Usuario já existe\n";
                    return false;
                }
            }
            if($password!==$confirm_password){
                echo "Senhas devem ser iguais\n";
                return false;
            }else{
                $new_user =[
                    "id"=>count($users)+1,
                    "user"=>$user,
                    "password"=>$password,
                    "login"=>false
                ];
                $users[]=$new_user;
                $users=json_encode($users);
                file_put_contents("usuarios.json",$users,LOCK_EX);
                echo "Usuário cadastrado com sucesso\n";
                return true;
            }
        }
    }
    //Deslogar
    function logout(){
        global $logado;
        $user=get_usuario($logado);
        $user['login']=false;
        update_usuarios($user);
        echo "Deslogado com sucesso!!\n";
        $logado = null;
        return true;
    }
?>