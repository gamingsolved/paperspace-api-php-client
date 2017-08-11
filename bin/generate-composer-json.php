#!/usr/bin/env php
<?php

$versions = [];

foreach (new DirectoryIterator(__DIR__ . '/../api-definitions') as $fileInfo) {
    if ($fileInfo->isDot()) continue;
    if ($fileInfo->isDir()) {
        $versions[] = $fileInfo->getFilename();
    }
}

$autoloadStatements = '';
$autoloadDevStatements = '';

foreach ($versions as $index => $version) {
    $autoloadStatements .= '            "Gamingsolved\\\Paperspace\\\Api\\\Client\\\Version'
        . str_replace('.', '_', $version)
        . '\\\": "src-generated/paperspace-api-client/'
        . $version
        . '/lib/"';
    $autoloadDevStatements .= '            "Gamingsolved\\\Paperspace\\\Api\\\Client\\\Version'
        . str_replace('.', '_', $version)
        . '\\\": "src-generated/paperspace-api-client/'
        . $version
        . '/test/"';
    if ($index < sizeof($versions) - 1) {
        $autoloadStatements .= ",\n";
        $autoloadDevStatements .= ",\n";
    }
}

$content = file_get_contents(__DIR__ . '/../composer.json.template');

$content = str_replace('<autoload-placeholder>', $autoloadStatements, $content);
$content = str_replace('<autoload-dev-placeholder>', $autoloadDevStatements, $content);

file_put_contents(__DIR__ . '/../composer.json', $content);
