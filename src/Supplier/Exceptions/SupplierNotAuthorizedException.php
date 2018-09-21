<?php

namespace Railken\LaraOre\Supplier\Exceptions;

class SupplierNotAuthorizedException extends SupplierException
{
    /**
     * The code to identify the error.
     *
     * @var string
     */
    protected $code = 'SUPPLIER_NOT_AUTHORIZED';

    /**
     * The message.
     *
     * @var string
     */
    protected $message = "You're not authorized to interact with %s, missing %s permission";
}
