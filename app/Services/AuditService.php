<?php

namespace HostMetaInsight\Services;

use HostMetaInsight\Reports\AuditReport;
use HostMetaInsight\Checks\Security\SSLCheck;

if (!defined('ABSPATH')) {
    exit;
}

class AuditService
{

    public function run(): AuditReport
    {
        $report = new AuditReport();


        $checks = [
            new SSLCheck()
        ];


        foreach ($checks as $check) {

            $result = $check->run();

            $report->addResult($result);

        }


        return $report;
    }

}