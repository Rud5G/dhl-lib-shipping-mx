<?php
/**
 * Dhl Versenden
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
 * @package   Dhl\Versenden\Api
 * @author    Christoph Aßmann <christoph.assmann@netresearch.de>
 * @copyright 2017 Netresearch GmbH & Co. KG
 * @license   http://opensource.org/licenses/osl-3.0.php Open Software License (OSL 3.0)
 * @link      http://www.netresearch.de/
 */
namespace Dhl\Versenden\Api\Webservice\Adapter;

use \Dhl\Versenden\Api\Data\Webservice\Request\Type\GetVersionRequestInterface;
use \Dhl\Versenden\Api\Data\Webservice\Request\Type\DeleteShipmentRequestInterface;

/**
 * Business Customer Shipping API Adapter
 *
 * @category Dhl
 * @package  Dhl\Versenden\Api
 * @author   Christoph Aßmann <christoph.assmann@netresearch.de>
 * @license  http://opensource.org/licenses/osl-3.0.php Open Software License (OSL 3.0)
 * @link     http://www.netresearch.de/
 */
interface BcsAdapterInterface extends AdapterInterface
{
    /**
     * @param \Dhl\Versenden\Api\Data\Webservice\Request\Type\GetVersionRequestInterface $request
     * @return \Dhl\Versenden\Api\Data\Webservice\Response\Type\GetVersionResponseInterface
     */
    public function getVersion(GetVersionRequestInterface $request);

    /**
     * @param \Dhl\Versenden\Api\Data\Webservice\Request\Type\DeleteShipmentRequestInterface $request
     * @return \Dhl\Versenden\Api\Data\Webservice\Response\Type\DeleteShipmentResponseInterface
     */
    public function deleteShipmentOrder(DeleteShipmentRequestInterface $request);
}