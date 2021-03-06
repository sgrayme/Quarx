<?php

/*
|--------------------------------------------------------------------------
| Quarx Config
|--------------------------------------------------------------------------
*/

return [

    'frontend-namespace' => '\App\Http\Controllers\Quarx',

    'module-directory' => 'quarx/modules',

    'appAdminEmail' => '',
    'appAdminName' => '',

    'registrationAvailable' => false,

    'theme' => 'united', // cosmo, cyborg, darkly, flatly, hero, journal, lumen, paper, readable, sandstone, simplex, slate, united, yeti

    'maxFileUploadSize' => 6291456, // 6MB

    'pagination' => 25,

    'apiKey' => 'gALPkYVALEtQYWztKy3d',
    'apiToken' => 'fwCVH1bJEV3GOCyGDDNP',

    'modules' => [
        'blog',
        'menus',
        'files',
        'images',
        'pages',
        'widgets',
        'events',
        'faqs',
    ],

    'forms' => [
        'blog' => [
            'title'       => [
                'type' => 'string',
            ],
            'url'       => [
                'type' => 'string',
            ],
            'tags'       => [
                'type' => 'string',
                'class' => 'tags'
            ],
            'entry'       => [
                'type' => 'text',
                'class' => 'redactor',
                'alt_name' => 'Content',
            ],
            'is_published' => [
                'type' => 'checkbox',
                'alt_name' => 'Published'
            ],
        ],

        'images' => [
            'location'       => [
                'type' => 'file',
                'alt_name' => 'File'
            ],
            'name'       => [
                'type' => 'string',
            ],
            'alt_tag'       => [
                'type' => 'string',
                'alt_name' => 'Alt Tag',
            ],
            'title_tag'       => [
                'type' => 'string',
                'alt_name' => 'Title Tag',
            ],
            'tags'       => [
                'type' => 'string',
                'class' => 'tags'
            ],
            'is_published' => [
                'type' => 'checkbox',
                'alt_name' => 'Published'
            ],
        ],

        'page' => [
            'title'       => [
                'type' => 'string',
            ],
            'url'       => [
                'type' => 'string',
            ],
            'entry'       => [
                'type' => 'text',
                'class' => 'redactor',
                'alt_name' => 'Content',
            ],
            'is_published' => [
                'type' => 'checkbox',
                'alt_name' => 'Published'
            ],
        ],

        'widget' => [
            'name'       => [
                'type' => 'string',
            ],
            'uuid'       => [
                'type' => 'string',
            ],
            'content'       => [
                'type' => 'text',
                'class' => 'redactor',
            ],
        ],

        'faqs' => [
            'question'       => [
                'type' => 'string',
            ],
            'answer'       => [
                'type' => 'text',
                'class' => 'redactor',
            ],
            'is_published' => [
                'type' => 'checkbox',
                'alt_name' => 'Published'
            ],
        ],

        'menu' => [
            'name' => [
                'type' => 'string'
            ],
            'uuid' => [
                'type' => 'string'
            ],
        ],

        'link' => [
            'name'       => [
                'type' => 'string',
            ],
            'external'       => [
                'type' => 'checkbox',
                'custom' => 'value="1"'
            ],
            'external_url' => [
                'type' => 'string',
                'alt_name' => 'Url'
            ],
            'menu_id' => [
                'type' => 'hidden',
            ],
        ],

        'files' => [
            'is_published'      => [
                'type' => 'checkbox',
                'value' => 1
            ],
            'tags'       => [
                'custom' => 'data-role="tagsinput"'
            ],
            'details'       => [
                'type' => 'textarea'
            ],
        ],

        'file-edit' => [
            'name'       => [],
            'is_published'      => [
                'type' => 'checkbox',
                'value' => 1
            ],
            'tags'       => [
                'custom' => 'data-role="tagsinput"'
            ],
            'details'       => [
                'type' => 'textarea'
            ],
        ],

        'event' => [
            'title'       => [
                'type' => 'string',
            ],
            'start_date'       => [
                'type' => 'string',
                'class' => 'datepicker',
            ],
            'end_date'       => [
                'type' => 'string',
                'class' => 'datepicker',
            ],
            'details'       => [
                'type' => 'text',
                'class' => 'redactor',
                'alt_name' => 'Details',
            ],
            'is_published' => [
                'type' => 'checkbox',
                'alt_name' => 'Published'
            ],
        ],
    ]

];
