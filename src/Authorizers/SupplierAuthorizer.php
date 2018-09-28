<?php

namespace Railken\Amethyst\Authorizers;

use Railken\Lem\Authorizer;
use Railken\Lem\Tokens;

class SupplierAuthorizer extends Authorizer
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
