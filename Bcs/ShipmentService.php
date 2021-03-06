<?php

namespace Dhl\Shipping\Bcs;

class ShipmentService
{

    /**
     * @var ServiceconfigurationDateOfDelivery $DayOfDelivery
     */
    protected $DayOfDelivery = null;

    /**
     * @var ServiceconfigurationDeliveryTimeframe $DeliveryTimeframe
     */
    protected $DeliveryTimeframe = null;

    /**
     * @var ServiceconfigurationDeliveryTimeframe $PreferredTime
     */
    protected $PreferredTime = null;

    /**
     * @var ServiceconfigurationISR $IndividualSenderRequirement
     */
    protected $IndividualSenderRequirement = null;

    /**
     * @var Serviceconfiguration $PackagingReturn
     */
    protected $PackagingReturn = null;

    /**
     * @var Serviceconfiguration $ReturnImmediately
     */
    protected $ReturnImmediately = null;

    /**
     * @var Serviceconfiguration $NoticeOfNonDeliverability
     */
    protected $NoticeOfNonDeliverability = null;

    /**
     * @var ServiceconfigurationShipmentHandling $ShipmentHandling
     */
    protected $ShipmentHandling = null;

    /**
     * @var ServiceconfigurationEndorsement $Endorsement
     */
    protected $Endorsement = null;

    /**
     * @var ServiceconfigurationVisualAgeCheck $VisualCheckOfAge
     */
    protected $VisualCheckOfAge = null;

    /**
     * @var ServiceconfigurationDetails $PreferredLocation
     */
    protected $PreferredLocation = null;

    /**
     * @var ServiceconfigurationDetails $PreferredNeighbour
     */
    protected $PreferredNeighbour = null;

    /**
     * @var ServiceconfigurationDetails $PreferredDay
     */
    protected $PreferredDay = null;

    /**
     * @var Serviceconfiguration $GoGreen
     */
    protected $GoGreen = null;

    /**
     * @var Serviceconfiguration $Perishables
     */
    protected $Perishables = null;

    /**
     * @var Serviceconfiguration $Personally
     */
    protected $Personally = null;

    /**
     * @var Serviceconfiguration $NoNeighbourDelivery
     */
    protected $NoNeighbourDelivery = null;

    /**
     * @var Serviceconfiguration $NamedPersonOnly
     */
    protected $NamedPersonOnly = null;

    /**
     * @var Serviceconfiguration $ReturnReceipt
     */
    protected $ReturnReceipt = null;

    /**
     * @var Serviceconfiguration $Premium
     */
    protected $Premium = null;

    /**
     * @var ServiceconfigurationCashOnDelivery $CashOnDelivery
     */
    protected $CashOnDelivery = null;

    /**
     * @var ServiceconfigurationAdditionalInsurance $AdditionalInsurance
     */
    protected $AdditionalInsurance = null;

    /**
     * @var Serviceconfiguration $BulkyGoods
     */
    protected $BulkyGoods = null;

    /**
     * @var ServiceconfigurationIC $IdentCheck
     */
    protected $IdentCheck = null;


    public function __construct()
    {

    }

    /**
     * @return ServiceconfigurationDateOfDelivery
     */
    public function getDayOfDelivery()
    {
      return $this->DayOfDelivery;
    }

    /**
     * @param ServiceconfigurationDateOfDelivery $DayOfDelivery
     * @return \Dhl\Shipping\Bcs\ShipmentService
     */
    public function setDayOfDelivery($DayOfDelivery)
    {
      $this->DayOfDelivery = $DayOfDelivery;
      return $this;
    }

    /**
     * @return ServiceconfigurationDeliveryTimeframe
     */
    public function getDeliveryTimeframe()
    {
      return $this->DeliveryTimeframe;
    }

    /**
     * @param ServiceconfigurationDeliveryTimeframe $DeliveryTimeframe
     * @return \Dhl\Shipping\Bcs\ShipmentService
     */
    public function setDeliveryTimeframe($DeliveryTimeframe)
    {
      $this->DeliveryTimeframe = $DeliveryTimeframe;
      return $this;
    }

    /**
     * @return ServiceconfigurationDeliveryTimeframe
     */
    public function getPreferredTime()
    {
      return $this->PreferredTime;
    }

    /**
     * @param ServiceconfigurationDeliveryTimeframe $PreferredTime
     * @return \Dhl\Shipping\Bcs\ShipmentService
     */
    public function setPreferredTime($PreferredTime)
    {
      $this->PreferredTime = $PreferredTime;
      return $this;
    }

