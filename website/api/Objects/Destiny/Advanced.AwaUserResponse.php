<?php

namespace Destiny2\Api\Objects\Destiny;

/**
 * Advanced.AwaUserResponse
 */
class Advanced.AwaUserResponse
{

    const NAME = 'Destiny.Advanced.AwaUserResponse';

    const TYPE = 'object';

    public $selection = [
        'type' => 'integer',
        'description' => 'Indication of the selection the user has made (Approving or rejecting the action)',
        'format' => 'int32',
        'x-enum-reference' => [
            '$ref' => '#/components/schemas/Destiny.Advanced.AwaUserSelection',
        ],
        'x-enum-is-bitmask' => false,
    ];

    public $correlationId = [
        'type' => 'string',
        'description' => 'Correlation ID of the request',
    ];

    public $nonce = [
        'type' => 'array',
        'items' => [
            'type' => 'string',
            'format' => 'byte',
        ],
        'description' => 'Secret nonce received via the PUSH notification.',
    ];


}

