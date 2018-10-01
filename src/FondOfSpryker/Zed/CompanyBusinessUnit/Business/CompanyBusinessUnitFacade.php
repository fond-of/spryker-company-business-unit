<?php

namespace FondOfSpryker\Zed\CompanyBusinessUnit\Business;

use Generated\Shared\Transfer\CompanyBusinessUnitResponseTransfer;
use Spryker\Zed\CompanyBusinessUnit\Business\CompanyBusinessUnitFacade as BaseCompanyBusinessUnitFacade;

/**
 * @method \FondOfSpryker\Zed\CompanyBusinessUnit\Business\CompanyBusinessUnitBusinessFactory getFactory()
 * @method \FondOfSpryker\Zed\CompanyBusinessUnit\Persistence\CompanyBusinessUnitRepositoryInterface getRepository()
 * @method \Spryker\Zed\CompanyBusinessUnit\Persistence\CompanyBusinessUnitEntityManagerInterface getEntityManager()
 */
class CompanyBusinessUnitFacade extends BaseCompanyBusinessUnitFacade implements CompanyBusinessUnitFacadeInterface
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
    public function findCompanyBusinessUnitByExternalReference(string $externalReference
    ): CompanyBusinessUnitResponseTransfer
    {
        return $this->getFactory()
        ->createCompanyBusinessUnitReader()
        ->findCompanyBusinessUnitByExternalReference($externalReference);
    }
}
