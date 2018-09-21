<?php

namespace Railken\LaraOre\Supplier\Attributes\Notes;

use Railken\Laravel\Manager\Attributes\BaseAttribute;
use Railken\Laravel\Manager\Contracts\EntityContract;
use Railken\Laravel\Manager\Tokens;
use Respect\Validation\Validator as v;

class NotesAttribute extends BaseAttribute
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
    protected $name = 'notes';

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
    protected $fillable = true;

    /**
     * List of all exceptions used in validation.
     *
     * @var array
     */
    protected $exceptions = [
        Tokens::NOT_DEFINED    => Exceptions\SupplierNotesNotDefinedException::class,
        Tokens::NOT_VALID      => Exceptions\SupplierNotesNotValidException::class,
        Tokens::NOT_AUTHORIZED => Exceptions\SupplierNotesNotAuthorizedException::class,
        Tokens::NOT_UNIQUE     => Exceptions\SupplierNotesNotUniqueException::class,
    ];

    /**
     * List of all permissions.
     */
    protected $permissions = [
        Tokens::PERMISSION_FILL => 'supplier.attributes.notes.fill',
        Tokens::PERMISSION_SHOW => 'supplier.attributes.notes.show',
    ];

    /**
     * Is a value valid ?
     *
     * @param \Railken\Laravel\Manager\Contracts\EntityContract $entity
     * @param mixed                                             $value
     *
     * @return bool
     */
    public function valid(EntityContract $entity, $value)
    {
        return v::length(1, 65535)->validate($value);
    }
}
