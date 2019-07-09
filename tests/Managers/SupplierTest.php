<?php

namespace Amethyst\Tests\Managers;

use Amethyst\Fakers\SupplierFaker;
use Amethyst\Managers\SupplierManager;
use Amethyst\Tests\BaseTest;
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
