<?php

namespace Railken\Amethyst\Tests\Managers;

use Railken\Amethyst\Fakers\SupplierFaker;
use Railken\Amethyst\Managers\SupplierManager;
use Railken\Amethyst\Tests\BaseTest;
use Railken\Lem\Support\Testing\TestableBaseTrait;

class SupplierTest extends BaseTest
{
    use TestableBaseTrait;

    /**
     * Manager class.
     *
     * @var string
     */
    protected $manager = SupplierManager::class;

    /**
     * Faker class.
     *
     * @var string
     */
    protected $faker = SupplierFaker::class;
}
