<?php

namespace Destiny2\Api\Objects\Destiny\Components\Vendors\DestinyVendorGroupComponent;

/**
 * DestinyVendorGroupComponent
 *
 * This component returns references to all of the Vendors in the response, grouped
 * by categorizations that Bungie has deemed to be interesting, in the order in
 * which both the groups and the vendors within that group should be rendered.
 */
class DestinyVendorGroupComponent
{

    const TYPE = 'object';

    public $groups = [
        'type' => 'array',
        'items' => [
            '$ref' => '#/components/schemas/Destiny.Components.Vendors.DestinyVendorGroup',
        ],
        'description' => 'The ordered list of groups being returned.',
    ];


}

