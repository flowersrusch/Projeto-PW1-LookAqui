<?php
session_start();
$usuarioSearch = $_SESSION["usuario"];
$usuarioUpdate = filter_input_array(INPUT_POST, FILTER_DEFAULT);
    if(file_exists(__DIR__ . "/../api/user-login.php")){
        $stringUsuarios = file_get_contents(__DIR__ . "/../json/usuarios.json");
        $arrayUsuario = json_decode($stringUsuarios,true);
        foreach ($arrayUsuario as $i => $usuario){
            if($usuario["email"] == $usuarioSearch["email"]){
                $arrayUsuario[$i]["name"] = $usuarioUpdate["name"];
                $arrayUsuario[$i]["email"] = $usuarioUpdate["email"];
                $usuarioUpdate["error"] = 0;
                $_SESSION["usuario"] = $usuarioUpdate;
                break;
            }
        }
        $usuariosJson = json_encode($arrayUsuario);
        $file = fopen( __DIR__ . "/../api/user-login.php","w+");
        fwrite($file, $usuariosJson);
        fclose($file);
    }
    echo json_encode($usuarioUpdate);