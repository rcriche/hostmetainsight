<?php

namespace HostMetaInsight\Contracts;

if (!defined('ABSPATH')) {
    exit;
}

interface CheckInterface
{
    /**
     * Executa a verificação.
     */
    public function run(): array;


    /**
     * Retorna o identificador da verificação.
     */
    public function id(): string;


    /**
     * Retorna o nome da verificação.
     */
    public function name(): string;
}