<?php
        function get_usuarios(){
            $json = file_get_contents("usuarios.json");
            return $json = json_decode($json, true);
        }
        function post_usuarios($new_user){
            $users=get_usuarios();
            $users[]=$new_user;
            $users=json_encode($users);
            file_put_contents("usuarios.json",$users,LOCK_EX);
        }
        function get_usuario($id){
            $users = get_usuarios();
            for($i=0;$i<count($users);$i++){
                if($id==$users[$i]['id']){
                    return $users[$i];
                }
            }
        }
        function update_usuarios($user){
            $users = get_usuarios();
            for($i=0;$i<count($users);$i++){
                if($user['id']==$users[$i]['id']){
                    $users[$i]=$user;
                    break;
                }
            }
            $users=json_encode($users);
            file_put_contents("usuarios.json",$users,LOCK_EX);
        }
?>