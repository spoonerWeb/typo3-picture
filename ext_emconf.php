<?php

$EM_CONF[$_EXTKEY] = [
    'title' => '(Sudhaus7) Responsive Picture',
    'description' => 'Add media variations to the Image / filereference Element including crop support using the image and source tags with fallback to img',
    'category' => 'fe',
    'version' => '0.9.7',
    'state' => 'stable',
    'createDirs' => '',
    'upload_folder' => false,
    'clearcacheonload' => 0,
    'author' => 'Markus Hofmann & Frank Berger',
    'author_email' => 'mhofmann@sudhaus7.de',
    'author_company' => 'Sudhaus7, a B-Factor GmbH label',
    'constraints' => [
        'depends' => [
            'typo3' => '9.5.0-10.4.99'
        ],
        'conflicts' => [
        ],
        'suggests' => [
        ],
    ],
    'autoload' => [
        'psr-4' => [
            'SUDHAUS7\\ResponsivePicture\\' => 'Classes'
        ]
    ],
];

