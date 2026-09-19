<?php

namespace Ababil\Ababil;

class Data
{
    private static $data = null;

    public static function get()
    {
        if (self::$data === null) {
          
            $possiblePaths = [
                __DIR__ . '/../../data.json',                    
                __DIR__ . '/../../../data.json',                 
                __DIR__ . '/../../../../data.json',               
                dirname(dirname(dirname(__DIR__))) . '/data.json', 
            ];
            
            $dataPath = null;
            foreach ($possiblePaths as $path) {
                if (file_exists($path)) {
                    $dataPath = $path;
                    break;
                }
            }
            
            if ($dataPath === null) {
                throw new \Exception("Data file not found. Tried paths: " . implode(', ', $possiblePaths));
            }

            $jsonContent = file_get_contents($dataPath);
            self::$data = json_decode($jsonContent, true);

            if (json_last_error() !== JSON_ERROR_NONE) {
                throw new \Exception("Failed to parse data.json: " . json_last_error_msg());
            }
        }

        return self::$data;
    }
}
