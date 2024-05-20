<?php

namespace App\Data;

class Branch
{
    private $branchName;
    private $branchType;
    private $government;
    private $city;
    private $mobileNumber;
    private $CRN;
    private $taxIdNumber;

    public function __construct($branchName, $branchType, $government, $city, $mobileNumber, $CRN, $taxIdNumber)
    {
        $this->branchName = $branchName;
        $this->branchType = $branchType;
        $this->government = $government;
        $this->city = $city;
        $this->mobileNumber = $mobileNumber;
        $this->CRN = $CRN;
        $this->taxIdNumber = $taxIdNumber;
    }

    public function getBranchName()
    {
        return $this->branchName;
    }

    public function setBranchName($branchName)
    {
        $this->branchName = $branchName;
    }

    public function getBranchType()
    {
        return $this->branchType;
    }

    public function setBranchType($branchType)
    {
        $this->branchType = $branchType;
    }

    public function getGovernment()
    {
        return $this->government;
    }

    public function setGovernment($government)
    {
        $this->government = $government;
    }

    public function getCity()
    {
        return $this->city;
    }

    public function setCity($city)
    {
        $this->city = $city;
    }

    public function getMobileNumber()
    {
        return $this->mobileNumber;
    }

    public function setMobileNumber($mobileNumber)
    {
        $this->mobileNumber = $mobileNumber;
    }

    public function getCRN()
    {
        return $this->CRN;
    }

    public function setCRN($CRN)
    {
        $this->CRN = $CRN;
    }

    public function getTaxIdNumber()
    {
        return $this->taxIdNumber;
    }

    public function setTaxIdNumber($taxIdNumber)
    {
        $this->taxIdNumber = $taxIdNumber;
    }
}
