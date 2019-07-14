<?php

namespace Amethyst\Managers;

use Amethyst\Common\ConfigurableManager;
use Railken\Lem\Manager;

/**
 * @method \Amethyst\Models\Supplier                 newEntity()
 * @method \Amethyst\Schemas\SupplierSchema          getSchema()
 * @method \Amethyst\Repositories\SupplierRepository getRepository()
 * @method \Amethyst\Serializers\SupplierSerializer  getSerializer()
 * @method \Amethyst\Validators\SupplierValidator    getValidator()
 * @method \Amethyst\Authorizers\SupplierAuthorizer  getAuthorizer()
 */
class SupplierManager extends Manager
{
    use ConfigurableManager;

    /**
     * @var string
     */
    protected $config = 'amethyst.supplier.data.supplier';
}
