<?php

namespace Destiny2\Api\Objects\Destiny\Definitions\Records\DestinyRecordExpirationBlock;

/**
 * DestinyRecordExpirationBlock
 *
 * If this record has an expiration after which it cannot be earned, this is some
 * information about that expiration.
 */
class DestinyRecordExpirationBlock
{

    const TYPE = 'object';

    public $hasExpiration = [
        'type' => 'boolean',
    ];

    public $description = [
        'type' => 'string',
    ];

    public $icon = [
        'type' => 'string',
    ];


}

