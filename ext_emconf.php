<?php

/**
 * Extension Manager/Repository config file for ext "site_package_basics".
 */
$EM_CONF[$_EXTKEY] = [
    'title' => 'Site Package Basics',
    'description' => 'TYPO3 site package basics - just demo',
    'category' => 'templates',
    'constraints' => [
        'depends' => [
            'typo3' => '8.7.0-8.7.99',
            'fluid_styled_content' => '8.7.0-8.7.99',
            'rte_ckeditor' => '8.7.0-8.7.99'
        ],
        'conflicts' => [
        ],
    ],
    'autoload' => [
        'psr-4' => [
            'HofUniversityIndie\\SitePackageBasics\\' => 'Classes'
        ],
    ],
    'state' => 'stable',
    'uploadfolder' => 0,
    'createDirs' => '',
    'clearCacheOnLoad' => 1,
    'author' => 'Oliver Hader',
    'author_email' => 'oliver.hader@typo3.org',
    'author_company' => 'Hof University Indie',
    'version' => '1.0.0',
];
