<?php

namespace Destiny2\Api\Objects\Partnerships;

/**
 * PublicPartnershipDetail
 */
class PublicPartnershipDetail
{

    const NAME = 'Partnerships.PublicPartnershipDetail';

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

