<?php

namespace Destiny2\Api\Objects\Destiny\Definitions\Presentation\DestinyPresentationNodeDefinition;

/**
 * DestinyPresentationNodeDefinition
 *
 * A PresentationNode is an entity that represents a logical grouping of other
 * entities visually/organizationally.
 * For now, Presentation Nodes may contain the following... but it may be used for
 * more in the future:
 * - Collectibles - Records (Or, as the public will call them, "Triumphs." Don't
 * ask me why we're overloading the term "Triumph", it still hurts me to think
 * about it) - Other Presentation Nodes, allowing a tree of Presentation Nodes to
 * be created
 * Part of me wants to break these into conceptual definitions per entity being
 * collected, but the possibility of these different types being mixed in the same
 * UI and the possibility that it could actually be more useful to return the "bare
 * metal" presentation node concept has resulted in me deciding against that for
 * the time being.
 * We'll see if I come to regret this as well.
 */
class DestinyPresentationNodeDefinition
{

    const TYPE = 'object';

    public $displayProperties = [
        '$ref' => '#/components/schemas/Destiny.Definitions.Common.DestinyDisplayPropertiesDefinition',
    ];

    public $originalIcon = [
        'type' => 'string',
        'description' => 'The original icon for this presentation node, before we futzed with it.',
    ];

    public $rootViewIcon = [
        'type' => 'string',
        'description' => 'Some presentation nodes are meant to be explicitly shown on the "root" or "entry" screens for the feature to which they are related. You should use this icon when showing them on such a view, if you have a similar "entry point" view in your UI. If you don\'t have a UI, then I guess it doesn\'t matter either way does it?',
    ];

    public $nodeType = [
        'type' => 'integer',
        'format' => 'int32',
        'x-enum-reference' => [
            '$ref' => '#/components/schemas/Destiny.DestinyPresentationNodeType',
        ],
        'x-enum-is-bitmask' => false,
    ];

    public $scope = [
        'type' => 'integer',
        'description' => 'Indicates whether this presentation node\'s state is determined on a per-character or on an account-wide basis.',
        'format' => 'int32',
        'x-enum-reference' => [
            '$ref' => '#/components/schemas/Destiny.DestinyScope',
        ],
        'x-enum-is-bitmask' => false,
    ];

    public $objectiveHash = [
        'type' => 'integer',
        'description' => 'If this presentation node shows a related objective (for instance, if it tracks the progress of its children), the objective being tracked is indicated here.',
        'format' => 'uint32',
        'nullable' => true,
        'x-mapped-definition' => [
            '$ref' => '#/components/schemas/Destiny.Definitions.DestinyObjectiveDefinition',
        ],
    ];

    public $completionRecordHash = [
        'type' => 'integer',
        'description' => 'If this presentation node has an associated "Record" that you can accomplish for completing its children, this is the identifier of that Record.',
        'format' => 'uint32',
        'nullable' => true,
        'x-mapped-definition' => [
            '$ref' => '#/components/schemas/Destiny.Definitions.Records.DestinyRecordDefinition',
        ],
    ];

    public $children = [
        'type' => 'object',
        'allOf' => [
            [
                '$ref' => '#/components/schemas/Destiny.Definitions.Presentation.DestinyPresentationNodeChildrenBlock',
            ],
        ],
        'description' => 'The child entities contained by this presentation node.',
    ];

    public $displayStyle = [
        'type' => 'integer',
        'description' => 'A hint for how to display this presentation node when it\'s shown in a list.',
        'format' => 'int32',
        'x-enum-reference' => [
            '$ref' => '#/components/schemas/Destiny.DestinyPresentationDisplayStyle',
        ],
        'x-enum-is-bitmask' => false,
    ];

    public $screenStyle = [
        'type' => 'integer',
        'description' => 'A hint for how to display this presentation node when it\'s shown in its own detail screen.',
        'format' => 'int32',
        'x-enum-reference' => [
            '$ref' => '#/components/schemas/Destiny.DestinyPresentationScreenStyle',
        ],
        'x-enum-is-bitmask' => false,
    ];

    public $requirements = [
        'type' => 'object',
        'allOf' => [
            [
                '$ref' => '#/components/schemas/Destiny.Definitions.Presentation.DestinyPresentationNodeRequirementsBlock',
            ],
        ],
        'description' => 'The requirements for being able to interact with this presentation node and its children.',
    ];

    public $disableChildSubscreenNavigation = [
        'type' => 'boolean',
        'description' => 'If this presentation node has children, but the game doesn\'t let you inspect the details of those children, that is indicated here.',
    ];

    public $parentNodeHashes = [
        'type' => 'array',
        'items' => [
            'type' => 'integer',
            'format' => 'uint32',
        ],
        'description' => 'A quick reference to presentation nodes that have this node as a child. (presentation nodes can be parented under multiple parents)',
        'x-mapped-definition' => [
            '$ref' => '#/components/schemas/Destiny.Definitions.Presentation.DestinyPresentationNodeDefinition',
        ],
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

