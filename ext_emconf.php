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
    'version' => '0.9.3',
    'constraints' => [
        'depends' => [
            'typo3' => '7.6.18-9.99.99',
            't3cms' => '2.0.1'
        ],
        'conflicts' => [],
        'suggests' => [],
    ],
    'autoload' => [
        'psr-4' =>  [
            'SalvatoreEckel\\T3themesModularAdmin\\' => 'Classes',
        ],
    ],
];
