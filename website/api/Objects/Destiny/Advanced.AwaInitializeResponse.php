<?php

namespace Destiny2\Api\Objects\Destiny;

/**
 * Advanced.AwaInitializeResponse
 */
class Advanced.AwaInitializeResponse
{

    const NAME = 'Destiny.Advanced.AwaInitializeResponse';

    const TYPE = 'object';

    public $correlationId = [
        'type' => 'string',
        'description' => 'ID used to get the token. Present this ID to the user as it will identify this specific request on their device.',
    ];

    public $sentToSelf = [
        'type' => 'boolean',
        'description' => 'True if the PUSH message will only be sent to the device that made this request.',
    ];


}

