<?php

namespace App\Command;

use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\ConsoleOutput;
use Symfony\Component\Console\Output\OutputInterface;

class BuildApiObjectsCommand extends Command
{
    protected function configure()
    {
        $this
            ->setName('app:build:api')
            ->setDescription('Creates the entire Destiny 2 API')
            ->setHelp('Run this, and watch the magic happen')
        ;
    }

    protected function execute(InputInterface $input, OutputInterface $output)
    {
        $console = new ConsoleOutput();

        // Step 1) Get the Destiny API Schema
        $console->writeln("Downloading API Schema");
        $definition = file_get_contents('https://raw.githubusercontent.com/Bungie-net/api/master/openapi.json');
        $definition = json_decode($definition, true);

        $console->writeln($definition['info']['title']);
        $console->writeln($definition['info']['description']);
        $console->writeln("");

        //
        // Step 2) Build paths
        //
        $console->writeln("<info>Building: ". count($definition['paths']) ." API Endpoint Paths</info>");

        foreach ($definition['paths'] as $uri => $schema) {
            $console->writeln("Path: <comment>{$schema['summary']}</comment>");

            // simple class name
            [$namespace, $classname] = explode('.', $schema['summary']);

            // default for blank namespaces
            $namespace = $namespace ?: 'Core';

            // Object template
            $template = [
                'classname'     => $classname,
                'namespace'     => $namespace,
                'uri'           => $uri,
                'name'          => $schema['summary'],
                'description'   => wordwrap($schema['description'], 75, "\n * "),
                'method'        => $this->detectMethod($schema),
                'params'        => '',
                'responses'     => '',
            ];

            //
            // Handle: GET
            //
            if (isset($schema['get'])) {
                $info = $schema['get'];

                $template['tags']           = implode(',', $info['tags']);
                $template['operationId']    = $info['operationId'];
                $template['is_preview']     = in_array('Preview', $info['tags']) ? 'true' : 'false';
                $template['is_deprecated']  = $info['deprecated'] ? 'true' : 'false';

                // append all parameters
                if ($info['parameters']) {
                    // todo ....
                }

                // append all responses
                if ($info['responses']) {
                    $template['responses'] = [];

                    foreach ($info['responses'] as $httpCode => $ref) {
                        $ref = $ref['$ref'];
                        $template['responses'][] = "{$httpCode} => '{$ref}'";
                    }

                    $template['responses'] = implode(",\n", $template['responses']);
                }
            }

            // build file
            $fileCode = file_get_contents(__DIR__.'/../ApiTemplates/DestinyApiPath.php.template');
            foreach ($template as $key => $value) {
                $key = "{{$key}}";
                $fileCode = str_ireplace($key, $value, $fileCode);
            }

            // build filename
            $filename = "{$classname}.php";

            // build folder
            $folder = __DIR__ ."/../../api/Paths/{$namespace}";
            if (!is_dir($folder)) {
                mkdir($folder, 0777, true);
            }

            // inject
            file_put_contents("{$folder}/{$filename}", $fileCode);
        }
    }

    /**
     * Detect the HTTP method use by the path schema
     *
     * @param array $schema
     * @return string
     */
    private function detectMethod(array $schema): string
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
