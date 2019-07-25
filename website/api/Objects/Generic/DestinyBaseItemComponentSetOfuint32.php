<?php

namespace Destiny2\Api\Objects\Generic;

/**
 * DestinyBaseItemComponentSetOfuint32
 */
class DestinyBaseItemComponentSetOfuint32
{

    const NAME = 'DestinyBaseItemComponentSetOfuint32';

    const TYPE = 'object';

    public $objectives = [
        'x-destiny-component-type-dependency' => 'ItemObjectives',
        '$ref' => '#/components/schemas/DictionaryComponentResponseOfuint32AndDestinyItemObjectivesComponent',
    ];


}

