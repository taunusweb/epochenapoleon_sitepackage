<?php

/**
 * Extension Manager/Repository config file for ext "epoche_napoleon_sitepackage".
 */
$EM_CONF[$_EXTKEY] = [
    'title' => 'EPOCHE NAPOLEON Sitepackage',
    'description' => 'Configuration of EPOCHE NAPOLEON',
    'category' => 'templates',
    'constraints' => [
        'depends' => [
            'typo3' => '8.7.0-9.5.99',
            'fluid_styled_content' => '8.7.0-9.5.99',
            'rte_ckeditor' => '8.7.0-9.5.99'
        ],
        'conflicts' => [
        ],
    ],
    'autoload' => [
        'psr-4' => [
            'EpocheNapoleon\\EpocheNapoleonSitepackage\\' => 'Classes'
        ],
    ],
    'state' => 'stable',
    'uploadfolder' => 0,
    'createDirs' => '',
    'clearCacheOnLoad' => 1,
    'author' => 'Michael Gnessner',
    'author_email' => 'technik@epoche-napoleon.net',
    'author_company' => 'EPOCHE NAPOLEON',
    'version' => '0.3.0',
];
