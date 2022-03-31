<?php

########################################################################
# Extension Manager/Repository config file for ext "base_css".
########################################################################

$EM_CONF[$_EXTKEY] = [
    'title' => 'CSS Parser',
    'description' => 'This provides the PHP-CSS-Parser.',
    'category' => 'misc',
    'version' => '0.0.3',
    'state' => 'stable',
    'uploadfolder' => 0,
    'createDirs' => '',
    'clearcacheonload' => 1,
    'author' => 'Raphael Schweikert, Franz Holzinger',
    'author_email' => 'franz@ttproducts.de',
    'author_company' => 'jambage.com',
    'constraints' => [
        'depends' => [
            'typo3' => '9.5.0-11.5.99'
        ],
        'conflicts' => [
        ],
        'suggests' => [
        ]
    ]
];
