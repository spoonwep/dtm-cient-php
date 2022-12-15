<?php

declare(strict_types=1);
/**
 * This file is part of DTM-PHP.
 *
 * @license  https://github.com/dtm-php/dtm-client/blob/master/LICENSE
 */
namespace DtmClient\Api;

use GuzzleHttp\Client;
use Hyperf\Contract\ConfigInterface;
use Psr\Container\ContainerInterface;

class HttpApiFactory
{
    public function __invoke(ContainerInterface $container)
    {
        $config = $container->get(ConfigInterface::class);
        $server = $config->get('dtm.server', '127.0.0.1');
        $port = $config->get('dtm.port.http', 36789);
        $options = $config->get('dtm.guzzle.options', []);
        $client = new Client(array_merge(
            [
                'base_uri' => $server . ':' . $port,
            ],
            $options
        ));
        return new HttpApi($client, $config);
    }
}
