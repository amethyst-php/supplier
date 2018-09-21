<?php

namespace Railken\LaraOre\Supplier\Attributes\Name\Exceptions;

use Railken\LaraOre\Supplier\Exceptions\SupplierAttributeException;

class SupplierNameNotAuthorizedException extends SupplierAttributeException
{
    /**
     * The reason (attribute) for which this exception is thrown.
     *
     * @var string
     */
    protected $attribute = 'name';

    /**
     * The code to identify the error.
     *
     * @var string
     */
    protected $code = 'SUPPLIER_NAME_NOT_AUTHTORIZED';

    /**
     * The message.
     *
     * @var string
     */
    protected $message = "You're not authorized to interact with %s, missing %s permission";
}
