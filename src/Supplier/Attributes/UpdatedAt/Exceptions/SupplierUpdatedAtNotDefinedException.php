<?php

namespace Railken\LaraOre\Supplier\Attributes\UpdatedAt\Exceptions;

use Railken\LaraOre\Supplier\Exceptions\SupplierAttributeException;

class SupplierUpdatedAtNotDefinedException extends SupplierAttributeException
{
    /**
     * The reason (attribute) for which this exception is thrown.
     *
     * @var string
     */
    protected $attribute = 'updated_at';

    /**
     * The code to identify the error.
     *
     * @var string
     */
    protected $code = 'SUPPLIER_UPDATED_AT_NOT_DEFINED';

    /**
     * The message.
     *
     * @var string
     */
    protected $message = 'The %s is required';
}
