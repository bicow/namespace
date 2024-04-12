<?php
namespace App2\Models;

use App2\Models\Administrador;

class AdministradorSupremo extends Administrador {
    public function autorizar(): array {
        $autorizacoes = parent::autorizar();
        $autorizacoes[] = 'configurar_sistema';
        $autorizacoes[] = 'gerenciar_backups';
        return $autorizacoes;
    }
}
?>