<?php
/**
 * Dhl Shipping
 *
 * NOTICE OF LICENSE
 *
 * This source file is subject to the Open Software License (OSL 3.0)
 * that is bundled with this package in the file LICENSE.txt.
 * It is also available through the world-wide-web at this URL:
 * http://opensource.org/licenses/osl-3.0.php
 *
 * DISCLAIMER
 *
 * Do not edit or add to this file if you wish to upgrade this extension to
 * newer versions in the future.
 *
 * PHP version 7
 *
 * @category  Dhl
 * @package   Dhl\Shipping\Api
 * @author    Christoph Aßmann <christoph.assmann@netresearch.de>
 * @copyright 2017 Netresearch GmbH & Co. KG
 * @license   http://opensource.org/licenses/osl-3.0.php Open Software License (OSL 3.0)
 * @link      http://www.netresearch.de/
 */
namespace Dhl\Shipping\Webservice\RequestType\CreateShipment\ShipmentOrder\Contact;

use \Dhl\Shipping\Api\Data\Webservice\RequestType\CreateShipment\ShipmentOrder\Contact\AddressInterface;
use \Dhl\Shipping\Api\Data\Webservice\RequestType\CreateShipment\ShipmentOrder\Contact\IdCardInterface;
use \Dhl\Shipping\Api\Data\Webservice\RequestType\CreateShipment\ShipmentOrder\Contact\ReceiverInterface;

/**
 * Platform independent shipment order receiver details
 *
 * @category Dhl
 * @package  Dhl\Shipping\Api
 * @author   Christoph Aßmann <christoph.assmann@netresearch.de>
 * @license  http://opensource.org/licenses/osl-3.0.php Open Software License (OSL 3.0)
 * @link     http://www.netresearch.de/
 */
class Receiver implements ReceiverInterface
{
    /**
     * @var string
     */
    private $contactPerson;

    /**
     * @var array|\string[]
     */
    private $name;

    /**
     * @var string
     */
    private $companyName;

    /**
     * @var string
     */
    private $phone;

    /**
     * @var string
     */
    private $email;

    /**
     * @var AddressInterface
     */
    private $address;

    /**
     * @var IdCardInterface
     */
    private $identity;

    /**
     * Receiver constructor.
     * @param string $contactPerson
     * @param array|\string[] $name
     * @param string $companyName
     * @param string $phone
     * @param string $email
     * @param AddressInterface $address
     * @param IdCardInterface $identity
     */
    public function __construct(
        $contactPerson,
        $name,
        $companyName,
        $phone,
        $email,
        AddressInterface $address,
        IdCardInterface $identity
    ) {
        $this->contactPerson = $contactPerson;
        $this->name = $name;
        $this->companyName = $companyName;
        $this->phone = $phone;
        $this->email = $email;
        $this->address = $address;
        $this->identity = $identity;
    }

    /**
     * @return string
     */
    public function getContactPerson()
    {
        return $this->contactPerson;
    }

    /**
     * @return string[]
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @return string
     */
    public function getCompanyName()
    {
        return $this->companyName;
    }

    /**
     * @return string
     */
    public function getPhone()
    {
        return $this->phone;
    }

    /**
     * @return string
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * @return \Dhl\Shipping\Api\Data\Webservice\RequestType\CreateShipment\ShipmentOrder\Contact\AddressInterface
     */
    public function getAddress()
    {
        return $this->address;
    }

    /**
     * @return \Dhl\Shipping\Api\Data\Webservice\RequestType\CreateShipment\ShipmentOrder\Contact\IdCardInterface
     */
    public function getId()
    {
        return $this->identity;
    }
}
