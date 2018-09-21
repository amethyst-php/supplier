<?php

namespace Railken\LaraOre\Supplier;

use Railken\Laravel\Manager\ModelAuthorizer;
use Railken\Laravel\Manager\Tokens;

class SupplierAuthorizer extends ModelAuthorizer
{
    /**
     * List of all permissions.
     *
     * @var array
     */
    protected $permissions = [
        Tokens::PERMISSION_CREATE => 'supplier.create',
        Tokens::PERMISSION_UPDATE => 'supplier.update',
        Tokens::PERMISSION_SHOW   => 'supplier.show',
        Tokens::PERMISSION_REMOVE => 'supplier.remove',
    ];
}
