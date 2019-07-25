<?php

namespace Destiny2\Api\Objects\Generic;

/**
 * DestinyBaseItemComponentSetOfint64
 */
class DestinyBaseItemComponentSetOfint64
{

    const NAME = 'DestinyBaseItemComponentSetOfint64';

    const TYPE = 'object';

    public $objectives = [
        'x-destiny-component-type-dependency' => 'ItemObjectives',
        '$ref' => '#/components/schemas/DictionaryComponentResponseOfint64AndDestinyItemObjectivesComponent',
    ];


}

