<?php

namespace InTradeSys\eBay\bulkDataExchange;


class EbatNsBulkDataExchange_Client extends EbatNsBulkDataExchange_AbstractClient
{
    /**
     * @var string $method
     * @var BaseServiceRequest|BaseServiceRequest[] $request
     * @return EbatNsBulkDataExchange_ResponseError|BaseServiceResponse|array
     */
    public function call($method, $request)
    {
        $responses = [];

        foreach ($this->callEach($method, $request) as $response) {
            $responses[] = $response->getObject();
        }

        return is_array($request) ? $responses : $responses[0];
    }

    /**
     * @param string $method
     * @param BaseServiceRequest $request
     * @return EbatNsBulkDataExchange_Curler
     */
    protected function prepareCall($method, $request)
    {
        $this->reportApiCall($method);

        $session = $this->getSession();
        $credentialHeaders = $session->getSoapCredentialHeaders();

        return $this->curlRequestType($request, $method)
            ->withSoaMethod($method)
            ->withSoaServiceName('BulkDataExchangeService')
            ->withHeaders($credentialHeaders)
            ->request();
    }
}
