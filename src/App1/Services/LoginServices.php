<?php
namespace App1\Services;

use App1\Factory\UsuarioFactory;

class LoginService {
    public function executar($lo, $se) {
        $login = $lo;
        $senha = $se;

        $perfil = 'professor'; 
        $usuario = UsuarioFactory::criar($perfil);

        if ($usuario->autenticar($login, $senha)) {
            $autorizacoes = $usuario->autorizar();
            echo "Bem-vindo, $login! Você tem acesso às seguintes funcionalidades: " . implode(', ', $autorizacoes);
        } else {
            echo 'Login ou senha incorretos.';
        }
    }
}
?>