<?php

declare(strict_types=1);
/**
 * This file is part of DTM-PHP.
 *
 * @license  https://github.com/dtm-php/dtm-client/blob/master/LICENSE
 */
namespace DtmClient\Grpc;

use Google\Protobuf\Internal\Message;
use Hyperf\Grpc\Parser;
use Hyperf\Grpc\StatusCode;
use Hyperf\GrpcClient\BaseClient;
use Hyperf\GrpcClient\Exception\GrpcClientException;
use Swoole\Http2\Response;

class UniversalGrpcClient extends BaseClient
{
    public function invoke(string $method, Message $argument, array $deserialize, array $metadata = [], array $options = []): array
    {
        return $this->_simpleRequest($method, $argument, $deserialize, $metadata, $options);
    }
}
