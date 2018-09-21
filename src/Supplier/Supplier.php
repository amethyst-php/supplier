<?php

namespace Railken\LaraOre\Supplier;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Support\Facades\Config;
use Railken\Laravel\Manager\Contracts\EntityContract;

class Supplier extends Model implements EntityContract
{
    use SoftDeletes;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'description', 'notes', 'enabled',
    ];

    /**
     * The attributes that should be mutated to dates.
     *
     * @var array
     */
    protected $dates = ['deleted_at'];

    /**
     * Creates a new instance of the model.
     *
     * @param array $attributes
     */
    public function __construct(array $attributes = [])
    {
        parent::__construct($attributes);
        $this->table = Config::get('ore.supplier.table');
        $this->fillable = array_merge($this->fillable, array_keys(Config::get('ore.supplier.attributes')));
    }
}
