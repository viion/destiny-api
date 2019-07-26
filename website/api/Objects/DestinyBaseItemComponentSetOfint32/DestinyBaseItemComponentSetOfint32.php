<?php

namespace Destiny2\Api\Objects\DestinyBaseItemComponentSetOfint32;

/**
 * DestinyBaseItemComponentSetOfint32
 *
 * No description
 */
class DestinyBaseItemComponentSetOfint32
{

    const TYPE = 'object';

    public $objectives = [
        'x-destiny-component-type-dependency' => 'ItemObjectives',
        '$ref' => '#/components/schemas/DictionaryComponentResponseOfint32AndDestinyItemObjectivesComponent',
    ];


}

