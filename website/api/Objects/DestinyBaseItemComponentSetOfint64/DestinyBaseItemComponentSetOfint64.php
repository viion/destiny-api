<?php

namespace Destiny2\Api\Objects\DestinyBaseItemComponentSetOfint64;

/**
 * DestinyBaseItemComponentSetOfint64
 *
 * No description
 */
class DestinyBaseItemComponentSetOfint64
{

    const TYPE = 'object';

    public $objectives = [
        'x-destiny-component-type-dependency' => 'ItemObjectives',
        '$ref' => '#/components/schemas/DictionaryComponentResponseOfint64AndDestinyItemObjectivesComponent',
    ];


}

