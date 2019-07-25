<?php

namespace Destiny2\Api\Objects\Destiny;

/**
 * Definitions.DestinyItemSummaryBlockDefinition
 */
class Definitions.DestinyItemSummaryBlockDefinition
{

    const NAME = 'Destiny.Definitions.DestinyItemSummaryBlockDefinition';

    const TYPE = 'object';

    public $sortPriority = [
        'type' => 'integer',
        'description' => 'Apparently when rendering an item in a reward, this should be used as a sort priority. We\'re not doing it presently.',
        'format' => 'int32',
    ];


}

