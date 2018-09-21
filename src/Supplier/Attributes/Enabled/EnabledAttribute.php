<?php

namespace Railken\LaraOre\Supplier\Attributes\Enabled;

use Railken\Laravel\Manager\Attributes\BaseAttribute;
use Railken\Laravel\Manager\Contracts\EntityContract;
use Railken\Laravel\Manager\Tokens;

class EnabledAttribute extends BaseAttribute
{
    /**
     * Describe this attribute.
     *
     * @var string
     */
    public $comment = '...';
    /**
     * Name attribute.
     *
     * @var string
     */
    protected $name = 'enabled';

    /**
     * Is the attribute required
     * This will throw not_defined exception for non defined value and non existent model.
     *
     * @var bool
     */
    protected $required = false;

    /**
     * Is the attribute unique.
     *
     * @var bool
     */
    protected $unique = false;

    /**
     * Is the attribute fillable.
     *
     * @var bool
     */
    protected $fillable = false;

    /**
     * List of all exceptions used in validation.
     *
     * @var array
     */
    protected $exceptions = [
        Tokens::NOT_DEFINED    => Exceptions\SupplierEnabledNotDefinedException::class,
        Tokens::NOT_VALID      => Exceptions\SupplierEnabledNotValidException::class,
        Tokens::NOT_AUTHORIZED => Exceptions\SupplierEnabledNotAuthorizedException::class,
        Tokens::NOT_UNIQUE     => Exceptions\SupplierEnabledNotUniqueException::class,
    ];

    /**
     * List of all permissions.
     */
    protected $permissions = [
        Tokens::PERMISSION_FILL => 'supplier.attributes.enabled.fill',
        Tokens::PERMISSION_SHOW => 'supplier.attributes.enabled.show',
    ];

    /**
     * Is a value valid ?
     *
     * @param EntityContract $entity
     * @param mixed          $value
     *
     * @return bool
     */
    public function valid(EntityContract $entity, $value)
    {
        return 1 === $value || 0 === $value || true === $value || false === $value;
    }
}
