<?php

########################################################################
# Extension Manager/Repository config file for ext "base_css".
########################################################################

$EM_CONF[$_EXTKEY] = array(
    'title' => 'CSS Parser',
    'description' => 'This provides the PHP-CSS-Parser.',
    'category' => 'misc',
    'version' => '0.0.1',
    'state' => 'stable',
    'uploadfolder' => 0,
    'createDirs' => '',
    'clearcacheonload' => 1,
    'author' => 'Raphael Schweikert, Franz Holzinger',
    'author_email' => 'franz@ttproducts.de',
    'author_company' => 'jambage.com',
    'constraints' => array(
        'depends' => array(
            'php' => '5.4.0-7.0.99',
            'typo3' => '6.2.0-9.3.99'
        ),
        'conflicts' => array(
        ),
        'suggests' => array(
        ),
    ),
);
