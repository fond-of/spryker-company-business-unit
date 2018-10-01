<?php

namespace FondOfSpryker\Client\CompanyBusinessUnit;

use FondOfSpryker\Client\CompanyBusinessUnit\Zed\CompanyBusinessUnitStub;
use FondOfSpryker\Client\CompanyBusinessUnit\Zed\CompanyBusinessUnitStubInterface;
use Spryker\Client\CompanyBusinessUnit\CompanyBusinessUnitFactory as BaseCompanyBusinessUnitFactory;

class CompanyBusinessUnitFactory extends BaseCompanyBusinessUnitFactory
{
    /**
     * @return \FondOfSpryker\Client\CompanyBusinessUnit\Zed\CompanyBusinessUnitStubInterface
     */
    public function createZedCompanyBusinessUnitStub(): CompanyBusinessUnitStubInterface
    {
        return new CompanyBusinessUnitStub($this->getZedRequestClient());
    }
}
