<?php

namespace Destiny2\Api\Objects\Destiny;

/**
 * Definitions.Director.DestinyActivityGraphDefinition
 */
class Definitions.Director.DestinyActivityGraphDefinition
{

    const NAME = 'Destiny.Definitions.Director.DestinyActivityGraphDefinition';

    const TYPE = 'object';

    public $nodes = [
        'type' => 'array',
        'items' => [
            '$ref' => '#/components/schemas/Destiny.Definitions.Director.DestinyActivityGraphNodeDefinition',
        ],
        'description' => 'These represent the visual "nodes" on the map\'s view. These are the activities you can click on in the map.',
    ];

    public $artElements = [
        'type' => 'array',
        'items' => [
            '$ref' => '#/components/schemas/Destiny.Definitions.Director.DestinyActivityGraphArtElementDefinition',
        ],
        'description' => 'Represents one-off/special UI elements that appear on the map.',
    ];

    public $connections = [
        'type' => 'array',
        'items' => [
            '$ref' => '#/components/schemas/Destiny.Definitions.Director.DestinyActivityGraphConnectionDefinition',
        ],
        'description' => 'Represents connections between graph nodes. However, it lacks context that we\'d need to make good use of it.',
    ];

    public $displayObjectives = [
        'type' => 'array',
        'items' => [
            '$ref' => '#/components/schemas/Destiny.Definitions.Director.DestinyActivityGraphDisplayObjectiveDefinition',
        ],
        'description' => 'Objectives can display on maps, and this is supposedly metadata for that. I have not had the time to analyze the details of what is useful within however: we could be missing important data to make this work. Expect this property to be expanded on later if possible.',
    ];

    public $displayProgressions = [
        'type' => 'array',
        'items' => [
            '$ref' => '#/components/schemas/Destiny.Definitions.Director.DestinyActivityGraphDisplayProgressionDefinition',
        ],
        'description' => 'Progressions can also display on maps, but similarly to displayObjectives we appear to lack some required information and context right now. We will have to look into it later and add more data if possible.',
    ];

    public $linkedGraphs = [
        'type' => 'array',
        'items' => [
            '$ref' => '#/components/schemas/Destiny.Definitions.Director.DestinyLinkedGraphDefinition',
        ],
        'description' => 'Represents links between this Activity Graph and other ones.',
    ];

    public $hash = [
        'type' => 'integer',
        'description' => 'The unique identifier for this entity. Guaranteed to be unique for the type of entity, but not globally.
When entities refer to each other in Destiny content, it is this hash that they are referring to.',
        'format' => 'uint32',
    ];

    public $index = [
        'type' => 'integer',
        'description' => 'The index of the entity as it was found in the investment tables.',
        'format' => 'int32',
    ];

    public $redacted = [
        'type' => 'boolean',
        'description' => 'If this is true, then there is an entity with this identifier/type combination, but BNet is not yet allowed to show it. Sorry!',
    ];


}

