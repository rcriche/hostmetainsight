<?php

namespace HostMetaInsight\DTO;

if (!defined('ABSPATH')) {
    exit;
}

class AuditResult
{
    private string $id;

    private string $name;

    private string $status;

    private string $message;

    private int $score;


    public function __construct(
        string $id,
        string $name,
        string $status,
        string $message,
        int $score
    ) {
        $this->id = $id;
        $this->name = $name;
        $this->status = $status;
        $this->message = $message;
        $this->score = $score;
    }


    public function toArray(): array
    {
        return [
            'id' => $this->id,
            'name' => $this->name,
            'status' => $this->status,
            'message' => $this->message,
            'score' => $this->score
        ];
    }
}