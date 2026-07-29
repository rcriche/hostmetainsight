<?php

namespace HostMetaInsight\Services;

use HostMetaInsight\Reports\AuditReport;

if (!defined('ABSPATH')) {
    exit;
}

class AuditService
{

    public function run(): AuditReport
    {
        $report = new AuditReport();


        /**
         * As verificações serão adicionadas aqui.
         *
         * Exemplo futuro:
         *
         * $check = new SSLCheck();
         * $report->addResult($check->run());
         */


        return $report;
    }

}