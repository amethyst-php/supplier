<?php

namespace Railken\LaraOre\Supplier\Exceptions;

class SupplierNotFoundException extends SupplierException
{
    /**
     * The code to identify the error.
     *
     * @var string
     */
    protected $code = 'SUPPLIER_NOT_FOUND';

    /**
     * The message.
     *
     * @var string
     */
    protected $message = 'Not found';
}
