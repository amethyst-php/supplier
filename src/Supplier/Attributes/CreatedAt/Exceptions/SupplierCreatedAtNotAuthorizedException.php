<?php

namespace Railken\LaraOre\Supplier\Attributes\CreatedAt\Exceptions;

use Railken\LaraOre\Supplier\Exceptions\SupplierAttributeException;

class SupplierCreatedAtNotAuthorizedException extends SupplierAttributeException
{
    /**
     * The reason (attribute) for which this exception is thrown.
     *
     * @var string
     */
    protected $attribute = 'created_at';

    /**
     * The code to identify the error.
     *
     * @var string
     */
    protected $code = 'SUPPLIER_CREATED_AT_NOT_AUTHTORIZED';

    /**
     * The message.
     *
     * @var string
     */
    protected $message = "You're not authorized to interact with %s, missing %s permission";
}
