<?php

namespace Railken\LaraOre\Supplier;

use Faker\Factory;
use Railken\Bag;
use Railken\Laravel\Manager\BaseFaker;

class SupplierFaker extends BaseFaker
{
    /**
     * @var string
     */
    protected $manager = SupplierManager::class;

    /**
     * @return \Railken\Bag
     */
    public function parameters()
    {
        $faker = Factory::create();

        $bag = new Bag();
        $bag->set('name', $faker->name);
        $bag->set('description', $faker->text);
        $bag->set('notes', $faker->text);
        $bag->set('enabled', 1);

        return $bag;
    }
}
