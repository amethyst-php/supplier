<?php

namespace Railken\LaraOre\Supplier\Attributes\Id\Exceptions;

use Railken\LaraOre\Supplier\Exceptions\SupplierAttributeException;

class SupplierIdNotValidException extends SupplierAttributeException
{
    /**
     * The reason (attribute) for which this exception is thrown.
     *
     * @var string
     */
    protected $attribute = 'id';

    /**
     * The code to identify the error.
     *
     * @var string
     */
    protected $code = 'SUPPLIER_ID_NOT_VALID';

    /**
     * The message.
     *
     * @var string
     */
    protected $message = 'The %s is not valid';
}
