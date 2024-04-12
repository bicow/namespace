<?php
namespace App2\Factory;

use App2\Models\Usuario;
use App2\Models\Professor;
use App2\Models\Administrador;
use App2\Models\AdministradorSupremo;

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