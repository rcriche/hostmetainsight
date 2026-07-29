<?php

namespace HostMetaInsight\Core;

if (!defined('ABSPATH')) {
    exit;
}

class Loader
{
    public static function init(): void
    {
        add_action('admin_menu', [self::class, 'registerMenu']);
    }

    public static function registerMenu(): void
    {
        add_menu_page(
            'HostMeta Insight',
            'HostMeta Insight',
            'manage_options',
            'hostmeta-insight',
            [self::class, 'dashboard'],
            'dashicons-chart-area',
            30
        );
    }

    public static function dashboard(): void
    {
        echo '<div class="wrap">';
        echo '<h1>HostMeta Insight</h1>';
        echo '<p>Plugin carregado com sucesso.</p>';
        echo '<p>🚀 A auditoria será implementada nas próximas versões.</p>';
        echo '</div>';
    }
}