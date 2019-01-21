<?php

return [
    /*
    |--------------------------------------------------------------------------
    | Data
    |--------------------------------------------------------------------------
    |
    | Here you can change the table name and the class components.
    |
    */
    'data' => [
        'supplier' => [
            'table'      => 'amethyst_suppliers',
            'comment'    => 'Supplier',
            'model'      => Railken\Amethyst\Models\Supplier::class,
            'schema'     => Railken\Amethyst\Schemas\SupplierSchema::class,
            'repository' => Railken\Amethyst\Repositories\SupplierRepository::class,
            'serializer' => Railken\Amethyst\Serializers\SupplierSerializer::class,
            'validator'  => Railken\Amethyst\Validators\SupplierValidator::class,
            'authorizer' => Railken\Amethyst\Authorizers\SupplierAuthorizer::class,
            'faker'      => Railken\Amethyst\Fakers\SupplierFaker::class,
            'manager'    => Railken\Amethyst\Managers\SupplierManager::class,
        ],
    ],

    /*
    |--------------------------------------------------------------------------
    | Http configuration
    |--------------------------------------------------------------------------
    |
    | Here you may configure the routes
    |
    */
    'http' => [
        'admin' => [
            'supplier' => [
                'enabled'    => true,
                'controller' => Railken\Amethyst\Http\Controllers\Admin\SuppliersController::class,
                'router'     => [
                    'as'     => 'supplier.',
                    'prefix' => '/suppliers',
                ],
            ],
        ],
    ],
];
