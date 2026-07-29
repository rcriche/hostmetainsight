<?php

namespace HostMetaInsight\Checks\Security;

use HostMetaInsight\Contracts\CheckInterface;
use HostMetaInsight\DTO\AuditResult;

if (!defined('ABSPATH')) {
    exit;
}

class SSLCheck implements CheckInterface
{

    public function id(): string
    {
        return 'ssl';
    }


    public function name(): string
    {
        return 'SSL';
    }


    public function run(): AuditResult
    {

        $isHttps = is_ssl();


        if ($isHttps) {

            return new AuditResult(
                'ssl',
                'SSL',
                'Segurança',
                'Alto',
                'success',
                'O site utiliza conexão segura HTTPS.',
                'Continue mantendo o certificado SSL atualizado.',
                10
            );

        }


        return new AuditResult(
            'ssl',
            'SSL',
            'Segurança',
            'Alto',
            'error',
            'O site não utiliza conexão segura HTTPS.',
            'Instale um certificado SSL para proteger os visitantes.',
            0
        );

    }

}