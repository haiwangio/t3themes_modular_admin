<?php

# Extension Manager/Repository config file for ext: "t3themes_modular_admin"

$EM_CONF[$_EXTKEY] = [
    'title' => 'TYPO3 Themes - ModularAdmin',
    'description' => 'Free Admin Dashboard Theme Integration for EXT:t3cms. You can integrate the "ready-to-use html content" with fluid content, dce, flux, mask, cdeditor or something else.',
    'category' => 'distribution',
    'author' => 'Salvatore Eckel',
    'author_email' => 'salvaracer@gmx.de',
    'state' => 'beta',
    'internal' => '',
    'uploadfolder' => '0',
    'createDirs' => '',
    'clearCacheOnLoad' => 0,
    'version' => '0.9.0',
    'constraints' => [
        'depends' => [
            'typo3' => '7.6.24-9.99.99',
        ],
        'conflicts' => [],
        'suggests' => [
            't3cms' => '2.0.0-2.99.99',
        ],
    ],
];
