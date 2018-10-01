<?php

namespace FondOfSpryker\Zed\CompanyBusinessUnit\Business\CompanyBusinessUnitReader;

use Generated\Shared\Transfer\CompanyBusinessUnitResponseTransfer;

interface CompanyBusinessUnitReaderInterface
{
    /**
     * @param string $externalReference
     *
     * @return \Generated\Shared\Transfer\CompanyBusinessUnitResponseTransfer
     */
    public function findCompanyBusinessUnitByExternalReference(string $externalReference): CompanyBusinessUnitResponseTransfer;
}
