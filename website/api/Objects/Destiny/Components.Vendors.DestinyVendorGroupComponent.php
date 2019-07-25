<?php

namespace Destiny2\Api\Objects\Destiny;

/**
 * Components.Vendors.DestinyVendorGroupComponent
 */
class Components.Vendors.DestinyVendorGroupComponent
{

    const NAME = 'Destiny.Components.Vendors.DestinyVendorGroupComponent';

    const TYPE = 'object';

    public $groups = [
        'type' => 'array',
        'items' => [
            '$ref' => '#/components/schemas/Destiny.Components.Vendors.DestinyVendorGroup',
        ],
        'description' => 'The ordered list of groups being returned.',
    ];


}

