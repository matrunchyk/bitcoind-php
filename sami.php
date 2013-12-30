<?php

/**
 * This file allows documentation to be generated based on the docblocks
 * in the files.
 *
 * @see https://github.com/fabpot/Sami
 */
use Sami\Sami;
use Symfony\Component\Finder\Finder;

$iterator = Finder::create()
    ->files()
    ->name('*.php')
    ->in(__DIR__ . '/src');

return new Sami($iterator, array(
    'title' => 'matrunchyk/bitcoind-php API Docs',
    'build_dir' => __DIR__ . '/docs',
));
