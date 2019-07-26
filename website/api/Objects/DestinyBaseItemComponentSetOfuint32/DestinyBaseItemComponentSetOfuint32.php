<?php

namespace Destiny2\Api\Objects\DestinyBaseItemComponentSetOfuint32;

/**
 * DestinyBaseItemComponentSetOfuint32
 *
 * No description
 */
class DestinyBaseItemComponentSetOfuint32
{

    const TYPE = 'object';

    public $objectives = [
        'x-destiny-component-type-dependency' => 'ItemObjectives',
        '$ref' => '#/components/schemas/DictionaryComponentResponseOfuint32AndDestinyItemObjectivesComponent',
    ];


}

