<?php
namespace App1\Factory;

use App1\Interfaces\Usuario;
use App1\Models\Professor;
use App1\Models\Administrador;
use App1\Models\AdministradorSupremo;

class UsuarioFactory {
    public static function criar(string $perfil): Usuario {
        switch ($perfil) {
            case 'professor':
                return new Professor();
            case 'administrador':
                return new Administrador();
            case 'administrador_supremo':
                return new AdministradorSupremo();
            default:
                throw new \Exception('Perfil inválido');
        }
    }
}
?>