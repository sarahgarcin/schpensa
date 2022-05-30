<?php

Kirby::plugin('sarahgarcin/row', [



    'tags' => [
        'row' => [
            'html' => function ($tag) {
                return '<div class="row-images">';
            }
        ]
    ]
]);

