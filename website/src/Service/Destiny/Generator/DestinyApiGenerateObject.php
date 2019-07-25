<?php

namespace App\Service\Destiny\Generator;

use Zend\Code\Generator\ClassGenerator;
use Zend\Code\Generator\DocBlockGenerator;
use Zend\Code\Generator\MethodGenerator;
use Zend\Code\Generator\PropertyGenerator;

/**
 * this builds Destiny API Objects
 */
class DestinyApiGenerateObject extends DestinyApiGenerateAbstract
{
    /**
     * Build bath logic
     */
    public static function build($schema)
    {
        // simple class name
        $component = explode('.', $schema['component'], 2);
        $namespace = $component[0];
        $namespace = "Objects\\{$namespace}";
        $classname = $component[1] ?? null;

        if ($classname === null) {
            $namespace = "Objects\\Generic";
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
            ->addConstant('TYPE', $schema['type']);

        if (array_key_exists('properties', $schema)) {
            foreach ($schema['properties'] as $propName => $propSchema) {
                $cls->addProperty(
                    $propName,
                    $propSchema,
                    PropertyGenerator::FLAG_PUBLIC
                );
            }
        }

        //
        // Save
        //
        DestinyApiGenerateAbstract::write($namespace, $classname, $cls);
    }
}
