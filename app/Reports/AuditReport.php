<?php

namespace HostMetaInsight\Reports;

use HostMetaInsight\DTO\AuditResult;

if (!defined('ABSPATH')) {
    exit;
}

class AuditReport
{
    private array $results = [];


    public function addResult(AuditResult $result): void
    {
        $this->results[] = $result;
    }


    public function getResults(): array
    {
        return $this->results;
    }


    public function getScore(): int
    {
        if (empty($this->results)) {
            return 0;
        }

        $total = 0;

        foreach ($this->results as $result) {
            $data = $result->toArray();

            $total += $data['score'];
        }

        return $total;
    }


    public function toArray(): array
    {
        return [
            'score' => $this->getScore(),
            'results' => array_map(
                function ($result) {
                    return $result->toArray();
                },
                $this->results
            )
        ];
    }
}