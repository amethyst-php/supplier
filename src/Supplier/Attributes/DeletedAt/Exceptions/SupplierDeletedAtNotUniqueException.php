<?php

namespace Railken\LaraOre\Supplier\Attributes\DeletedAt\Exceptions;

use Railken\LaraOre\Supplier\Exceptions\SupplierAttributeException;

class SupplierDeletedAtNotUniqueException extends SupplierAttributeException
{
    /**
     * The reason (attribute) for which this exception is thrown.
     *
     * @var string
     */
    protected $attribute = 'deleted_at';

    /**
     * The code to identify the error.
     *
     * @var string
     */
    protected $code = 'SUPPLIER_DELETED_AT_NOT_UNIQUE';

    /**
     * The message.
     *
     * @var string
     */
    protected $message = 'The %s is not unique';
}
