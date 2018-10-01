<?php

namespace FondOfSpryker\Client\CompanyBusinessUnit;

use Generated\Shared\Transfer\CompanyBusinessUnitResponseTransfer;
use Generated\Shared\Transfer\CompanyBusinessUnitTransfer;
use Spryker\Client\CompanyBusinessUnit\CompanyBusinessUnitClientInterface as BaseCompanyBusinessUnitClientInterface;

interface CompanyBusinessUnitClientInterface extends BaseCompanyBusinessUnitClientInterface
{
    /**
     * Specification:
     *  - Retrieve a company business unit by CompanyBusinessUnitTransfer::externalReference in the transfer
     *
     * @api
     *
     * @param \Generated\Shared\Transfer\CompanyBusinessUnitTransfer $companyTransfer
     *
     * @return \Generated\Shared\Transfer\CompanyBusinessUnitResponseTransfer
     */
    public function findCompanyBusinessUnitByExternalReference(CompanyBusinessUnitTransfer $companyTransfer): CompanyBusinessUnitResponseTransfer;
}
