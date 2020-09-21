<?php

namespace Montross50\UptimeRobotApi\SDK\Exception;

class DeleteMonitorBadRequestException extends \RuntimeException implements ClientException
{
    public function __construct()
    {
        parent::__construct('bad parameter', 400);
    }
}