    /**
     * @return ServiceconfigurationISR
     */
    public function getIndividualSenderRequirement()
    {
      return $this->IndividualSenderRequirement;
    }

    /**
     * @param ServiceconfigurationISR $IndividualSenderRequirement
     * @return \Dhl\Shipping\Bcs\ShipmentService
     */
    public function setIndividualSenderRequirement($IndividualSenderRequirement)
    {
      $this->IndividualSenderRequirement = $IndividualSenderRequirement;
      return $this;
    }

    /**
     * @return Serviceconfiguration
     */
    public function getPackagingReturn()
    {
      return $this->PackagingReturn;
    }

    /**
     * @param Serviceconfiguration $PackagingReturn
     * @return \Dhl\Shipping\Bcs\ShipmentService
     */
    public function setPackagingReturn($PackagingReturn)
    {
      $this->PackagingReturn = $PackagingReturn;
      return $this;
    }

    /**
     * @return Serviceconfiguration
     */
    public function getReturnImmediately()
    {
      return $this->ReturnImmediately;
    }

    /**
     * @param Serviceconfiguration $ReturnImmediately
     * @return \Dhl\Shipping\Bcs\ShipmentService
     */
    public function setReturnImmediately($ReturnImmediately)
    {
      $this->ReturnImmediately = $ReturnImmediately;
      return $this;
    }

    /**
     * @return Serviceconfiguration
     */
    public function getNoticeOfNonDeliverability()
    {
      return $this->NoticeOfNonDeliverability;
    }

    /**
     * @param Serviceconfiguration $NoticeOfNonDeliverability
     * @return \Dhl\Shipping\Bcs\ShipmentService
     */
    public function setNoticeOfNonDeliverability($NoticeOfNonDeliverability)
    {
      $this->NoticeOfNonDeliverability = $NoticeOfNonDeliverability;
      return $this;
    }

    /**
     * @return ServiceconfigurationShipmentHandling
     */
    public function getShipmentHandling()
    {
      return $this->ShipmentHandling;
    }

    /**
     * @param ServiceconfigurationShipmentHandling $ShipmentHandling
     * @return \Dhl\Shipping\Bcs\ShipmentService
     */
    public function setShipmentHandling($ShipmentHandling)
    {
      $this->ShipmentHandling = $ShipmentHandling;
      return $this;
    }

    /**
     * @return ServiceconfigurationEndorsement
     */
    public function getEndorsement()
    {
      return $this->Endorsement;
    }

    /**
     * @param ServiceconfigurationEndorsement $Endorsement
     * @return \Dhl\Shipping\Bcs\ShipmentService
     */
    public function setEndorsement($Endorsement)
    {
      $this->Endorsement = $Endorsement;
      return $this;
    }

    /**
     * @return ServiceconfigurationVisualAgeCheck
     */
    public function getVisualCheckOfAge()
    {
      return $this->VisualCheckOfAge;
    }

    /**
     * @param ServiceconfigurationVisualAgeCheck $VisualCheckOfAge
     * @return \Dhl\Shipping\Bcs\ShipmentService
     */
    public function setVisualCheckOfAge($VisualCheckOfAge)
    {
      $this->VisualCheckOfAge = $VisualCheckOfAge;
      return $this;
    }

    /**
     * @return ServiceconfigurationDetails
     */
    public function getPreferredLocation()
    {
      return $this->PreferredLocation;
    }

    /**
     * @param ServiceconfigurationDetails $PreferredLocation
     * @return \Dhl\Shipping\Bcs\ShipmentService
     */
    public function setPreferredLocation($PreferredLocation)
    {
      $this->PreferredLocation = $PreferredLocation;
      return $this;
    }

    /**
     * @return ServiceconfigurationDetails
     */
    public function getPreferredNeighbour()
    {
      return $this->PreferredNeighbour;
    }

    /**
     * @param ServiceconfigurationDetails $PreferredNeighbour
     * @return \Dhl\Shipping\Bcs\ShipmentService
     */
    public function setPreferredNeighbour($PreferredNeighbour)
    {
      $this->PreferredNeighbour = $PreferredNeighbour;
      return $this;
    }

    /**
     * @return ServiceconfigurationDetails
     */
    public function getPreferredDay()
    {
      return $this->PreferredDay;
    }

    /**
     * @param ServiceconfigurationDetails $PreferredDay
     * @return \Dhl\Shipping\Bcs\ShipmentService
     */
    public function setPreferredDay($PreferredDay)
    {
      $this->PreferredDay = $PreferredDay;
      return $this;
    }

