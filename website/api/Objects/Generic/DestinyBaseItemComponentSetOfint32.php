<?php

namespace Destiny2\Api\Objects\Generic;

/**
 * DestinyBaseItemComponentSetOfint32
 */
class DestinyBaseItemComponentSetOfint32
{

    const NAME = 'DestinyBaseItemComponentSetOfint32';

    const TYPE = 'object';

    public $objectives = [
        'x-destiny-component-type-dependency' => 'ItemObjectives',
        '$ref' => '#/components/schemas/DictionaryComponentResponseOfint32AndDestinyItemObjectivesComponent',
    ];


}

