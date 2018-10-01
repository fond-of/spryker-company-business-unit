<?php

namespace FondOfSpryker\Zed\CompanyBusinessUnit\Business;

use Generated\Shared\Transfer\CompanyBusinessUnitResponseTransfer;
use Spryker\Zed\CompanyBusinessUnit\Business\CompanyBusinessUnitFacadeInterface as BaseCompanyBusinessUnitFacadeInterface;

interface CompanyBusinessUnitFacadeInterface extends BaseCompanyBusinessUnitFacadeInterface
{
    /**
     * Specification:
     * - Retrieves company business unit information by external reference.
     *
     * @api
     *
     * @param string $externalReference
     *
     * @return \Generated\Shared\Transfer\CompanyBusinessUnitResponseTransfer
     */
    public function findCompanyBusinessUnitByExternalReference(string $externalReference): CompanyBusinessUnitResponseTransfer;
}
