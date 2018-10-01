<?php

namespace FondOfSpryker\Client\CompanyBusinessUnit\Zed;

use Generated\Shared\Transfer\CompanyBusinessUnitResponseTransfer;
use Generated\Shared\Transfer\CompanyBusinessUnitTransfer;
use Spryker\Client\CompanyBusinessUnit\Zed\CompanyBusinessUnitStubInterface as BaseCompanyBusinessUnitStubInterface;

interface CompanyBusinessUnitStubInterface extends BaseCompanyBusinessUnitStubInterface
{
    /**
     * @param \Generated\Shared\Transfer\CompanyBusinessUnitTransfer $companyBusinessUnitTransfer
     *
     * @return \Generated\Shared\Transfer\CompanyBusinessUnitResponseTransfer
     */
    public function findCompanyBusinessUnitByExternalReference(CompanyBusinessUnitTransfer $companyBusinessUnitTransfer): CompanyBusinessUnitResponseTransfer;
}
