<?php

namespace FondOfSpryker\Client\CompanyBusinessUnit;

use FondOfSpryker\Client\CompanyBusinessUnit\Zed\CompanyBusinessUnitStub;
use Spryker\Client\CompanyBusinessUnit\CompanyBusinessUnitFactory as BaseCompanyBusinessUnitFactory;
use Spryker\Client\CompanyBusinessUnit\Zed\CompanyBusinessUnitStubInterface;

class CompanyBusinessUnitFactory extends BaseCompanyBusinessUnitFactory
{
    /**
     * @return \Spryker\Client\CompanyBusinessUnit\Zed\CompanyBusinessUnitStubInterface
     */
    public function createZedCompanyBusinessUnitStub(): CompanyBusinessUnitStubInterface
    {
        return new CompanyBusinessUnitStub($this->getZedRequestClient());
    }
}
