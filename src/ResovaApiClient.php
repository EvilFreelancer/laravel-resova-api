<?php

namespace ResovaApi;

use Resova\Client as ResovaClient;

class ResovaApiClient
{
    /**
     * @param array $params
     *
     * @return \Resova\Client
     * @throws \ErrorException
     */
    public function getClient(array $params = [])
    {
        $configs = config('resova-api');
        $configs = array_merge($configs, $params);

        return new ResovaClient($configs);
    }
}