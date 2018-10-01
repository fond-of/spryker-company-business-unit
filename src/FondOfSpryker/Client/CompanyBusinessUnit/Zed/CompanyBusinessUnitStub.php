<?php

namespace FondOfSpryker\Client\CompanyBusinessUnit\Zed;

use Generated\Shared\Transfer\CompanyBusinessUnitResponseTransfer;
use Generated\Shared\Transfer\CompanyBusinessUnitTransfer;
use Spryker\Client\CompanyBusinessUnit\Zed\CompanyBusinessUnitStub as BaseCompanyBusinessUnitStub;

class CompanyBusinessUnitStub extends BaseCompanyBusinessUnitStub implements CompanyBusinessUnitStubInterface
{
    /**
     * @param \Generated\Shared\Transfer\CompanyBusinessUnitTransfer $companyBusinessUnitTransfer
     *
     * @return \Generated\Shared\Transfer\CompanyBusinessUnitResponseTransfer
     */
    public function findCompanyBusinessUnitByExternalReference(CompanyBusinessUnitTransfer $companyBusinessUnitTransfer
    ): CompanyBusinessUnitResponseTransfer
    {
        /** @var \Generated\Shared\Transfer\CompanyBusinessUnitResponseTransfer $companyBusinessUnitResponseTransfer */
        $companyBusinessUnitResponseTransfer = $this->zedRequestClient->call(
            '/company-business-unit/gateway/find-company-business-unit-by-external-reference',
            $companyBusinessUnitTransfer
        );

        return $companyBusinessUnitResponseTransfer;
    }
}
