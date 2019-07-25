<?php

namespace App\Service\Destiny\Generator;

use Zend\Code\Generator\DocBlockGenerator;
use Zend\Code\Generator\FileGenerator;

class DestinyApiGenerateAbstract
{
    const API_NAMESPACE = 'Destiny2\\Api';

    /**
     * Write generated code to file
     */
    public static function write($namespace, $classname, $class)
    {
        // build filename
        $classname = "{$classname}.php";

        // build folder
        $namespace = __DIR__ ."/../../../../api/{$namespace}";
        $namespace = str_ireplace('\\', '/', $namespace);

        // make folder if it does not exist
        if (!is_dir($namespace)) {
            mkdir($namespace, 0777, true);
        }

        $file = FileGenerator::fromArray([
            'classes' => [ $class ],
        ]);

        // Save code
        file_put_contents("{$namespace}/{$classname}", $file->generate());
    }

    /**
     * Detect the HTTP method use by the path schema
     */
    public static function getMethod(array $schema): string
    {
        if (isset($schema['get'])) {
            return 'GET';
        }

        if (isset($schema['post'])) {
            return 'POST';
        }

        print_r($schema);

        throw new \Exception("Unknown Schema HTTP Method");
    }
}
