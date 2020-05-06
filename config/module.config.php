<?php
namespace BitlyShortener;

use Laminas\ServiceManager\Factory\InvokableFactory;

return [
    'controllers' => [
        'factories' => [
            Controller\BitlyShortenerController::class => InvokableFactory::class,
        ],
    ],
    'router' => [
        'routes' => [
            'bitlyshortener' => [
                'type'    => 'Literal',
                'options' => [
                    // Change this to something specific to your module
                    'route'    => '/bitly-shortener',
                    'defaults' => [
                        'controller'    => Controller\BitlyShortenerController::class,
                        'action'        => 'index',
                    ],
                ],
                'may_terminate' => true,
                'child_routes' => [
                    // You can place additional routes that match under the
                    // route defined above here.
                ],
            ],
        ],
    ],
    'view_manager' => [
        'template_path_stack' => [
            'BitlyShortener' => __DIR__ . '/../view',
        ],
    ],
];
