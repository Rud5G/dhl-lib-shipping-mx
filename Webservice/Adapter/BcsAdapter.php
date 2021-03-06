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
namespace Dhl\Shipping\Webservice\Adapter;

use Dhl\Shipping\Api\Webservice\Client\BcsSoapClientInterface;
use \Dhl\Shipping\Api\Webservice\RequestMapper;
use \Dhl\Shipping\Api\Webservice\ResponseParser;
use \Dhl\Shipping\Api\Data\Webservice\RequestType;
use \Dhl\Shipping\Api\Data\Webservice\ResponseType;
use \Dhl\Shipping\Api\Webservice\Adapter\BcsAdapterInterface;
use \Dhl\Shipping\Bcs as BcsApi;

/**
 * Business Customer Shipping API Adapter
 *
 * @category Dhl
 * @package  Dhl\Shipping\Api
 * @author   Christoph Aßmann <christoph.assmann@netresearch.de>
 * @license  http://opensource.org/licenses/osl-3.0.php Open Software License (OSL 3.0)
 * @link     http://www.netresearch.de/
 */
class BcsAdapter extends AbstractAdapter implements BcsAdapterInterface
{
    const WEBSERVICE_VERSION_MAJOR = '2';
    const WEBSERVICE_VERSION_MINOR = '2';
    const WEBSERVICE_VERSION_BUILD = '';

    /**
     * @var ResponseParser\BcsResponseParserInterface
     */
    private $responseParser;

    /**
     * @var RequestMapper\BcsDataMapperInterface
     */
    private $apiDataMapper;

    /**
     * @var BcsSoapClientInterface
     */
    private $soapClient;

    /**
     * BcsAdapter constructor.
     * @param ResponseParser\BcsResponseParserInterface $responseParser
     * @param RequestMapper\BcsDataMapperInterface $dataMapper
     * @param BcsSoapClientInterface $soapClient
     */
    public function __construct(
        ResponseParser\BcsResponseParserInterface $responseParser,
        RequestMapper\BcsDataMapperInterface $dataMapper,
        BcsSoapClientInterface $soapClient
    ) {
        $this->responseParser = $responseParser;
        $this->apiDataMapper = $dataMapper;
        $this->soapClient = $soapClient;
    }

    /**
     * @param RequestType\CreateShipment\ShipmentOrderInterface $shipmentOrder
     * @return bool
     */
    protected function canHandleShipmentOrder(RequestType\CreateShipment\ShipmentOrderInterface $shipmentOrder)
    {
        $shipperCountries = ['DE', 'AT'];
        return in_array($shipmentOrder->getShipper()->getAddress()->getCountryCode(), $shipperCountries);
    }

    /**
     * @param RequestType\CreateShipment\ShipmentOrderInterface[] $shipmentOrders
     * @return ResponseType\CreateShipment\LabelInterface[]
     */
    protected function createShipmentOrders(array $shipmentOrders)
    {
        $version = new BcsApi\Version(self::WEBSERVICE_VERSION_MAJOR, self::WEBSERVICE_VERSION_MINOR, null);

        $shipmentOrders = array_map(
            function ($shipmentOrder) {
                return $this->apiDataMapper->mapShipmentOrder($shipmentOrder);
            },
            $shipmentOrders
        );

        $requestType = new BcsApi\CreateShipmentOrderRequest($version, $shipmentOrders);
        $soapResponse = $this->soapClient->createShipmentOrder($requestType);

        $response = $this->responseParser->parseCreateShipmentResponse($soapResponse);
        return $response;
    }

    /**
     * @param RequestType\GetVersionRequestInterface $versionRequest
     * @return ResponseType\GetVersionResponseInterface
     */
    public function getVersion(RequestType\GetVersionRequestInterface $versionRequest)
    {
        $requestType = new BcsApi\Version(
            $versionRequest->getMajorRelease(),
            $versionRequest->getMinorRelease(),
            $versionRequest->getBuild()
        );
        $soapResponse = $this->soapClient->getVersion($requestType);

        $response = $this->responseParser->parseGetVersionResponse($soapResponse);
        return $response;
    }

    /**
     * @param string[] $shipmentNumbers
     * @return \Dhl\Shipping\Api\Data\Webservice\ResponseType\DeleteShipmentResponseInterface
     * @throws \Exception
     */
    public function cancelLabels(array $shipmentNumbers)
    {
        throw new \Exception('Not yet implemented.');
    }
}
