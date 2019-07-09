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
            'model'      => Amethyst\Models\Supplier::class,
            'schema'     => Amethyst\Schemas\SupplierSchema::class,
            'repository' => Amethyst\Repositories\SupplierRepository::class,
            'serializer' => Amethyst\Serializers\SupplierSerializer::class,
            'validator'  => Amethyst\Validators\SupplierValidator::class,
            'authorizer' => Amethyst\Authorizers\SupplierAuthorizer::class,
            'faker'      => Amethyst\Fakers\SupplierFaker::class,
            'manager'    => Amethyst\Managers\SupplierManager::class,
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
                'controller' => Amethyst\Http\Controllers\Admin\SuppliersController::class,
                'router'     => [
                    'as'     => 'supplier.',
                    'prefix' => '/suppliers',
                ],
            ],
        ],
    ],
];
