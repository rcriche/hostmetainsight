<?php

namespace HostMetaInsight\Core;

if (!defined('ABSPATH')) {
    exit;
}

class Application
{
    private static ?Application $instance = null;

    public static function getInstance(): Application
    {
        if (self::$instance === null) {
            self::$instance = new self();
        }

        return self::$instance;
    }

    public function boot(): void
    {
        Loader::init();
    }
}