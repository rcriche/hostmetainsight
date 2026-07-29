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
    $service = new \HostMetaInsight\Services\AuditService();

    $report = $service->run();

    echo '<div class="wrap">';

    echo '<h1>HostMeta Insight</h1>';

    echo '<h2>Resultado da Auditoria</h2>';

    echo '<hr>';

    foreach ($report->getResults() as $result) {

        $data = $result->toArray();

        echo '<h3>';
        echo esc_html($data['name']);
        echo '</h3>';

        echo '<p><strong>Categoria:</strong> ';
        echo esc_html($data['category']);
        echo '</p>';

        echo '<p><strong>Impacto:</strong> ';
        echo esc_html($data['impact']);
        echo '</p>';

        echo '<p>';
        echo esc_html($data['message']);
        echo '</p>';

        echo '<p><strong>Recomendação:</strong> ';
        echo esc_html($data['recommendation']);
        echo '</p>';

        echo '<p><strong>Pontuação:</strong> ';
        echo esc_html($data['score']);
        echo '/10</p>';

        echo '<hr>';

        }


    echo '</div>';
    }
}