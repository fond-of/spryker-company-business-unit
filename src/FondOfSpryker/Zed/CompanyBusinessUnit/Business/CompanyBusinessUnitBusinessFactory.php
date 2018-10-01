<?php

namespace FondOfSpryker\Zed\CompanyBusinessUnit\Business;

use FondOfSpryker\Zed\CompanyBusinessUnit\Business\CompanyBusinessUnitReader\CompanyBusinessUnitReader;
use FondOfSpryker\Zed\CompanyBusinessUnit\Business\CompanyBusinessUnitReader\CompanyBusinessUnitReaderInterface;
use Spryker\Zed\CompanyBusinessUnit\Business\CompanyBusinessUnitBusinessFactory as BaseCompanyBusinessUnitBusinessFactory;

/**
 * @method \FondOfSpryker\Zed\CompanyBusinessUnit\Persistence\CompanyBusinessUnitRepositoryInterface getRepository()
 * @method \Spryker\Zed\CompanyBusinessUnit\Persistence\CompanyBusinessUnitEntityManagerInterface getEntityManager()
 * @method \Spryker\Zed\CompanyBusinessUnit\CompanyBusinessUnitConfig getConfig()
 */
class CompanyBusinessUnitBusinessFactory extends BaseCompanyBusinessUnitBusinessFactory
{
    /**
     * @return \FondOfSpryker\Zed\CompanyBusinessUnit\Business\CompanyBusinessUnitReader\CompanyBusinessUnitReaderInterface
     */
    public function createCompanyBusinessUnitReader(): CompanyBusinessUnitReaderInterface
    {
        return new CompanyBusinessUnitReader(
            $this->getRepository()
        );
    }
}
