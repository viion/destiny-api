<?php

namespace App\Service\Destiny\Generator;

use Zend\Code\Generator\ClassGenerator;
use Zend\Code\Generator\DocBlockGenerator;
use Zend\Code\Generator\MethodGenerator;

/**
 * this builds Destiny API Enums
 */
class DestinyApiGenerateEnum extends DestinyApiGenerateAbstract
{
    /**
     * Build bath logic
     */
    public static function build($schema)
    {
        // simple class name
        $component = explode('.', $schema['component']);
        $namespace = $component[0];
        $namespace = "Enums\\{$namespace}";
        $classname = $component[1] ?? null;

        if ($classname === null) {
            $namespace = "Enums\\Generic";
            $classname = $component[0];
        }

        // build class
        $cls = new ClassGenerator();
        $cls->setName($classname)
            ->setNamespaceName(self::API_NAMESPACE .'\\'. $namespace)
            ->setDocBlock(
                DocBlockGenerator::fromArray([
                    'shortDescription' => $classname,
                ])
            )
            ->addConstant('NAME', $schema['component'])
            ->addConstant('TYPE', $schema['type'])
            ->addConstant('TYPE_FORMAT', $schema['format'])
            ->addConstant('ENUMS_ALLOWED', $schema['enum']);

        $enumValues = [];
        foreach ($schema['x-enum-values'] as $val) {
            $enumValues[$val['identifier']] = $val['numericValue'];
        }

        $cls->addConstant('ENUMS', $enumValues);

        //
        // Save
        //
        DestinyApiGenerateAbstract::write($namespace, $classname, $cls);
    }
}
