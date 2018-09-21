<?php

namespace Railken\LaraOre\Supplier;

use Illuminate\Support\Facades\Config;
use Railken\Laravel\Manager\Contracts\AgentContract;
use Railken\Laravel\Manager\ModelManager;
use Railken\Laravel\Manager\Tokens;

class SupplierManager extends ModelManager
{
    /**
     * Class name entity.
     *
     * @var string
     */
    public $entity = Supplier::class;

    /**
     * Describe this manager.
     *
     * @var string
     */
    public $comment = '...';

    /**
     * List of all attributes.
     *
     * @var array
     */
    protected $attributes = [
        Attributes\Id\IdAttribute::class,
        Attributes\Name\NameAttribute::class,
        Attributes\CreatedAt\CreatedAtAttribute::class,
        Attributes\UpdatedAt\UpdatedAtAttribute::class,
        Attributes\DeletedAt\DeletedAtAttribute::class,
        Attributes\Description\DescriptionAttribute::class,
        Attributes\Notes\NotesAttribute::class,
        Attributes\Enabled\EnabledAttribute::class,
    ];

    /**
     * List of all exceptions.
     *
     * @var array
     */
    protected $exceptions = [
        Tokens::NOT_AUTHORIZED => Exceptions\SupplierNotAuthorizedException::class,
    ];

    /**
     * Construct.
     *
     * @param AgentContract $agent
     */
    public function __construct(AgentContract $agent = null)
    {
        $this->entity = Config::get('ore.supplier.entity');
        $this->attributes = array_merge($this->attributes, array_values(Config::get('ore.supplier.attributes')));

        $classRepository = Config::get('ore.supplier.repository');
        $this->setRepository(new $classRepository($this));

        $classSerializer = Config::get('ore.supplier.serializer');
        $this->setSerializer(new $classSerializer($this));

        $classAuthorizer = Config::get('ore.supplier.authorizer');
        $this->setAuthorizer(new $classAuthorizer($this));

        $classValidator = Config::get('ore.supplier.validator');
        $this->setValidator(new $classValidator($this));

        parent::__construct($agent);
    }
}