    /**
     * @return Serviceconfiguration
     */
    public function getGoGreen()
    {
      return $this->GoGreen;
    }

    /**
     * @param Serviceconfiguration $GoGreen
     * @return \Dhl\Shipping\Bcs\ShipmentService
     */
    public function setGoGreen($GoGreen)
    {
      $this->GoGreen = $GoGreen;
      return $this;
    }

    /**
     * @return Serviceconfiguration
     */
    public function getPerishables()
    {
      return $this->Perishables;
    }

    /**
     * @param Serviceconfiguration $Perishables
     * @return \Dhl\Shipping\Bcs\ShipmentService
     */
    public function setPerishables($Perishables)
    {
      $this->Perishables = $Perishables;
      return $this;
    }

    /**
     * @return Serviceconfiguration
     */
    public function getPersonally()
    {
      return $this->Personally;
    }

    /**
     * @param Serviceconfiguration $Personally
     * @return \Dhl\Shipping\Bcs\ShipmentService
     */
    public function setPersonally($Personally)
    {
      $this->Personally = $Personally;
      return $this;
    }

    /**
     * @return Serviceconfiguration
     */
    public function getNoNeighbourDelivery()
    {
      return $this->NoNeighbourDelivery;
    }

    /**
     * @param Serviceconfiguration $NoNeighbourDelivery
     * @return \Dhl\Shipping\Bcs\ShipmentService
     */
    public function setNoNeighbourDelivery($NoNeighbourDelivery)
    {
      $this->NoNeighbourDelivery = $NoNeighbourDelivery;
      return $this;
    }

    /**
     * @return Serviceconfiguration
     */
    public function getNamedPersonOnly()
    {
      return $this->NamedPersonOnly;
    }

    /**
     * @param Serviceconfiguration $NamedPersonOnly
     * @return \Dhl\Shipping\Bcs\ShipmentService
     */
    public function setNamedPersonOnly($NamedPersonOnly)
    {
      $this->NamedPersonOnly = $NamedPersonOnly;
      return $this;
    }

    /**
     * @return Serviceconfiguration
     */
    public function getReturnReceipt()
    {
      return $this->ReturnReceipt;
    }

    /**
     * @param Serviceconfiguration $ReturnReceipt
     * @return \Dhl\Shipping\Bcs\ShipmentService
     */
    public function setReturnReceipt($ReturnReceipt)
    {
      $this->ReturnReceipt = $ReturnReceipt;
      return $this;
    }

    /**
     * @return Serviceconfiguration
     */
    public function getPremium()
    {
      return $this->Premium;
    }

    /**
     * @param Serviceconfiguration $Premium
     * @return \Dhl\Shipping\Bcs\ShipmentService
     */
    public function setPremium($Premium)
    {
      $this->Premium = $Premium;
      return $this;
    }

    /**
     * @return ServiceconfigurationCashOnDelivery
     */
    public function getCashOnDelivery()
    {
      return $this->CashOnDelivery;
    }

    /**
     * @param ServiceconfigurationCashOnDelivery $CashOnDelivery
     * @return \Dhl\Shipping\Bcs\ShipmentService
     */
    public function setCashOnDelivery($CashOnDelivery)
    {
      $this->CashOnDelivery = $CashOnDelivery;
      return $this;
    }

    /**
     * @return ServiceconfigurationAdditionalInsurance
     */
    public function getAdditionalInsurance()
    {
      return $this->AdditionalInsurance;
    }

    /**
     * @param ServiceconfigurationAdditionalInsurance $AdditionalInsurance
     * @return \Dhl\Shipping\Bcs\ShipmentService
     */
    public function setAdditionalInsurance($AdditionalInsurance)
    {
      $this->AdditionalInsurance = $AdditionalInsurance;
      return $this;
    }

    /**
     * @return Serviceconfiguration
     */
    public function getBulkyGoods()
    {
      return $this->BulkyGoods;
    }

    /**
     * @param Serviceconfiguration $BulkyGoods
     * @return \Dhl\Shipping\Bcs\ShipmentService
     */
    public function setBulkyGoods($BulkyGoods)
    {
      $this->BulkyGoods = $BulkyGoods;
      return $this;
    }

    /**
     * @return ServiceconfigurationIC
     */
    public function getIdentCheck()
    {
      return $this->IdentCheck;
    }

    /**
     * @param ServiceconfigurationIC $IdentCheck
     * @return \Dhl\Shipping\Bcs\ShipmentService
     */
    public function setIdentCheck($IdentCheck)
    {
      $this->IdentCheck = $IdentCheck;
      return $this;
    }

}
