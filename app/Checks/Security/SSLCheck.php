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
                'success',
                'O site utiliza conexão segura HTTPS.',
                10
            );

        }


        return new AuditResult(
            'ssl',
            'SSL',
            'error',
            'O site não utiliza conexão segura HTTPS.',
            0
        );

    }

}