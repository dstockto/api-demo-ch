<?php
return [
    'service_manager' => [
        'factories' => [
            \LenderApi\V1\Rest\Client\ClientResource::class => \LenderApi\V1\Rest\Client\ClientResourceFactory::class,
        ],
    ],
    'router' => [
        'routes' => [
            'lender-api.rest.client' => [
                'type' => 'Segment',
                'options' => [
                    'route' => '/client[/:client_id]',
                    'defaults' => [
                        'controller' => 'LenderApi\\V1\\Rest\\Client\\Controller',
                    ],
                ],
            ],
        ],
    ],
    'api-tools-versioning' => [
        'uri' => [
            0 => 'lender-api.rest.client',
        ],
    ],
    'api-tools-rest' => [
        'LenderApi\\V1\\Rest\\Client\\Controller' => [
            'listener' => \LenderApi\V1\Rest\Client\ClientResource::class,
            'route_name' => 'lender-api.rest.client',
            'route_identifier_name' => 'client_id',
            'collection_name' => 'client',
            'entity_http_methods' => [],
            'collection_http_methods' => [
                0 => 'GET',
            ],
            'collection_query_whitelist' => [],
            'page_size' => 25,
            'page_size_param' => null,
            'entity_class' => \LenderApi\V1\Rest\Client\ClientEntity::class,
            'collection_class' => \LenderApi\V1\Rest\Client\ClientCollection::class,
            'service_name' => 'Client',
        ],
    ],
    'api-tools-content-negotiation' => [
        'controllers' => [
            'LenderApi\\V1\\Rest\\Client\\Controller' => 'HalJson',
        ],
        'accept_whitelist' => [
            'LenderApi\\V1\\Rest\\Client\\Controller' => [
                0 => 'application/vnd.lender-api.v1+json',
                1 => 'application/hal+json',
                2 => 'application/json',
            ],
        ],
        'content_type_whitelist' => [
            'LenderApi\\V1\\Rest\\Client\\Controller' => [
                0 => 'application/vnd.lender-api.v1+json',
                1 => 'application/json',
            ],
        ],
    ],
    'api-tools-hal' => [
        'metadata_map' => [
            \LenderApi\V1\Rest\Client\ClientEntity::class => [
                'entity_identifier_name' => 'clientId',
                'route_name' => 'lender-api.rest.client',
                'route_identifier_name' => 'client_id',
                'hydrator' => \Laminas\Hydrator\ObjectPropertyHydrator::class,
            ],
            \LenderApi\V1\Rest\Client\ClientCollection::class => [
                'entity_identifier_name' => 'clientId',
                'route_name' => 'lender-api.rest.client',
                'route_identifier_name' => 'client_id',
                'is_collection' => true,
            ],
        ],
    ],
];
