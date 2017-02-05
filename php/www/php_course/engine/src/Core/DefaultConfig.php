<?php

namespace SlavaSpb\engine\Core;

abstract class DefaultConfig
{
    public static function getConfig(): array
    {
        return [
            'services' => [
                'templater' => [
                    'class' => '\\SlavaSpb\\engine\\Templating\\TwigTemplateEngine',
                    'template_dir' => 'templates',
                    'environment_options' => [
                        'cache' => 'cache',
                        'debug' => true,
                    ],
                ],
            ],
        ];
    }
}
