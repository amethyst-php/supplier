<?php

namespace Railken\LaraOre\Tests\Supplier;

use Railken\LaraOre\Supplier\SupplierFaker;
use Railken\LaraOre\Supplier\SupplierManager;
use Railken\LaraOre\Support\Testing\ManagerTestableTrait;

class ManagerTest extends BaseTest
{
    use ManagerTestableTrait;

    /**
     * Retrieve basic url.
     *
     * @return \Railken\Laravel\Manager\Contracts\ManagerContract
     */
    public function getManager()
    {
        return new SupplierManager();
    }

    public function testSuccessCommon()
    {
        $this->commonTest($this->getManager(), SupplierFaker::make()->parameters());
    }
}
