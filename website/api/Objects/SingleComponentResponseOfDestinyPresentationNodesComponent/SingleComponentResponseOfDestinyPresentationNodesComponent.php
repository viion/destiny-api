<?php

namespace Destiny2\Api\Objects\SingleComponentResponseOfDestinyPresentationNodesComponent;

/**
 * SingleComponentResponseOfDestinyPresentationNodesComponent
 *
 * No description
 */
class SingleComponentResponseOfDestinyPresentationNodesComponent
{

    const TYPE = 'object';

    public $data = [
        '$ref' => '#/components/schemas/Destiny.Components.Presentation.DestinyPresentationNodesComponent',
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

