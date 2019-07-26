<?php

namespace Destiny2\Api\Objects\SingleComponentResponseOfDestinyItemRenderComponent;

/**
 * SingleComponentResponseOfDestinyItemRenderComponent
 *
 * No description
 */
class SingleComponentResponseOfDestinyItemRenderComponent
{

    const TYPE = 'object';

    public $data = [
        '$ref' => '#/components/schemas/Destiny.Entities.Items.DestinyItemRenderComponent',
    ];

    public $privacy = [
        'type' => 'integer',
        'format' => 'int32',
        'x-enum-reference' => [
            '$ref' => '#/components/schemas/Components.ComponentPrivacySetting',
        ],
        'x-enum-is-bitmask' => false,
    ];


}

