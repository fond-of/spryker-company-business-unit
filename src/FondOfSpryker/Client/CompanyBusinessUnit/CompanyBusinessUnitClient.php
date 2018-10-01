<?php

namespace FondOfSpryker\Client\CompanyBusinessUnit;

use Generated\Shared\Transfer\CompanyBusinessUnitResponseTransfer;
use Generated\Shared\Transfer\CompanyBusinessUnitTransfer;
use Spryker\Client\CompanyBusinessUnit\CompanyBusinessUnitClient as BaseCompanyBusinessUnitClient;

/**
 * @method \FondOfSpryker\Client\CompanyBusinessUnit\CompanyBusinessUnitFactory getFactory()
 */
class CompanyBusinessUnitClient extends BaseCompanyBusinessUnitClient implements CompanyBusinessUnitClientInterface
{
    /**
     * {@inheritdoc}
     *
     * @api
     *
     * @param \Generated\Shared\Transfer\CompanyBusinessUnitTransfer $companyTransfer
     *
     * @return \Generated\Shared\Transfer\CompanyBusinessUnitResponseTransfer
     */
    public function findCompanyBusinessUnitByExternalReference(CompanyBusinessUnitTransfer $companyTransfer
    ): CompanyBusinessUnitResponseTransfer
    {
        return $this->getFactory()
            ->createZedCompanyBusinessUnitStub()
            ->findCompanyBusinessUnitByExternalReference($companyTransfer);
    }
}
