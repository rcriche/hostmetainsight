<?php

namespace HostMetaInsight\DTO;

if (!defined('ABSPATH')) {
    exit;
}

class AuditResult
{
    private string $id;

    private string $name;

    private string $category;

    private string $impact;

    private string $status;

    private string $message;

    private string $recommendation;

    private int $score;


    public function __construct(
        string $id,
        string $name,
        string $category,
        string $impact,
        string $status,
        string $message,
        string $recommendation,
        int $score
    ) {
        $this->id = $id;
        $this->name = $name;
        $this->category = $category;
        $this->impact = $impact;
        $this->status = $status;
        $this->message = $message;
        $this->recommendation = $recommendation;
        $this->score = $score;
    }


    public function toArray(): array
    {
        return [
            'id' => $this->id,
            'name' => $this->name,
            'category' => $this->category,
            'impact' => $this->impact,
            'status' => $this->status,
            'message' => $this->message,
            'recommendation' => $this->recommendation,
            'score' => $this->score
        ];
    }
}