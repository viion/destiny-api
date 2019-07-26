<?php

namespace Destiny2\Api\Objects\Partnerships\PublicPartnershipDetail;

/**
 * PublicPartnershipDetail
 *
 * All the partnership info that's fit to expose externally, if we care to do so.
 */
class PublicPartnershipDetail
{

    const TYPE = 'object';

    public $partnerType = [
        'type' => 'integer',
        'format' => 'int32',
        'x-enum-reference' => [
            '$ref' => '#/components/schemas/Partnerships.PartnershipType',
        ],
        'x-enum-is-bitmask' => false,
    ];

    public $identifier = [
        'type' => 'string',
    ];

    public $name = [
        'type' => 'string',
    ];

    public $icon = [
        'type' => 'string',
    ];


}

