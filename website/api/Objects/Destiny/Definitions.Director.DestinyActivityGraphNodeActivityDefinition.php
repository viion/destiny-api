<?php

namespace Destiny2\Api\Objects\Destiny;

/**
 * Definitions.Director.DestinyActivityGraphNodeActivityDefinition
 */
class Definitions.Director.DestinyActivityGraphNodeActivityDefinition
{

    const NAME = 'Destiny.Definitions.Director.DestinyActivityGraphNodeActivityDefinition';

    const TYPE = 'object';

    public $nodeActivityId = [
        'type' => 'integer',
        'description' => 'An identifier for this node activity. It is only guaranteed to be unique within the Activity Graph.',
        'format' => 'uint32',
    ];

    public $activityHash = [
        'type' => 'integer',
        'description' => 'The activity that will be activated if the user clicks on this node. Controls all activity-related information displayed on the node if it is active (the text shown in the tooltip etc)',
        'format' => 'uint32',
        'x-mapped-definition' => [
            '$ref' => '#/components/schemas/Destiny.Definitions.DestinyActivityDefinition',
        ],
    ];


}

