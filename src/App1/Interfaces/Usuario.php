<?php
namespace App1\Interfaces;

interface Usuario {
    public function autenticar(string $login, string $senha): bool;
    public function autorizar(): array;
}
?>