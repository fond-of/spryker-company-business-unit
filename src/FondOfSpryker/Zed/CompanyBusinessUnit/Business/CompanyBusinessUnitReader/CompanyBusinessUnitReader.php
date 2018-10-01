<?php

namespace FondOfSpryker\Zed\CompanyBusinessUnit\Business\CompanyBusinessUnitReader;

use FondOfSpryker\Zed\CompanyBusinessUnit\Persistence\CompanyBusinessUnitRepositoryInterface;
use Generated\Shared\Transfer\CompanyBusinessUnitResponseTransfer;

class CompanyBusinessUnitReader implements CompanyBusinessUnitReaderInterface
{
    /**
     * @var \FondOfSpryker\Zed\CompanyBusinessUnit\Persistence\CompanyBusinessUnitRepositoryInterface
     */
    protected $companyBusinessUnitRepository;

    /**
     * @param \FondOfSpryker\Zed\CompanyBusinessUnit\Persistence\CompanyBusinessUnitRepositoryInterface $companyBusinessUnitRepository
     */
    public function __construct(
        CompanyBusinessUnitRepositoryInterface $companyBusinessUnitRepository
    ) {
        $this->companyBusinessUnitRepository = $companyBusinessUnitRepository;
    }

    /**
     * @param string $externalReference
     *
     * @return \Generated\Shared\Transfer\CompanyBusinessUnitResponseTransfer
     */
    public function findCompanyBusinessUnitByExternalReference(string $externalReference
    ): CompanyBusinessUnitResponseTransfer
    {
        $companyBusinessUnitTransfer = $this->companyBusinessUnitRepository->findCompanyBusinessUnitByExternalReference($externalReference);

        $companyBusinessUnitResponseTransfer = (new CompanyBusinessUnitResponseTransfer())
            ->setIsSuccessful(false);

        if ($companyBusinessUnitTransfer !== null) {
            $companyBusinessUnitResponseTransfer->setCompanyBusinessUnitTransfer($companyBusinessUnitTransfer)
                ->setIsSuccessful(true);
        }

        return $companyBusinessUnitResponseTransfer;
    }
}
